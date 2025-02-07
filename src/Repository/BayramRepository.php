<?php

namespace App\Repository;

use App\Entity\Bayram;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bayram>
 *
 * @method Bayram|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bayram|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bayram[]    findAll()
 * @method Bayram[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BayramRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bayram::class);
    }

//    /**
//     * @return Bayram[] Returns an array of Bayram objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bayram
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
