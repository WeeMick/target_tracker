<?php

namespace App\Repository;

use App\Entity\PaperCardboard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PaperCardboard|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaperCardboard|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaperCardboard[]    findAll()
 * @method PaperCardboard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaperCardboardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaperCardboard::class);
    }

    // /**
    //  * @return PaperCardboard[] Returns an array of PaperCardboard objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PaperCardboard
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
