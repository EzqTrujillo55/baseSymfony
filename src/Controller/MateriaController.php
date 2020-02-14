<?php

namespace App\Controller;

use App\Entity\Materia;
use App\Form\MateriaType;
use App\Repository\MateriaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/materia")
 */
class MateriaController extends AbstractController
{
    /**
     * @Route("/", name="materia_index", methods={"GET"})
     */
    public function index(MateriaRepository $materiaRepository): Response
    {
        return $this->render('materia/index.html.twig', [
            'materias' => $materiaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="materia_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $materium = new Materia();
        $form = $this->createForm(MateriaType::class, $materium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($materium);
            $entityManager->flush();

            return $this->redirectToRoute('materia_index');
        }

        return $this->render('materia/new.html.twig', [
            'materium' => $materium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="materia_show", methods={"GET"})
     */
    public function show(Materia $materium): Response
    {
        return $this->render('materia/show.html.twig', [
            'materium' => $materium,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="materia_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Materia $materium): Response
    {
        $form = $this->createForm(MateriaType::class, $materium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('materia_index');
        }

        return $this->render('materia/edit.html.twig', [
            'materium' => $materium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="materia_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Materia $materium): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materium->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($materium);
            $entityManager->flush();
        }

        return $this->redirectToRoute('materia_index');
    }
}
