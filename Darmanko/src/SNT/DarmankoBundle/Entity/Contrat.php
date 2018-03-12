<?php

namespace SNT\DarmankoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="SNT\DarmankoBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateContrat", type="datetime")
     */
    private $dateContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
    * @ORM\ManyToOne(targetEntity="SNT\DarmankoBundle\Entity\Client")
    */
    private $client;

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
     * Set dateContrat
     *
     * @param \DateTime $dateContrat
     *
     * @return Contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution
     *
     * @param integer $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set client
     *
     * @param \SNT\DarmankoBundle\Entity\Client $client
     *
     * @return Contrat
     */
    public function setClient(\SNT\DarmankoBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \SNT\DarmankoBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set bien
     *
     * @param \SNT\DarmankoBundle\Entity\Bien $bien
     *
     * @return Contrat
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
}
