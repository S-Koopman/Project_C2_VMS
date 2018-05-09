<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelopdracht_Artikelen
 *
 * @ORM\Table(name="bestelopdracht__artikelen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Bestelopdracht_ArtikelenRepository")
 */
class Bestelopdracht_Artikelen
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $iD;

    /**
     * @var int
     *
     * @ORM\Column(name="bestelOrderNr", type="integer")
     */
    private $bestelOrderNr;

    /**
     * @var int
     *
     * @ORM\Column(name="ArtikelNr", type="integer")
     */
    private $artikelNr;

    /**
     * @var string
     *
     * @ORM\Column(name="NaamArtikel", type="string", length=128)
     */
    private $naamArtikel;

    /**
     * @var int
     *
     * @ORM\Column(name="Aantal", type="integer")
     */
    private $aantal;

    /**
     * Set iD
     *
     * @param integer $iD
     *
     * @return Bestelopdracht_Artikelen
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Set bestelOpdrachtNr
     *
     * @param integer $bestelOpdrachtNr
     *
     * @return Bestelopdracht_Artikelen
     */
    public function setBestelOrderNr($bestelOrderNr)
    {
        $this->$bestelOrderNr = $bestelOrderNr;

        return $this;
    }

    /**
     * Get bestelOpdrachtNr
     *
     * @return integer
     */
    public function getBestelOrderNr()
    {
        return $this->$bestelOrderNr;
    }

    /**
     * Set artikelNr
     *
     * @param integer $artikelNr
     *
     * @return Bestelopdracht_Artikelen
     */
    public function setArtikelNr($artikelNr)
    {
        $this->artikelNr = $artikelNr;

        return $this;
    }

    /**
     * Get artikelNr
     *
     * @return integer
     */
    public function getArtikelNr()
    {
        return $this->artikelNr;
    }

    /**
     * Set naamArtikel
     *
     * @param string $naamArtikel
     *
     * @return Bestelopdracht_Artikelen
     */
    public function setNaamArtikel($naamArtikel)
    {
        $this->naamArtikel = $naamArtikel;

        return $this;
    }

    /**
     * Get naamArtikel
     *
     * @return string
     */
    public function getNaamArtikel()
    {
        return $this->naamArtikel;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Bestelopdracht_Artikelen
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return integer
     */
    public function getAantal()
    {
        return $this->aantal;
    }
}
