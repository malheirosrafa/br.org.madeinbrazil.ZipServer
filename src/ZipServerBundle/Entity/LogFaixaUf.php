<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogFaixaUf
 *
 * @ORM\Table(name="log_faixa_uf")
 * @ORM\Entity
 */
class LogFaixaUf
{
    /**
     * @var string
     *
     * @ORM\Column(name="ufe_sg", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ufeSg;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_no", type="string", length=72, nullable=false)
     */
    private $ufeNo;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_rad1_ini", type="string", length=5, nullable=false)
     */
    private $ufeRad1Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_suf1_ini", type="string", length=3, nullable=false)
     */
    private $ufeSuf1Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_rad1_fim", type="string", length=5, nullable=false)
     */
    private $ufeRad1Fim;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_suf1_fim", type="string", length=3, nullable=false)
     */
    private $ufeSuf1Fim;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_rad2_ini", type="string", length=5, nullable=true)
     */
    private $ufeRad2Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_suf2_ini", type="string", length=3, nullable=true)
     */
    private $ufeSuf2Ini;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_rad2_fim", type="string", length=5, nullable=true)
     */
    private $ufeRad2Fim;

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_suf2_fim", type="string", length=3, nullable=true)
     */
    private $ufeSuf2Fim;


}

