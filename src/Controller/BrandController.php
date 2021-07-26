<?php 

namespace App\Controller;

use App\Entity\Brand;
use App\Repository\BrandRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BrandController extends AbstractController
{
    /**
     * Show Brand
     * @Route("/brand/show/{id<\d+>}", name="brand_show")
     */
    public function show(Brand $brand, BrandRepository $br): Response
    {
        // $brand = $br->findOneJoinedToCarQB($brand);

        return $this->render('/brand/show.html.twig', [
             'brand' => $brand 
        ]);
    }

}