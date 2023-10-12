<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker=Factory::create('fr_FR');

        for($i=0;$i<34955;$i++)
        {
            $city=new City();
            $city->setName($faker->city())
                    ->setZip($faker->numberBetween(01100, 95840))
                    ->setLon($faker->randomFloat(5, 0, 180))
                    ->setLat($faker->randomFloat(5, 0, 90));
                    $manager->persist($city);
        }
        // $product = new Product();
        // $manager->persist($product);
        
        $manager->flush();
        
    }
}
