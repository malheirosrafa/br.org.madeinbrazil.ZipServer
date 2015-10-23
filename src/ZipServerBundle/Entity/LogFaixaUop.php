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


}

