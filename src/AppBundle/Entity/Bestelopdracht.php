<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelopdracht
 *
 * @ORM\Table(name="bestelopdracht")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelopdrachtRepository")
 */
class Bestelopdracht
{
    /**
     * @var int
     *
     * @ORM\Column(name="BestelOrderNr", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $bestelOrderNr;

    /**
     * @var string
     *
     * @ORM\Column(name="Naamleverancier", type="string", length=128)
     */
    private $naamleverancier;

    /**
     * Set bestelOrderNr
     *
     * @param integer $bestelOrderNr
     *
     * @return Bestelopdracht
     */
    public function setBestelOrderNr($bestelOrderNr)
    {
        $this->bestelOrderNr = $bestelOrderNr;

        return $this;
    }

    /**
     * Get bestelOrderNr
     *
     * @return integer
     */
    public function getBestelOrderNr()
    {
        return $this->bestelOrderNr;
    }

    /**
     * Set naamleverancier
     *
     * @param string $naamleverancier
     *
     * @return Bestelopdracht
     */
    public function setNaamleverancier($naamleverancier)
    {
        $this->naamleverancier = $naamleverancier;

        return $this;
    }

    /**
     * Get naamleverancier
     *
     * @return string
     */
    public function getNaamleverancier()
    {
        return $this->naamleverancier;
    }
}
