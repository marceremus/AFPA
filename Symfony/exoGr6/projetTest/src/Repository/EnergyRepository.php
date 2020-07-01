<?php

namespace App\Repository;

use App\Entity\Energy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Energy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Energy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Energy[]    findAll()
 * @method Energy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnergyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Energy::class);
    }

    // /**
    //  * @return Energy[] Returns an array of Energy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Energy
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
