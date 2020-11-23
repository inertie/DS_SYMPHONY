<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->find10first(10);
        return $this->render('index/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    // /**
    //  * @Route("/products", name="products)
    //  */
    // public function products(ProduitRepository $produitRepository): Response
    // {
    //     $produits = $produitRepository->getPromos(1);
    //     return $this->render('products.html.twig', [
    //         'produits' => $produits,
    //     ]);
    // }

    /**
     * @Route("/index", name="promos")
     */
    public function promos(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->getPromos(1);
        return $this->render('index/promos.html.twig', [
            'produits' => $produits, 
        ]);
    }

}
