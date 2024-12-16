<?php

namespace App\Events\List\Infrastructure\Repositories\Presistence\Doctrine;

use Doctrine\ORM\EntityManagerInterface;

class DoctrineRepository
{
    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    public function searchAll(string $entity): array
    {
        return $this->entityManager->getRepository($entity)->findAll();
    }
}