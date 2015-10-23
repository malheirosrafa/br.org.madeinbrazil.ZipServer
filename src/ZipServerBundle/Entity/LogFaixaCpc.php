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


}

