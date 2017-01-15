<?php

namespace AppBundle\Repository;

/**
 * EpisodeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EpisodeRepository extends \Doctrine\ORM\EntityRepository
{
    public function asCalendar() {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
            SELECT c
            FROM AppBundle:Episode c
            WHERE c.date >= CURRENT_DATE()
            ORDER BY c.date 
            ASC
        ');

        return $query->getResult();
    }
}
