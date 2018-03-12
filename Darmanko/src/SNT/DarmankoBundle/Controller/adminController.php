<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SNT\DarmankoBundle\Entity\Localite;
use SNT\DarmankoBundle\Entity\TypeBien;
use SNT\DarmankoBundle\Entity\Bien;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class adminController extends Controller
{
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
                foreach ($images as $key => $image) {
                    $image->setImage(base64_encode(stream_get_contents($image->getImage())));
                }
            }
        }

        return $this->render('SNTDarmankoBundle:admin:enCours.html.twig', array(
            'reservations' => $reservation,
        ));
    }

    public function bienAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
        $localites = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();
        $types = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();

        return $this->render('SNTDarmankoBundle:admin:bien.html.twig', array(
            'biens' => $bien, 'localites' => $localites, 'types' => $types,
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
