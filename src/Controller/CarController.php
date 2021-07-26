<?php 

namespace App\Controller;

use DateTime;
use App\Entity\Car;
use App\Form\CarType;
use App\Repository\CarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarController extends AbstractController
{
    /**
     * List Car
     * @Route("/car/list", name="car_list")
     */
    public function list(CarRepository $cr): Response
    {
        $cars = $cr->findAllJoinedToBrandQB();

        return $this->render('/car/list.html.twig', [
             'cars' => $cars 
        ]);
    }

    /**
     *
     * Add Car
     * @Route("car/add", name="car_add", methods={"GET", "POST"})
     */
    public function add(Request $request): Response
    {
        $car = new Car();

        $form = $this->createForm(CarType::class, $car);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $car
            ->setCreatedAt(new DateTime());

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($car);
            $manager->flush();

            // dd($car);

            $this->addFlash('success', 'La voiture ' . $car->getModel() . ' de la marque ' . $car->getBrand() . ' a bien été ajouté !');

            return $this->redirectToRoute('car_list');
        }

        return $this->render('car/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     *
     * Add Car
     * @Route("car/edit/{id<\d+>}", name="car_edit", methods={"GET", "POST"})
     */
    public function edit(Car $car = null, Request $request): Response
    {
        if ($car === null) {
            throw $this->createNotFoundException('Voiture non trouvé.');
        }

        $form = $this->createForm(CarType::class, $car);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $car
            ->setUpdatedAt(new DateTime());

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($car);
            $manager->flush();

            // dd($car);

            $this->addFlash('success', 'La voiture ' . $car->getModel() . ' de la marque ' . $car->getBrand() . ' a bien été modifié !');

            return $this->redirectToRoute('car_edit', [ 'id' => $car->getId() ]);
        }

        return $this->render('car/edit.html.twig', ['form' => $form->createView()]);
    }

    /**
     * Delete Car
     * @Route("car/delete/{id<\d+>}", name="car_delete")
     */
    public function delete(Car $car = null, EntityManagerInterface $em): Response
    {
        if ($car === null) {
            throw $this->createNotFoundException('Voiture non trouvé.');
        }

        $em->remove($car);
        $em->flush();

        $this->addFlash('success', 'La voiture a bien été supprimée !');

        return $this->redirectToRoute('car_list');
}


}