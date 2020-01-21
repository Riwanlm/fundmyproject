<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    /**
     * UserFixtures constructor
     */

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $admin = new User();
        $admin->setFirstname("Riwan");
        $admin->setLastname("Le Mignon");
        $admin->setEmail("riwanlm@gmail.com");
        $admin->setPassword($this->encoder->encodePassword($admin,"litzavse"));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);
        $this->addReference("Riwan", $admin);


        $notadmin = new User();
        $notadmin->setFirstname("John");
        $notadmin->setLastname("Doe");
        $notadmin->setEmail("john.doe@hotmail.fr");
        $notadmin->setPassword($this->encoder->encodePassword($notadmin, "jdojdo"));
        $notadmin->setRoles(["ROLE_USER"]);
        $manager->persist($notadmin);
        $this->addReference("John", $notadmin);

        $manager->flush();

    }
}
