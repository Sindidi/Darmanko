<?php

namespace SNT\DarmankoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use SNT\DarmankoBundle\Entity\Proprietaire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class apiController extends Controller
{
    /**
     * @Route("/all", name="Tout")
     * @Method({"GET"})
     */
    public function AllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Proprietaire = $em->getRepository('SNTDarmankoBundle:Proprietaire')->findAll();

        if (empty($Proprietaire)) {
            $reponse = array(
                'code' => 1,
                'Message' => 'Pas de resultat',
                'error' => null,
                'result' => null,
            );

            return new JsonResponse($reponse, Response::HTTP_NOT_FOUND);
        }

        $data = $this->get('jms_serializer')->serialize($Proprietaire, 'json');

        $response = array(
            'code' => 0,
            'Message' => 'success',
            'error' => null,
            'result' => json_decode($data),
        );

        return new JsonResponse($response, 201);
    }

    /**
     * @Route("/add", name="AjouterBien")
     * @Method({"POST"})
     */
    public function addAction(Request $request)
    {
        $Proprietaire = $request->getContent();

        $data = $this->get('jms_serializer')->deserialize($Proprietaire, "SNT\DarmankoBundle\Entity\Proprietaire", 'json');

        if (empty($data)) {
            return new JsonResponse($reponse, Response::HTTP_BAD_REQUEST);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();

        $response = array(
            'code' => 0,
            'Message' => 'success',
            'error' => null,
            'result' => null,
        );

        return new JsonResponse($response, Response::HTTP_CREATED);
    }
}
