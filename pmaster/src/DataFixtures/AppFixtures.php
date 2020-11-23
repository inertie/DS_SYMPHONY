<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $produit = new Produit();
            $produit
                ->setName($faker->word(random_int(1, 2)))
                ->setDescription($faker->paragraph(4, true))
                ->setPromo($faker->boolean(15))
                ->setDisplay($faker->boolean(80))
                ->setPriceHT($faker->randomFloat(2, 12, 150))
                ->setCreated($faker->dateTime('now'))
                ->setImage($faker->imageUrl(320, 200));

            $manager->persist($produit);
        }
        $manager->flush();
    }
}
