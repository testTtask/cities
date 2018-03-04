<?php

namespace App\Repository;


class CitiesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getRandomCities($count = 10){

        $totalRowsTable = $this->createQueryBuilder('c')->select('count(c.id)')->getQuery()->getSingleScalarResult();

        $randomIds = $this->UniqueRandomNumbersWithinRange(1,$totalRowsTable,$count);


        $data =[];
        foreach ($randomIds as $item) {

          $data[] = $this->createQueryBuilder('c')
                ->setFirstResult($item)
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        }
        return $data;
    }


    private function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

}