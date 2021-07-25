<?php

namespace App\DataFixtures;

use DateTime;
use Faker\Factory;
use App\Entity\Car;
use App\Entity\Brand;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));

        $brandsList = [];

        // 20 Brands
        for ($i = 1; $i <= 20; $i++) {

            $brand = new Brand();

            $brand
            ->setName($faker->unique->vehicleBrand())
            ->setCountry($faker->unique->country())
            ->setCreatedAt(new DateTime());

            $brandsList[] = $brand;

            $manager->persist($brand);
        }

        // 50 Cars
        for ($i = 1; $i <= 50; $i++) {

            $car = new Car();

            $car
            ->setModel($faker->unique->vehicle())
            ->setYear($faker->dateTimeBetween())
            ->setPrice($faker->numberBetween(7500, 40000))
            ->setColor($faker->colorName())
            ->setBrand($brandsList[array_rand($brandsList)])
            ->setCreatedAt(new DateTime());
       
            $manager->persist($car);
        }

        $manager->flush();
    }
}
