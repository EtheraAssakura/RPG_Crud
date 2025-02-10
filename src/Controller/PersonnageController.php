<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Personnage;
use App\Security\PersonnageVoter;
use App\Form\PersonnageType;
use App\Repository\PersonnageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/personnage')]
final class PersonnageController extends AbstractController
{
    #[Route(name: 'app_personnage_index', methods: ['GET','POST'])]
    public function index(PersonnageRepository $personnageRepository, #[CurrentUser] User $user): Response
    {
        $personnages = $personnageRepository->findByUser($user);

        return $this->render('personnage/index.html.twig', [
            'personnages' => $personnages,
        ]);
    }
    
    #[Route('/bo/new', name: 'app_personnage_new', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED')]    
    public function new(Request $request, EntityManagerInterface $entityManager, #[CurrentUser] User $user): Response
    {
        $personnage = new Personnage();
        $personnage->setUser($user);
        $form = $this->createForm(PersonnageType::class, $personnage);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($personnage);
            $entityManager->flush();
            
            return $this->redirectToRoute('app_personnage_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('personnage/new.html.twig', [
            'personnage' => $personnage,
            'form' => $form,
        ]);
    }
    
    #[Route('/{id}', name: 'app_personnage_show', methods: ['GET'])]
    #[IsGranted('view','personnage')]
    public function show(Personnage $personnage): Response
    {
        return $this->render('personnage/show.html.twig', [
            'personnage' => $personnage,
        ]);
    }
    
    #[Route('/bo/{id}/edit', name: 'app_personnage_edit', methods: ['GET', 'POST'])]
    #[IsGranted('edit', 'personnage')]
    public function edit(Request $request, Personnage $personnage, EntityManagerInterface $entityManager): Response
    {
        // $this->denyAccessUnlessGranted('edit', $personnage);

        $form = $this->createForm(PersonnageType::class, $personnage);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            return $this->redirectToRoute('app_personnage_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('personnage/edit.html.twig', [
            'personnage' => $personnage,
            'form' => $form,
        ]);
    }
    
    #[Route('/bo/{id}', name: 'app_personnage_delete', methods: ['POST'])]
    public function delete(Request $request, Personnage $personnage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personnage->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($personnage);
            $entityManager->flush();
        }
        
        return $this->redirectToRoute('app_personnage_index', [], Response::HTTP_SEE_OTHER);
    }
}

