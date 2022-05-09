<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends AbstractFixtures
{
    public function load(ObjectManager $entityManager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername($this->createRandomString(10));

            $entityManager->persist($user);
        }

        $entityManager->flush();
    }
}
