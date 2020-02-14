<?php

namespace App\Repository;

use App\Entity\GcEmpresa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GcEmpresa|null find($id, $lockMode = null, $lockVersion = null)
 * @method GcEmpresa|null findOneBy(array $criteria, array $orderBy = null)
 * @method GcEmpresa[]    findAll()
 * @method GcEmpresa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GcEmpresaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GcEmpresa::class);
    }

    // /**
    //  * @return GcEmpresa[] Returns an array of GcEmpresa objects
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
    public function findOneBySomeField($value): ?GcEmpresa
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function BusquedaEmpresa(){
        return $this->getEntityManager()
            ->createQuery(
                '
                    SELECT empresa.emCodigo
                    FROM App\Entity\GcEmpresa empresa
                    WHERE empresa.emId= 1
                '
            )
            ->getSingleResult();
    }


    public function Menu(){
        $em = $this->getEntityManager();
        $query = "exec sp_menus_permisos @IdUsuario='1' , @IdEmpresa='1' ";
        $con = $this->getEntityManager()->getConnection();
        return $con->executeQuery($query);
    }

}
