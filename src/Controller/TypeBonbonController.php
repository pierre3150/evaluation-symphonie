<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TypeBonbonRepository;

class TypeBonbonController extends AbstractController
{
    #[Route('/liste-typebonbons', name: 'liste-type-bonbons')]
    public function listeTypeBonbons(TypeBonbonRepository $typeBonbonRepository): Response
    {
        $typeBonbons = $typeBonbonRepository->findAll();
        return $this->render('type_bonbon/liste-type-bonbons.html.twig', [
            'type_bonbons' => $typeBonbons
        ]);
    }
}
