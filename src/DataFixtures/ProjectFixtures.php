<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $goodgirl = new Project();
        $goodgirl->setName("Good Girl");
        $goodgirl->setImage("project1.jpg");
        $goodgirl->setExcerpt("Ce film parle de ...");
        $goodgirl->setDescription("Ce film parle de ...");
        $goodgirl->setCreatedAt(new \DateTime("2020-01-01 09:35:24"));
        $goodgirl->setGoal(10000.00);
        $goodgirl->addCategory($this->getReference("Categorie-film"));
        $manager->persist($goodgirl);

        $lesyeuxdanslebus = new Project();
        $lesyeuxdanslebus->setName("Les yeux dans le bus");
        $lesyeuxdanslebus->setImage("placeholder.png");
        $lesyeuxdanslebus->setExcerpt("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
        $lesyeuxdanslebus->setDescription("Revivez la grande épopée de l'équipe de France de football lors du mondial de football 2010.");
        $lesyeuxdanslebus->setCreatedAt(new \DateTime("2019-12-23 16:23:55") );
        $lesyeuxdanslebus->setGoal(11354.55);
        $lesyeuxdanslebus->addCategory($this->getReference("Categorie-sport"));
        $lesyeuxdanslebus->addCategory($this->getReference("Categorie-film"));
        $manager->persist($lesyeuxdanslebus);

        $dabado = new Project();
        $dabado->setName("Dabado");
        $dabado->setImage("project3.jpg");
        $dabado->setExcerpt("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
        $dabado->setDescription("Un jeu fantastique peint à la main. Plongez dans des aventures extra-ordinaires !");
        $dabado->setCreatedAt(new \DateTime("2019-04-10 12:54:00"));
        $dabado->setGoal(12200.00);
        $dabado->addCategory($this->getReference("Categorie-jeux"));
        $manager->persist($dabado);

        $doosh = new Project();
        $doosh->setName("DOOSH");
        $doosh->setImage("project4.jpg");
        $doosh->setExcerpt("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !");
        $doosh->setDescription("Venez m'accompagner dans mon projet de création musicale avec clip vidéo !");
        $doosh->setCreatedAt(new \DateTime("2020-03-20 14:12:03"));
        $doosh->setGoal(13599.99);
        $doosh->addCategory($this->getReference("Categorie-musique"));
        $doosh->addCategory($this->getReference("Categorie-film"));
        $manager->persist($doosh);

        $manager->flush();
    }
}
