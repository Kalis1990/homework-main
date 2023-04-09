<?php

namespace App\Controller;
use App\Form\ArticleFormType;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class EditController extends AbstractController
{
    private $ea;
    public function __construct(EntityManagerInterface $ea) 
    {
        $this->ea = $ea;
    }
    #[Route('/edit/article/{id}', name: 'article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, Article $article): Response
    {
        $form = $this->createForm(ArticleFormType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setTitle($form->get('title')->getData());
            $article->setText($form->get('text')->getData());
    
            $image = $form->get('image')->getData();
            if ($image) {
                // Generate a unique filename for the image
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = preg_replace('/\s+/', '_', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();
    
                // Move the file to the directory where images are stored
                try {
                    $image->move(
                        $this->getParameter('image'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle the exception if the file could not be moved
                }
    
                // Update the article's image filename
                $article->setImage($newFilename);
            }
    
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }
    
}