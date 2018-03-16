<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SNT\DarmankoBundle\Entity\Bien;
use SNT\DarmankoBundle\Entity\Client;
use SNT\DarmankoBundle\Entity\Localite;
use SNT\DarmankoBundle\Entity\TypeBien;
use SNT\DarmankoBundle\Entity\Reservation;
use SNT\DarmankoBundle\Form\ClientType;

class reservationController extends Controller
{
    public function listAction(Request $req, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isMethod('POST')) {
            if ($_POST['localite'] == '' && $_POST['type'] == '' && $_POST['max'] == '') {
                $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
            } else {
                $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->search($_POST['localite'], $_POST['type'], $_POST['max']);
                foreach ($listbien as $key => $value) {
                    foreach ($value->getImages() as $key1 => $images) {
                        $images->setImage(base64_encode(stream_get_contents($images->getImage())));
                    }
                }
            }
        } else {
            $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
        }

        // Listes des localités et types de biens pour la recherche

        $listType = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();
        $listLocalite = $em->getRepository('SNTDarmankoBundle:Localite')->findAll();

        //Les biens qui feront l'objet de slide

        $bienSlide = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();

        foreach ($bienSlide as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                foreach ($images as $key2 => $image) {
                    $image->setImage(base64_encode(stream_get_contents($image->getImage())));
                }
            }
        }

        foreach ($listbien as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        return $this->render('SNTDarmankoBundle:reservation:list.html.twig', array(
        'biens' => $listbien, 'types' => $listType, 'localites' => $listLocalite, 'bienSlide' => $bienSlide,
        ));
    }

    public function catalogueAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listbien = $em->getRepository('SNTDarmankoBundle:Bien')->findAll();
        $listType = $em->getRepository('SNTDarmankoBundle:TypeBien')->findAll();

        // Pagination des biens
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listbien,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 8)
        );

        foreach ($result as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        return $this->render('SNTDarmankoBundle:reservation:darmanko.html.twig', array(
            'biens' => $result, 'types' => $listType,
        ));
    }

    public function detailAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $bien = $em->getRepository('SNTDarmankoBundle:Bien')->find($id);

        foreach ($bien as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        //Formulaire
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        // Biens similaires
        $similaire = $em->getRepository('SNTDarmankoBundle:Bien')->findBy(array('type' => $bien->getType()));
        foreach ($similaire as $key => $value) {
            foreach ($value->getImages() as $key1 => $images) {
                $images->setImage(base64_encode(stream_get_contents($images->getImage())));
            }
        }

        //Réservation du bien
        if ($request->isMethod('POST')) {
            $reserv = new Reservation();
            $reserv->setDateReservation(new \DateTime());
            $reserv->setEtat(0);
            $reserv->setBien($bien);
            if (isset($_POST['submit'])) {
                $client = $em->getRepository('SNTDarmankoBundle:Client')
                ->findBy(['email' => $request->get('login'), 'motdepasse' => $request->get('password')]);
                if ($client) {
                    $reserv->setClient($client[0]);
                    $em->persist($reserv);
                    $em->flush();

                    return $this->render('SNTDarmankoBundle:reservation:confirm.html.twig');
                }
            } else {
                $form->HandleRequest($request);
                if ($form->isValid()) {
                    $em->persist($client);

                    $reserv->setClient($client);
                    $em->persist($reserv);
                    $em->flush();
                }

                return $this->render('SNTDarmankoBundle:reservation:confirm.html.twig');
            }
        }

        return $this->render('SNTDarmankoBundle:reservation:detail.html.twig', array(
            'bien' => $bien, 'similaire' => $similaire, 'form' => $form->createView(),
        ));
    }

    /*
    *@Route(/confirm)
    */

    public function confirmAction()
    {
        return $this->render('SNTDarmankoBundle:reservation:confirm.html.twig', array());
    }

    public function uploadAction()
    {
        return $this->render('SNTDarmankoBundle:reservation:upload.html.twig', array());
    }

    public function testAction()
    {
        $bienRepo = $this->getDoctrine()->getManager()->getRepository('SNTDarmankoBundle:Bien');
        $biens = $bienRepo->findBiens(4, 20, 500000);
        // var_dump($biens);
        echo count($biens);
    }
}
