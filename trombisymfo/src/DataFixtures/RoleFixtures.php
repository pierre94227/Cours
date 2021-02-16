<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Role;

class RoleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
            $role1= new Role();
            $role1->setNomRole("Professeur");
            
            $role2= new Role();
            $role2->setNomRole("Etudiant");
            
            $role3= new Role();
            $role3->setNomRole("Stagiaire");
            
            $manager->persist($role1);
            $manager->persist($role2);
            $manager->persist($role3);
        
        $manager->flush();
    }
}
