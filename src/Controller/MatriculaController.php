<?php

namespace App\Controller;

use App\Entity\Matricula;
use App\Form\MatriculaType;
use App\Repository\MatriculaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/matricula")
 */
class MatriculaController extends AbstractController
{
    /**
     * @Route("/", name="matricula_index", methods={"GET"})
     */
    public function index(MatriculaRepository $matriculaRepository): Response
    {
        return $this->render('matricula/index.html.twig', [
            'matriculas' => $matriculaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="matricula_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $matricula = new Matricula();
        $form = $this->createForm(MatriculaType::class, $matricula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($matricula);
            $entityManager->flush();

            return $this->redirectToRoute('matricula_index');
        }

        return $this->render('matricula/new.html.twig', [
            'matricula' => $matricula,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matricula_show", methods={"GET"})
     */
    public function show(Matricula $matricula): Response
    {
        return $this->render('matricula/show.html.twig', [
            'matricula' => $matricula,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="matricula_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Matricula $matricula): Response
    {
        $form = $this->createForm(MatriculaType::class, $matricula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matricula_index');
        }

        return $this->render('matricula/edit.html.twig', [
            'matricula' => $matricula,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matricula_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Matricula $matricula): Response
    {
        if ($this->isCsrfTokenValid('delete'.$matricula->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($matricula);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matricula_index');
    }
}
