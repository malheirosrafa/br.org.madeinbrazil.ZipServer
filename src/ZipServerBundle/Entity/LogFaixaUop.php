<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogFaixaUop
 *
 * @ORM\Table(name="log_faixa_uop", indexes={@ORM\Index(name="log_faixa_uop_uop_nu_sequencial", columns={"uop_nu_sequencial"})})
 * @ORM\Entity
 */
class LogFaixaUop
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fnc_nu_inicial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fncNuInicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fnc_nu_final", type="integer", nullable=true)
     */
    private $fncNuFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="fnc_in_tipo", type="string", length=255, nullable=true)
     */
    private $fncInTipo;

    /**
     * @var \ZipServerBundle\Entity\LogUnidOper
     *
     * @ORM\OneToOne(targetEntity="ZipServerBundle\Entity\LogUnidOper")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uop_nu_sequencial", referencedColumnName="uop_nu_sequencial", unique=true)
     * })
     */
    private $uopNuSequencial;



    /**
     * Set fncNuInicial
     *
     * @param integer $fncNuInicial
     *
     * @return LogFaixaUop
     */
    public function setFncNuInicial($fncNuInicial)
    {
        $this->fncNuInicial = $fncNuInicial;

        return $this;
    }

    /**
     * Get fncNuInicial
     *
     * @return integer
     */
    public function getFncNuInicial()
    {
        return $this->fncNuInicial;
    }

    /**
     * Set fncNuFinal
     *
     * @param integer $fncNuFinal
     *
     * @return LogFaixaUop
     */
    public function setFncNuFinal($fncNuFinal)
    {
        $this->fncNuFinal = $fncNuFinal;

        return $this;
    }

    /**
     * Get fncNuFinal
     *
     * @return integer
     */
    public function getFncNuFinal()
    {
        return $this->fncNuFinal;
    }

    /**
     * Set fncInTipo
     *
     * @param string $fncInTipo
     *
     * @return LogFaixaUop
     */
    public function setFncInTipo($fncInTipo)
    {
        $this->fncInTipo = $fncInTipo;

        return $this;
    }

    /**
     * Get fncInTipo
     *
     * @return string
     */
    public function getFncInTipo()
    {
        return $this->fncInTipo;
    }

    /**
     * Set uopNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogUnidOper $uopNuSequencial
     *
     * @return LogFaixaUop
     */
    public function setUopNuSequencial(\ZipServerBundle\Entity\LogUnidOper $uopNuSequencial = null)
    {
        $this->uopNuSequencial = $uopNuSequencial;

        return $this;
    }

    /**
     * Get uopNuSequencial
     *
     * @return \ZipServerBundle\Entity\LogUnidOper
     */
    public function getUopNuSequencial()
    {
        return $this->uopNuSequencial;
    }
}
