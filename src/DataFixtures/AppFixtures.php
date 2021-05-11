<?php

namespace App\DataFixtures;

use App\Entity\Target;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $target = new Target();
        // $manager->persist($product);

        $manager->flush();
    }
}
