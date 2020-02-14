<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    // /**
    //  * @return User[] Returns an array of User objects
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
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function restringir($id){

        $dql = "UPDATE App\Entity\User usuario SET usuario.usTransacciona= 'N' WHERE usuario.id=:identif";
        $query = $this->getEntityManager()->createQuery($dql)->setParameter('identif',$id);
        return $query->execute();

    }

    public function habilitar($id){

        $dql = "UPDATE App\Entity\User usuario SET usuario.usTransacciona= 'S' WHERE usuario.id=:identif";
        $query = $this->getEntityManager()->createQuery($dql)->setParameter('identif',$id);
        return $query->execute();

    }

    public function prueba(){
        $connection = $this->getEntityManager()
            ->getConnection()
            ->getWrappedConnection();
        $stmt = $connection->prepare('CALL sp_menus_permisos(\'1\', \'1\')');
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        $stmt->execute();
       // $stmt = $connection->query("SELECT @NEW_ID");
        $id = $stmt->fetchColumn();
        
    }


}
