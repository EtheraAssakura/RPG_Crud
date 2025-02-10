<?php

namespace App\Repository;

use App\Entity\Monsters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Monsters>
 */
class MonstersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Monsters::class);
    }

    //    /**
    //     * @return Monsters[] Returns an array of Monsters objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

       public function findOneByMonster($monster): ?Monsters
       {
           return $this->createQueryBuilder('m')
               ->andWhere('m.exampleField = :val')
               ->setParameter('val', $monster)
               ->getQuery()
               ->getOneOrNullResult()
           ;
       }
}
