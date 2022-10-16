<?php

namespace App\DataFixtures;

use App\Entity\Chain;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    const FAKER_CHAIN =  ['ddddfdjj', 'jhgubh', 'scsdr', 'oonnbbhh', 'pmloiiuye'];

    public function load(ObjectManager $manager): void
    {
        $generator = Factory::create("fr_FR");
        for ($i = 0; $i < 5; $i++){
            $chain = new  Chain();
            $chain->setOccurence($generator->randomElement(self::FAKER_CHAIN));
            $manager->persist($chain);
        }
        $manager->flush();
    }
}
