<?php

namespace SNT\DarmankoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="SNT\DarmankoBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
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
     * @var int
     *
     * @ORM\Column(name="numpiece", type="integer", nullable=true, unique=true)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=50)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="codeBanque", type="string", length=255, unique=true)
     */
    private $codeBanque;


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
     * Set numpiece
     *
     * @param integer $numpiece
     *
     * @return Proprietaire
     */
    public function setNumpiece($numpiece)
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    /**
     * Get numpiece
     *
     * @return int
     */
    public function getNumpiece()
    {
        return $this->numpiece;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Proprietaire
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Proprietaire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Proprietaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codeBanque
     *
     * @param string $codeBanque
     *
     * @return Proprietaire
     */
    public function setCodeBanque($codeBanque)
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    /**
     * Get codeBanque
     *
     * @return string
     */
    public function getCodeBanque()
    {
        return $this->codeBanque;
    }
}

