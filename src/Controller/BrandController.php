<?php 

namespace App\Controller;

use App\Entity\Brand;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BrandController extends AbstractController
{
    /**
     * Show Brand
     * @Route("/brand/show/{id<\d+>}", name="brand_show")
     */
    public function show(Brand $brand): Response
    {
        return $this->render('/brand/show.html.twig', [
             'brand' => $brand 
        ]);
    }

}