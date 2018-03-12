<?php

namespace SNT\DarmankoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProprietaireBien
 *
 * @ORM\Table(name="proprietaire_bien")
 * @ORM\Entity(repositoryClass="SNT\DarmankoBundle\Repository\ProprietaireBienRepository")
 */
class ProprietaireBien
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
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="prixLocation", type="integer")
     */
    private $prixLocation;

    /**
    * @ORM\ManyToOne(targetEntity="SNT\DarmankoBundle\Entity\Proprietaire")
    */
    private $proprietaire;


    /**
    * @ORM\ManyToOne(targetEntity="SNT\DarmankoBundle\Entity\Bien")
    */
    private $bien;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return ProprietaireBien
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set proprietaire
     *
     * @param \SNT\DarmankoBundle\Entity\Proprietaire $proprietaire
     *
     * @return ProprietaireBien
     */
    public function setProprietaire(\SNT\DarmankoBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \SNT\DarmankoBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set bien
     *
     * @param \SNT\DarmankoBundle\Entity\Bien $bien
     *
     * @return ProprietaireBien
     */
    public function setBien(\SNT\DarmankoBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \SNT\DarmankoBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set prixLocation
     *
     * @param integer $prixLocation
     *
     * @return ProprietaireBien
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    /**
     * Get prixLocation
     *
     * @return integer
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }
}
