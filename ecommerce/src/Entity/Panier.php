<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'boolean')]
    private $etat;

    #[ORM\Column(type: 'datetime')]
    private $dateAchat;

    // Relations avec Utilisateur et ContenuPanier à ajouter si besoin...
}