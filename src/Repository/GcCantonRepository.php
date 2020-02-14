<?php

namespace App\Repository;

use App\Entity\GcCanton;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GcCanton|null find($id, $lockMode = null, $lockVersion = null)
 * @method GcCanton|null findOneBy(array $criteria, array $orderBy = null)
 * @method GcCanton[]    findAll()
 * @method GcCanton[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GcCantonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GcCanton::class);
    }

    // /**
    //  * @return GcCanton[] Returns an array of GcCanton objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GcCanton
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
