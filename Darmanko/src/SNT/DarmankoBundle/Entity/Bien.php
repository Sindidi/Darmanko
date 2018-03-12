<?php

namespace SNT\DarmankoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien.
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="SNT\DarmankoBundle\Repository\BienRepository")
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBien", type="string", length=255)
     */
    private $nomBien;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="prixLocation", type="integer")
     */
    private $prixLocation;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\DarmankoBundle\Entity\Localite")
     */
    private $localite;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\DarmankoBundle\Entity\TypeBien")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\DarmankoBundle\Entity\Bien")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bien;

    /**
     * @ORM\OneToMany(targetEntity="SNT\DarmankoBundle\Entity\Image", mappedBy="bien")
     */
    private $images;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomBien.
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien.
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set etat.
     *
     * @param int $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat.
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image.
     *
     * @param \SNT\DarmankoBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage(\SNT\DarmankoBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image.
     *
     * @param \SNT\DarmankoBundle\Entity\Image $image
     */
    public function removeImage(\SNT\DarmankoBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set localite.
     *
     * @param \SNT\DarmankoBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\SNT\DarmankoBundle\Entity\Localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite.
     *
     * @return \SNT\DarmankoBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set type.
     *
     * @param \SNT\DarmankoBundle\Entity\TypeBien $type
     *
     * @return Bien
     */
    public function setType(\SNT\DarmankoBundle\Entity\TypeBien $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return \SNT\DarmankoBundle\Entity\TypeBien
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set bien.
     *
     * @param \SNT\DarmankoBundle\Entity\Bien $bien
     *
     * @return Bien
     */
    public function setBien(\SNT\DarmankoBundle\Entity\Bien $bien)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien.
     *
     * @return \SNT\DarmankoBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prixLocation.
     *
     * @param int $prixLocation
     *
     * @return Bien
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    /**
     * Get prixLocation.
     *
     * @return int
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }
}
