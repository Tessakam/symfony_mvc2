<?php

namespace App\Repository;

use App\Entity\ChangeMyName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ChangeMyName|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChangeMyName|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChangeMyName[]    findAll()
 * @method ChangeMyName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChangeMyNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChangeMyName::class);
    }

    // /**
    //  * @return ChangeMyName[] Returns an array of ChangeMyName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChangeMyName
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}