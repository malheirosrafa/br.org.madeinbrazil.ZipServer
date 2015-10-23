<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogLogradouro
 *
 * @ORM\Table(name="log_logradouro", indexes={@ORM\Index(name="log_logradouro_cep", columns={"cep"}), @ORM\Index(name="log_logradouro_loc_nu_sequenciallog_no_sem_acento", columns={"loc_nu_sequencial", "log_no_sem_acento"}), @ORM\Index(name="log_logradouro_ufe_sglog_no_sem_acento", columns={"ufe_sg", "log_no_sem_acento"}), @ORM\Index(name="log_logradouro_loc_nu_sequencial", columns={"loc_nu_sequencial"}), @ORM\Index(name="log_logradouro_temp", columns={"temp"}), @ORM\Index(name="log_bairrolog_logradouro_bai_nu_sequencial_ini_log_bairro_bai_nu", columns={"bai_nu_sequencial_ini"})})
 * @ORM\Entity
 */
class LogLogradouro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="log_nu_sequencial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logNuSequencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_sg", type="string", length=2, nullable=false)
     */
    private $ufeSg;

    /**
     * @var string
     *
     * @ORM\Column(name="log_no", type="string", length=70, nullable=false)
     */
    private $logNo;

    /**
     * @var string
     *
     * @ORM\Column(name="log_nome", type="string", length=125, nullable=false)
     */
    private $logNome;

    /**
     * @var integer
     *
     * @ORM\Column(name="bai_nu_sequencial_fim", type="integer", nullable=true)
     */
    private $baiNuSequencialFim = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=16, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="log_complemento", type="string", length=100, nullable=true)
     */
    private $logComplemento;

    /**
     * @var string
     *
     * @ORM\Column(name="log_tipo_logradouro", type="string", length=72, nullable=true)
     */
    private $logTipoLogradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="log_status_tipo_log", type="string", length=1, nullable=false)
     */
    private $logStatusTipoLog;

    /**
     * @var string
     *
     * @ORM\Column(name="log_no_sem_acento", type="string", length=70, nullable=false)
     */
    private $logNoSemAcento;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_uop", type="string", length=1, nullable=true)
     */
    private $indUop;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_gru", type="string", length=1, nullable=true)
     */
    private $indGru;

    /**
     * @var string
     *
     * @ORM\Column(name="temp", type="string", length=8, nullable=true)
     */
    private $temp;

    /**
     * @var \ZipServerBundle\Entity\LogBairro
     *
     * @ORM\ManyToOne(targetEntity="ZipServerBundle\Entity\LogBairro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bai_nu_sequencial_ini", referencedColumnName="bai_nu_sequencial")
     * })
     */
    private $baiNuSequencialIni;

    /**
     * @var \ZipServerBundle\Entity\LogLocalidade
     *
     * @ORM\ManyToOne(targetEntity="ZipServerBundle\Entity\LogLocalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loc_nu_sequencial", referencedColumnName="loc_nu_sequencial")
     * })
     */
    private $locNuSequencial;


}

