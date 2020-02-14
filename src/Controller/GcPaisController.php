<?php

namespace App\Controller;

use App\Entity\GcPais;
use App\Form\GcPaisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gc/pais")
 */
class GcPaisController extends AbstractController
{
    /**
     * @Route("/", name="gc_pais_index", methods={"GET"})
     */
    public function index(): Response
    {
        $gcPais = $this->getDoctrine()
            ->getRepository(GcPais::class)
            ->findAll();

        return $this->render('gc_pais/index.html.twig', [
            'gc_pais' => $gcPais,
        ]);
    }

    /**
     * @Route("/new", name="gc_pais_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $gcPai = new GcPais();
        $form = $this->createForm(GcPaisType::class, $gcPai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($gcPai);
            $entityManager->flush();

            return $this->redirectToRoute('gc_pais_index');
        }

        return $this->render('gc_pais/new.html.twig', [
            'gc_pai' => $gcPai,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{paId}", name="gc_pais_show", methods={"GET"})
     */
    public function show(GcPais $gcPai): Response
    {
        return $this->render('gc_pais/show.html.twig', [
            'gc_pai' => $gcPai,
        ]);
    }

    /**
     * @Route("/{paId}/edit", name="gc_pais_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GcPais $gcPai): Response
    {
        $form = $this->createForm(GcPaisType::class, $gcPai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gc_pais_index');
        }

        return $this->render('gc_pais/edit.html.twig', [
            'gc_pai' => $gcPai,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{paId}", name="gc_pais_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GcPais $gcPai): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gcPai->getPaId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($gcPai);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gc_pais_index');
    }
}
