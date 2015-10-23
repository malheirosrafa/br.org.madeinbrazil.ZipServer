<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogUnidOper
 *
 * @ORM\Table(name="log_unid_oper", indexes={@ORM\Index(name="log_unid_oper_cep", columns={"cep"}), @ORM\Index(name="log_unid_oper_ufe_sgloc_nu_sequencialuop_no", columns={"ufe_sg", "loc_nu_sequencial", "uop_no"}), @ORM\Index(name="log_unid_oper_loc_nu_sequencial", columns={"loc_nu_sequencial"}), @ORM\Index(name="log_unid_oper_bai_nu_sequencial", columns={"bai_nu_sequencial"}), @ORM\Index(name="log_unid_oper_log_nu_sequencial", columns={"log_nu_sequencial"}), @ORM\Index(name="log_unid_oper_temp", columns={"temp"})})
 * @ORM\Entity
 */
class LogUnidOper
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uop_nu_sequencial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uopNuSequencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_sg", type="string", length=2, nullable=false)
     */
    private $ufeSg;

    /**
     * @var string
     *
     * @ORM\Column(name="uop_no", type="string", length=100, nullable=false)
     */
    private $uopNo;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=16, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="uop_endereco", type="string", length=200, nullable=false)
     */
    private $uopEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="uop_in_cp", type="string", length=1, nullable=true)
     */
    private $uopInCp;

    /**
     * @var string
     *
     * @ORM\Column(name="temp", type="string", length=8, nullable=true)
     */
    private $temp;

    /**
     * @var \ZipServerBundle\Entity\LogLocalidade
     *
     * @ORM\ManyToOne(targetEntity="ZipServerBundle\Entity\LogLocalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loc_nu_sequencial", referencedColumnName="loc_nu_sequencial")
     * })
     */
    private $locNuSequencial;

    /**
     * @var \ZipServerBundle\Entity\LogLogradouro
     *
     * @ORM\ManyToOne(targetEntity="ZipServerBundle\Entity\LogLogradouro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_nu_sequencial", referencedColumnName="log_nu_sequencial")
     * })
     */
    private $logNuSequencial;

    /**
     * @var \ZipServerBundle\Entity\LogBairro
     *
     * @ORM\ManyToOne(targetEntity="ZipServerBundle\Entity\LogBairro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bai_nu_sequencial", referencedColumnName="bai_nu_sequencial")
     * })
     */
    private $baiNuSequencial;


}

