<?php

namespace SNT\DarmankoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="SNT\DarmankoBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="dateReservation", type="datetime")
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set client
     *
     * @param \SNT\DarmankoBundle\Entity\Client $client
     *
     * @return Reservation
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
     * @return Reservation
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
