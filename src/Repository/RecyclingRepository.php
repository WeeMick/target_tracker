<?php

namespace App\Repository;

use App\Entity\Recycling;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Recycling|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recycling|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recycling[]    findAll()
 * @method Recycling[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecyclingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recycling::class);
    }

    // /**
    //  * @return Recycling[] Returns an array of Recycling objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Recycling
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getYearAverage($id)
    {


    }
}
