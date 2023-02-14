<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog/{page<\d+>?1}', name: 'blog_list')]
    public function list(int $page): response{
        return new Response(
            '<html><body>Goedenmiddag!</body></html>'
        );
    }

    // #[Route('/blog/{slug}', name: 'blog_show')]
    public function show(string $slug): Response
    {
        return new Response(
            '<html><body>hallo!</body></html>');
    }
  
}
