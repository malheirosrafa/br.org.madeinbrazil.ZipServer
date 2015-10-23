<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogFaixaCpc
 *
 * @ORM\Table(name="log_faixa_cpc", indexes={@ORM\Index(name="log_faixa_cpc_cpc_nu_sequencial", columns={"cpc_nu_sequencial"})})
 * @ORM\Entity
 */
class LogFaixaCpc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cpc_nu_inicial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cpcNuInicial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cpc_nu_final", type="integer", nullable=false)
     */
    private $cpcNuFinal = '0';

    /**
     * @var \ZipServerBundle\Entity\LogCpc
     *
     * @ORM\OneToOne(targetEntity="ZipServerBundle\Entity\LogCpc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpc_nu_sequencial", referencedColumnName="cpc_nu_sequencial", unique=true)
     * })
     */
    private $cpcNuSequencial;



    /**
     * Set cpcNuInicial
     *
     * @param integer $cpcNuInicial
     *
     * @return LogFaixaCpc
     */
    public function setCpcNuInicial($cpcNuInicial)
    {
        $this->cpcNuInicial = $cpcNuInicial;

        return $this;
    }

    /**
     * Get cpcNuInicial
     *
     * @return integer
     */
    public function getCpcNuInicial()
    {
        return $this->cpcNuInicial;
    }

    /**
     * Set cpcNuFinal
     *
     * @param integer $cpcNuFinal
     *
     * @return LogFaixaCpc
     */
    public function setCpcNuFinal($cpcNuFinal)
    {
        $this->cpcNuFinal = $cpcNuFinal;

        return $this;
    }

    /**
     * Get cpcNuFinal
     *
     * @return integer
     */
    public function getCpcNuFinal()
    {
        return $this->cpcNuFinal;
    }

    /**
     * Set cpcNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogCpc $cpcNuSequencial
     *
     * @return LogFaixaCpc
     */
    public function setCpcNuSequencial(\ZipServerBundle\Entity\LogCpc $cpcNuSequencial = null)
    {
        $this->cpcNuSequencial = $cpcNuSequencial;

        return $this;
    }

    /**
     * Get cpcNuSequencial
     *
     * @return \ZipServerBundle\Entity\LogCpc
     */
    public function getCpcNuSequencial()
    {
        return $this->cpcNuSequencial;
    }
}
