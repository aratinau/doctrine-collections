<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function createIsScientistQueryBuilder()
    {
        // Attention: c'est ça retourne uniquement le query builder
        return $this->createQueryBuilder('user')
            ->andWhere('user.isScientist = :isScientist')
            ->setParameter('isScientist', true)
        ;
    }
}
