<?php

namespace CE\DeviceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CE\DeviceBundle\Entity\DeviceRepository")
 */
class Device
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
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity="Marque", inversedBy="devices")
     * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255, nullable=true)
     */
    private $modele;

    /**
     * indique si le matériel est disponible ou non
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @ORM\ManyToMany(targetEntity="Category")
     */
    private $categories;

    /**
     * raison de l'indisponibilité
     * @ORM\Column(name="disponibleLib", type="string", nullable=true, length=255)
     */
    private $disponibleLib;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", nullable=true, length=1024)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="date")
     */
    private $dateAchat;

    /**
     * @ORM\OneToOne(targetEntity="CE\DeviceBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", nullable=true, length=32)
     */
    private $emplacement;


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
     * Set reference
     *
     * @param string $reference
     * @return Device
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Device
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Device
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Device
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Device
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Device
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     * @return Device
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * @return mixed
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param mixed $disponible
     */
    public function setDisponible($disponible)
    {
        if ($disponible) {
            $this->disponibleLib = null;
        }
        $this->disponible = $disponible;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getDisponibleLib()
    {
        return $this->disponibleLib;
    }

    /**
     * @param mixed $disponibleLib
     */
    public function setDisponibleLib($disponibleLib)
    {
        $this->disponibleLib = $disponibleLib;
    }

    public function __toString()
    {
        return ucfirst($this->libelle) . " - " . ucfirst($this->marque) . " " . ucfirst(
                $this->modele
            ) . " - " . $this->emplacement;
    }

    public function setImage(Image $image = null)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * @param mixed $emplacement
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
    }
}
