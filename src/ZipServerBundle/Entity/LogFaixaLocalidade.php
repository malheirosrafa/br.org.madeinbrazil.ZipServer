<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogFaixaLocalidade
 *
 * @ORM\Table(name="log_faixa_localidade")
 * @ORM\Entity
 */
class LogFaixaLocalidade
{
    /**
     * @var string
     *
     * @ORM\Column(name="loc_rad1_ini", type="string", length=5, nullable=false)
     */
    private $locRad1Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_suf1_ini", type="string", length=3, nullable=false)
     */
    private $locSuf1Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_rad1_fim", type="string", length=5, nullable=false)
     */
    private $locRad1Fim;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_suf1_fim", type="string", length=3, nullable=false)
     */
    private $locSuf1Fim;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_rad2_ini", type="string", length=5, nullable=true)
     */
    private $locRad2Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_suf2_ini", type="string", length=3, nullable=true)
     */
    private $locSuf2Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_rad2_fim", type="string", length=5, nullable=true)
     */
    private $locRad2Fim;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_suf2_fim", type="string", length=3, nullable=true)
     */
    private $locSuf2Fim;

    /**
     * @var \ZipServerBundle\Entity\LogLocalidade
     *
     * @ORM\OneToOne(targetEntity="ZipServerBundle\Entity\LogLocalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loc_nu_sequencial", referencedColumnName="loc_nu_sequencial", unique=true)
     * })
     */
    private $locNuSequencial;


}

