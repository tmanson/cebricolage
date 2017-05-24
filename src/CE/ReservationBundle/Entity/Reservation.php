<?php

namespace CE\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CE\ReservationBundle\Entity\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="CE\DeviceBundle\Entity\Device")
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id", nullable=false)
     */
    private $device;

    /**
     * @ORM\ManyToOne(targetEntity="CE\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(name="startDate", type="datetime", nullable=false)
     */
    private $startDate;

    /**
     * @ORM\Column(name="endDate", type="datetime", nullable=false)
     */
    private $endDate;

    /**
     * @ORM\ManyToOne(targetEntity="CE\ReservationBundle\Entity\ReservationStatus")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=false)
     */
    private $status;

    /**
     * @ORM\Column(name="returnTime", type="datetime", nullable=true)
     */
    private $returnTime;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", nullable=true, length=1024)
     */
    private $commentaire;

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param mixed $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getReturnTime()
    {
        return $this->returnTime;
    }

    /**
     * @param mixed $returnTime
     */
    public function setReturnTime($returnTime)
    {
        $this->returnTime = $returnTime;
    }

    function __toString()
    {
        return '"' . $this->getDevice()->getLibelle() . '" réservé par ' . $this->getUser()->__toString();
    }


}
