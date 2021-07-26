<?php

namespace App\Repository;

use App\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Car|null find($id, $lockMode = null, $lockVersion = null)
 * @method Car|null findOneBy(array $criteria, array $orderBy = null)
 * @method Car[]    findAll()
 * @method Car[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Car::class);
    }
    
    /**
     * @return Car[]
     */
    public function findAllJoinedToBrandQB(): ?array
    {
        return $this->createQueryBuilder('c')
        ->addSelect('b')
        ->innerJoin('c.brand', 'b')
        ->orderBy('c.id')
        ->getQuery()
        ->getResult();
    }

}
