<?php

namespace App\Controller;

use App\Entity\GcUsuario;
use App\Form\GcUsuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gc/usuario")
 */
class GcUsuarioController extends AbstractController
{
    /**
     * @Route("/", name="gc_usuario_index", methods={"GET"})
     */
    public function index(): Response
    {
        $gcUsuarios = $this->getDoctrine()
            ->getRepository(GcUsuario::class)
            ->findAll();

        return $this->render('gc_usuario/index.html.twig', [
            'gc_usuarios' => $gcUsuarios,
        ]);
    }

    /**
     * @Route("/new", name="gc_usuario_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $gcUsuario = new GcUsuario();
        $form = $this->createForm(GcUsuarioType::class, $gcUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($gcUsuario);
            $entityManager->flush();

            return $this->redirectToRoute('gc_usuario_index');
        }

        return $this->render('gc_usuario/new.html.twig', [
            'gc_usuario' => $gcUsuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{usId}", name="gc_usuario_show", methods={"GET"})
     */
    public function show(GcUsuario $gcUsuario): Response
    {
        return $this->render('gc_usuario/show.html.twig', [
            'gc_usuario' => $gcUsuario,
        ]);
    }

    /**
     * @Route("/{usId}/edit", name="gc_usuario_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GcUsuario $gcUsuario): Response
    {
        $form = $this->createForm(GcUsuarioType::class, $gcUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gc_usuario_index');
        }

        return $this->render('gc_usuario/edit.html.twig', [
            'gc_usuario' => $gcUsuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{usId}", name="gc_usuario_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GcUsuario $gcUsuario): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gcUsuario->getUsId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($gcUsuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gc_usuario_index');
    }
}
