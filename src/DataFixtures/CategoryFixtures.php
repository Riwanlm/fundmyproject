<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $film = new Category();
        $film->setName("film");
        $manager->persist($film);
        $this->addReference("Categorie-film", $film);

        $sport = new Category();
        $sport->setName("sport");
        $manager->persist($sport);
        $this->addReference("Categorie-sport", $sport);

        $musique = new Category();
        $musique->setName("musique");
        $manager->persist($musique);
        $this->addReference("Categorie-musique", $musique);

        $jeux = new Category();
        $jeux->setName("jeux");
        $manager->persist($jeux);
        $this->addReference("Categorie-jeux", $jeux);

        $manager->flush();
    }
}
