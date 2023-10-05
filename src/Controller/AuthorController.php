<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

     /**
     * @Route("/author/{name}", name="author")
     */
    public function showAuthor($name): Response
    {
        
        
        return $this->render('author/index.html.twig', [
            'authorName' => $name,
        ]);
    }


     /**
     * @Route("/list", name="list")
     */
    public function liste(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => 'Victor Hugo', 'email' =>
            'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
            );



            $totalBooks = 0;

            // Calcul du nombre total de livres
            foreach ($authors as $l) {
                $totalBooks += $l['nb_books'];
            }
    
        return $this->render('author/list.html.twig', [
            't'=>$totalBooks,
            'l'=>$authors,
        ]);
    }


     /**
     * @Route("/detail/{id}", name="detail")
     */
    public function authordetail($id): Response
    {
        return $this->render('author/list.html.twig', [
            'id'=>$id,
        ]);

    }

    }
