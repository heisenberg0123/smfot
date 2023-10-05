<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    #[Route('/services/{name}', name: 'service')]
    public function show($name): Response
    {

        return $this->render('services/index.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @Route("/go", name="go")
     */
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('home');
    }

}
