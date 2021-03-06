<?php

namespace CE\ReservationBundle\Entity;

use CE\ReservationBundle\Controller\ReservationController;
use Doctrine\ORM\EntityRepository;

/**
 * DeviceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends EntityRepository
{
    public function findByReservationStatus($id)
    {
        return $this->createQueryBuilder("r")->where('r.status = :id')->setParameter('id', $id)->getQuery()->getResult(
        );
    }

    public function findReservedPeriodByDevice($device)
    {
        $result = $this->createQueryBuilder("r")
            ->where('r.device = :device')
            ->andWhere('r.status != :restitueStatus')
            ->setParameter('device', $device)
            ->setParameter('restitueStatus', ReservationController::RESTITUE_STATUS)
            ->getQuery();

        return $result->getResult();
    }

    public function findByDate($device, $startDate, $endDate)
    {
        $result = $this->createQueryBuilder("r")
            ->where('r.device = :device')
            ->andWhere(
                '(r.endDate > :startDate AND r.endDate <= :endDate)
                            OR (r.startDate >= :startDate AND r.startDate < :endDate)
                            OR (r.startDate <= :startDate AND r.endDate >= :endDate)'
            )
            ->andWhere('r.status != :restitueStatus')
            ->setParameter('device', $device)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->setParameter('restitueStatus', ReservationController::RESTITUE_STATUS)
            ->getQuery();

        return $result->getResult();
    }

}
