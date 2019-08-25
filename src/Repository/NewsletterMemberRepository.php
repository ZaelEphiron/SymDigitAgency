<?php

namespace App\Repository;

use App\Entity\NewsletterMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NewsletterMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewsletterMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewsletterMember[]    findAll()
 * @method NewsletterMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewsletterMemberRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NewsletterMember::class);
    }

    // /**
    //  * @return NewsletterMember[] Returns an array of NewsletterMember objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewsletterMember
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
