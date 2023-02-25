<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2010);
        $movie->setDescription('This is the Batman Movie');
        $movie->setImagePath('https://www.pixel4k.com/wp-content/uploads/2019/01/batman-dark-knight-4k_1547506396.jpg');
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('No Way Home');
        $movie2->setReleaseYear(2023);
        $movie2->setDescription('This is the Spiderman Movie');
        $movie2->setImagePath('https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/07/18/13/the-dark-knight-batman-joker.jpg');
        $manager->persist($movie2);

        $manager->flush();

    }
}
