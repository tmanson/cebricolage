<?php

namespace CE\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CE\UserBundle\Entity\UserRepository")
 */
class User extends \FOS\UserBundle\Model\User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @ORM\ManyToOne(targetEntity="CE\UserBundle\Entity\Group")
     * @ORM\JoinColumn(name="user_user_group", referencedColumnName="id")
     */
    protected $groups;

    /**
     *
     * @ORM\OneToMany(targetEntity="BannedPeriod", mappedBy="userId", cascade={"persist","remove"})
     */
    private $bannedPeriods;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->bannedPeriods = new ArrayCollection();
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
     * Set identifiant
     *
     * @param string $identifiant
     * @return User
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
        // On persiste dans le bon champ le nom de roles liée
        $this->roles = $groups->getRoles();
    }

    /**
     * Returns the user roles
     *
     * @return array The roles
     */
    public function getRoles()
    {
        if (!is_null($this->groups)) {
            $roles = $this->groups->getRoles();
        }

        // we need to make sure to have at least one role
        $roles[] = static::ROLE_DEFAULT;

        return array_unique($roles);
    }

    /**
     * @return mixed
     */
    public function getBannedPeriods()
    {
        return $this->bannedPeriods;
    }

    public function addBannedPeriod(BannedPeriod $bannedPeriods)
    {
        $bannedPeriods->setUserId($this);
        $this->bannedPeriods->add($bannedPeriods);
    }

    public function removeBannedPeriod(BannedPeriod $bannedPeriods)
    {
        $this->bannedPeriods->removeElement($bannedPeriods);
    }

    function __toString()
    {
        return ucfirst($this->getUsername()) . " " . ucfirst($this->getFirstname()) . " - " . strtoupper(
            $this->getIdentifiant()
        );
    }


}
