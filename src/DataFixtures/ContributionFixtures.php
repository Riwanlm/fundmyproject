<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContributionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $amount = new Contribution();
        $amount->setAmount(10000.00);
        $manager->persist($amount);

        $manager->flush();
    }
}
