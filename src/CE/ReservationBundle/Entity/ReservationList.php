<?php

namespace CE\ReservationBundle\Entity;

use Assetic\Cache\ArrayCache;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

class ReservationList
{
    private $reservations;

    function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * @param mixed $reservations
     */
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;
    }

    public function addReservation(Reservation $reservation)
    {
        if (!$this->reservations->contains($reservation))
        {
            $this->reservations->add($reservation);
        }
    }



}
