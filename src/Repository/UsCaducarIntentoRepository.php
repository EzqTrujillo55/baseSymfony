<?php

namespace App\Repository;

use App\Entity\UsCaducarIntento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UsCaducarIntento|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsCaducarIntento|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsCaducarIntento[]    findAll()
 * @method UsCaducarIntento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsCaducarIntentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsCaducarIntento::class);
    }

    // /**
    //  * @return UsCaducarIntento[] Returns an array of UsCaducarIntento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UsCaducarIntento
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
