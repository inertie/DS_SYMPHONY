<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index(Produit $produit): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'produit' => $produit
        ]);
    }
}
