<?php

namespace App\DataFixtures;

use App\Entity\Contribution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\This;

class ContributionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $amount = new Contribution();
        $amount->setAmount(10000.00);
        $amount->setUser($this->getReference("John"));
        $amount->setProject($this->getReference("goodgirl"));
        $this->addReference("amount", $amount);
        $manager->persist($amount);

        $manager->flush();
    }

    public function getDependencies()
    {
        return[
            UserFixtures::class,
            ProjectFixtures::class
        ];
    }

}
