<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogFaixaBairro
 *
 * @ORM\Table(name="log_faixa_bairro", indexes={@ORM\Index(name="log_faixa_bairro_bai_nu_sequencial", columns={"bai_nu_sequencial"})})
 * @ORM\Entity
 */
class LogFaixaBairro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fcb_nu_ordem", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fcbNuOrdem;

    /**
     * @var string
     *
     * @ORM\Column(name="fcb_rad_ini", type="string", length=5, nullable=false)
     */
    private $fcbRadIni;

    /**
     * @var string
     *
     * @ORM\Column(name="fcb_suf_ini", type="string", length=3, nullable=false)
     */
    private $fcbSufIni;

    /**
     * @var string
     *
     * @ORM\Column(name="fcb_rad_fim", type="string", length=5, nullable=false)
     */
    private $fcbRadFim;

    /**
     * @var string
     *
     * @ORM\Column(name="fcb_suf_fim", type="string", length=3, nullable=false)
     */
    private $fcbSufFim;

    /**
     * @var \ZipServerBundle\Entity\LogBairro
     *
     * @ORM\OneToOne(targetEntity="ZipServerBundle\Entity\LogBairro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bai_nu_sequencial", referencedColumnName="bai_nu_sequencial", unique=true)
     * })
     */
    private $baiNuSequencial;


}

