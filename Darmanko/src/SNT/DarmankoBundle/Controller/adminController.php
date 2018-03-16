<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SNT\DarmankoBundle\Entity\Localite;
use SNT\DarmankoBundle\Entity\TypeBien;
use SNT\DarmankoBundle\Entity\Bien;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use SNT\DarmankoBundle\Entity\Image;

class adminController extends Controller
{
    public function loginAction()
    {
        return $this->render('SNTDarmankoBundle:admin:login.html.twig', array(
        ));
    }

    public function ajaxConnexionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proprietaire = $em->getRepository('SNTDarmankoBundle:Proprietaire')->findBy(
            array('email' => $request->get('email'), 'password' => $request->get('password'))
        );

        if ($proprietaire) {
            return new Response('ok');
        } else {
            return new Response('error');
        }
    }

    public function accueilAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('SNTDarmankoBundle:Reservation')->findAll();

        foreach ($reservations as $cle => $reservation) {
            foreach ($reservation->getBien()->getImages() as $key => $images) {
                foreach ($images as $key => $image) {
                    $image->setImage(base64_encode(stream_get_contents($image->getImage())));
                }
            }
        }

        return $this->render('SNTDarmankoBundle:admin:accueil.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    public function enCoursAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->findBy(array('etat' => 0));

        foreach ($reservation as $cle => $reservations) {
            foreach ($reservations->getBien()->getImages() as $key => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        return $this->render('SNTDarmankoBundle:admin:enCours.html.twig', array(
            'reservations' => $reservation,
        ));
    }

    public function bienAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
        $localites = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();
        $types = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();

        foreach ($bien as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        if ($request->isMethod('POST')) {
            $localite = $em->getRepository('SNTDarmankoBundle:Localite')->find($request->get('localite'));
            $type = $em->getRepository('SNTDarmankoBundle:TypeBien')->find($request->get('type'));
            $bien = new Bien();
            $bien->setNomBien($request->get('nom'));
            $bien->setType($type);
            $bien->setLocalite($localite);
            $bien->setDescription($request->get('description'));
            $bien->setPrixLocation($request->get('prix'));
            $bien->setEtat(-1);
            $em->persist($bien);
            $images = $_FILES['image'];

            foreach ($images as $key => $value) {
                $image = new Image();
                $em->persist($image);
                $image->setImage($value);
                $image->setBien($bien);
            }

            $em->flush();
        }

        return $this->render('SNTDarmankoBundle:admin:bien.html.twig', array(
            'biens' => $bien, 'localites' => $localites, 'types' => $types,
        ));
    }

    public function bienAttenteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bien = $em->getRepository('SNTDarmankoBundle:Bien')->findBy(array('etat' => -1));

        foreach ($bien as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        return $this->render('SNTDarmankoBundle:admin:bienAttente.html.twig', array(
            'biens' => $bien,
        ));
    }

    public function reservationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->find($id);

        return $this->render('SNTDarmankoBundle:admin:reservation.html.twig', array(
            'reservation' => $reservation,
        ));
    }

    public function contratAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('SNTDarmankoBundle:Reservation')->find($id);

        return $this->render('SNTDarmankoBundle:admin:contrat.html.twig', array(
            'reservation' => $reservation,
        ));
    }

    public function localiteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $localite = new Localite();
            $localite->setLibelle($request->get('localite'));
            $em->persist($localite);
            $em->flush();
        }

        $localites = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();

        return $this->render('SNTDarmankoBundle:admin:localite.html.twig', array(
            'localites' => $localites,
        ));
    }

    public function typeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            $type = new TypeBien();
            $type->setLibelle($request->get('type'));
            $type->setNiveau(0);
            $em->persist($type);
            $em->flush();
        }

        $types = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();

        return $this->render('SNTDarmankoBundle:admin:type.html.twig', array(
            'types' => $types,
        ));
    }

    public function ajaxLocaliteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $localites = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();

        $lib = array();

        foreach ($localites as $key => $value) {
            $lib[] = array('nom' => $value->getLibelle(), 'id' => $value->getId());
        }

        return new JsonResponse($lib);
    }

    public function ajaxtypeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $types = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();

        $type = array();

        foreach ($types as $key => $value) {
            $type[] = array('nom' => $value->getLibelle(), 'id' => $value->getId());
        }

        return new JsonResponse($type);
    }

    public function ajaxAddSelectAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            if ($request->get('Classe') == 'Localite') {
                $insert = new Localite();
            } else {
                $insert = new TypeBien();
                $insert->setNiveau(0);
            }

            $insert->setLibelle($request->get('libelle'));
            $em->persist($insert);
            $em->flush();
        }

        return new Response('ok');
    }
}
