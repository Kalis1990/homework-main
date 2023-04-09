<?php

namespace App\Controller;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;

class EditController extends AbstractController
{
    private $ea;
    public function __construct(EntityManagerInterface $ea) 
    {
        $this->ea = $ea;
    }
    #[Route('/edit/article/{id}', name: 'article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $now = new DateTime();
        $entityManager = $doctrine->getManager();
        $article = $entityManager->getRepository(Article::class)->find($id);
    
        $form = $this->createForm(ArticleFormType::class, $article);
    
        $form->handleRequest($request);
        $image = $form->get('image')->getData();
    
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }else{
            return $this->render('pages/edit.html.twig', [
                'form' => $form->createView(),
                'article' => $article
            ]);

        }
    }
}
