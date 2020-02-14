<?php

namespace App\Controller;

use App\Entity\GcPerfil;
use App\Form\GcPerfilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gc/perfil")
 */
class GcPerfilController extends AbstractController
{
    /**
     * @Route("/", name="gc_perfil_index", methods={"GET"})
     */
    public function index(): Response
    {
        $gcPerfils = $this->getDoctrine()
            ->getRepository(GcPerfil::class)
            ->findAll();

        return $this->render('gc_perfil/index.html.twig', [
            'gc_perfils' => $gcPerfils,
        ]);
    }

    /**
     * @Route("/new", name="gc_perfil_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $gcPerfil = new GcPerfil();
        $form = $this->createForm(GcPerfilType::class, $gcPerfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($gcPerfil);
            $entityManager->flush();

            return $this->redirectToRoute('gc_perfil_index');
        }

        return $this->render('gc_perfil/new.html.twig', [
            'gc_perfil' => $gcPerfil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{prId}", name="gc_perfil_show", methods={"GET"})
     */
    public function show(GcPerfil $gcPerfil): Response
    {
        return $this->render('gc_perfil/show.html.twig', [
            'gc_perfil' => $gcPerfil,
        ]);
    }

    /**
     * @Route("/{prId}/edit", name="gc_perfil_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GcPerfil $gcPerfil): Response
    {
        $form = $this->createForm(GcPerfilType::class, $gcPerfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gc_perfil_index');
        }

        return $this->render('gc_perfil/edit.html.twig', [
            'gc_perfil' => $gcPerfil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{prId}", name="gc_perfil_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GcPerfil $gcPerfil): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gcPerfil->getPrId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($gcPerfil);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gc_perfil_index');
    }
}
