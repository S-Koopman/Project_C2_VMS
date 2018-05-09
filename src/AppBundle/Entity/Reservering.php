<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservering
 *
 * @ORM\Table(name="reservering")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReserveringRepository")
 */
class Reservering
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
     * @ORM\Column(name="ID", type="integer", unique=true)
     */
    private $iD;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datum", type="date")
     */
    private $datum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="VervalDatum", type="date")
     */
    private $vervalDatum;

    /**
     * @var string
     *
     * @ORM\Column(name="Naam", type="string", length=128, nullable=true)
     */
    private $naam;


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
     * Set iD
     *
     * @param integer $iD
     *
     * @return Reservering
     */
    public function setID($iD)
    {
        $this->iD = $iD;
    
        return $this;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Reservering
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    
        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set vervalDatum
     *
     * @param \DateTime $vervalDatum
     *
     * @return Reservering
     */
    public function setVervalDatum($vervalDatum)
    {
        $this->vervalDatum = $vervalDatum;
    
        return $this;
    }

    /**
     * Get vervalDatum
     *
     * @return \DateTime
     */
    public function getVervalDatum()
    {
        return $this->vervalDatum;
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Reservering
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    
        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }
}

