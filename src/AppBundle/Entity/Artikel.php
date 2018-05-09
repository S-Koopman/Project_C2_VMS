<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artikel
 *
 * @ORM\Table(name="artikel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtikelRepository")
 */
class Artikel
{
    /**
     * @var int
     *
     * @ORM\Column(name="artikelnr", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $artikelnr;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string", length=150, nullable=true)
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="techSpec", type="string", length=255, nullable=true)
     */
    private $techSpec;

    /**
     * @var string
     *
     * @ORM\Column(name="magazijnLocatie", type="string", length=6)
     */
    private $magazijnLocatie;

    /**
     * @var string
     *
     * @ORM\Column(name="inkoop", type="decimal", precision=10, scale=2)
     */
    private $inkoop;

    /**
     * @var int
     *
     * @ORM\Column(name="codeVervangend", type="integer", nullable=true)
     */
    private $codeVervangend;

    /**
     * @var int
     *
     * @ORM\Column(name="minVoorraad", type="integer")
     */
    private $minVoorraad;

    /**
     * @var int
     *
     * @ORM\Column(name="voorraad", type="integer")
     */
    private $voorraad;

    /**
     * @var int
     *
     * @ORM\Column(name="bestelserie", type="integer")
     */
    private $bestelserie;

    /**
     * @var int
     *
     * @ORM\Column(name="ArtikelActief", type="integer")
     */
    private $artikelActief;

    /**
     * Set artikelnr
     *
     * @param integer $artikelnr
     *
     * @return Artikel
     */
    public function setArtikelnr($artikelnr)
    {
        $this->artikelnr = $artikelnr;

        return $this;
    }

    /**
     * Get artikelnr
     *
     * @return integer
     */
    public function getArtikelnr()
    {
        return $this->artikelnr;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Artikel
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set techSpec
     *
     * @param string $techSpec
     *
     * @return Artikel
     */
    public function setTechSpec($techSpec)
    {
        $this->techSpec = $techSpec;

        return $this;
    }

    /**
     * Get techSpec
     *
     * @return string
     */
    public function getTechSpec()
    {
        return $this->techSpec;
    }

    /**
     * Set magazijnLocatie
     *
     * @param string $magazijnLocatie
     *
     * @return Artikel
     */
    public function setMagazijnLocatie($magazijnLocatie)
    {
        $this->magazijnLocatie = $magazijnLocatie;

        return $this;
    }

    /**
     * Get magazijnLocatie
     *
     * @return string
     */
    public function getMagazijnLocatie()
    {
        return $this->magazijnLocatie;
    }

    /**
     * Set inkoop
     *
     * @param string $inkoop
     *
     * @return Artikel
     */
    public function setInkoop($inkoop)
    {
        $this->inkoop = $inkoop;

        return $this;
    }

    /**
     * Get inkoop
     *
     * @return string
     */
    public function getInkoop()
    {
        return $this->inkoop;
    }

    /**
     * Set codeVervangend
     *
     * @param integer $codeVervangend
     *
     * @return Artikel
     */
    public function setCodeVervangend($codeVervangend)
    {
        $this->codeVervangend = $codeVervangend;

        return $this;
    }

    /**
     * Get codeVervangend
     *
     * @return integer
     */
    public function getCodeVervangend()
    {
        return $this->codeVervangend;
    }

    /**
     * Set minVoorraad
     *
     * @param integer $minVoorraad
     *
     * @return Artikel
     */
    public function setMinVoorraad($minVoorraad)
    {
        $this->minVoorraad = $minVoorraad;

        return $this;
    }

    /**
     * Get minVoorraad
     *
     * @return integer
     */
    public function getMinVoorraad()
    {
        return $this->minVoorraad;
    }

    /**
     * Set voorraad
     *
     * @param integer $voorraad
     *
     * @return Artikel
     */
    public function setVoorraad($voorraad)
    {
        $this->voorraad = $voorraad;

        return $this;
    }

    /**
     * Get voorraad
     *
     * @return integer
     */
    public function getVoorraad()
    {
        return $this->voorraad;
    }

    /**
     * Set bestelserie
     *
     * @param integer $bestelserie
     *
     * @return Artikel
     */
    public function setBestelserie($bestelserie)
    {
        $this->bestelserie = $bestelserie;

        return $this;
    }

    /**
     * Get bestelserie
     *
     * @return integer
     */
    public function getBestelserie()
    {
        return $this->bestelserie;
    }

    /**
     * Set artikelActief
     *
     * @param integer $artikelActief
     *
     * @return Artikel
     */
    public function setArtikelActief($artikelActief)
    {
        $this->artikelActief = $artikelActief;

        return $this;
    }

    /**
     * Get artikelActief
     *
     * @return integer
     */
    public function getArtikelActief()
    {
        return $this->artikelActief;
    }
}
