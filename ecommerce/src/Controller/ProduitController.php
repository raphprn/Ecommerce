<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'produit_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $produits = $em->getRepository(Produit::class)->findAll();
        return $this->render('produit/index.html.twig', ['produits' => $produits]);
    }

    #[Route('/produit/{id}', name: 'produit_show')]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', ['produit' => $produit]);
    }
}
