<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogGrandeUsuario
 *
 * @ORM\Table(name="log_grande_usuario", indexes={@ORM\Index(name="log_grande_usuario_cep", columns={"cep"}), @ORM\Index(name="log_grande_usuario_ufe_sgloc_nu_sequencialgru_no", columns={"ufe_sg", "loc_nu_sequencial", "gru_no"}), @ORM\Index(name="log_grande_usuario_bai_nu_sequencial", columns={"bai_nu_sequencial"}), @ORM\Index(name="log_grande_usuario_log_nu_sequencial", columns={"log_nu_sequencial"}), @ORM\Index(name="log_grande_usuario_loc_nu_sequencial", columns={"loc_nu_sequencial"}), @ORM\Index(name="log_grande_usuario_temp", columns={"temp"})})
 * @ORM\Entity
 */
class LogGrandeUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gru_nu_sequencial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gruNuSequencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_sg", type="string", length=2, nullable=false)
     */
    private $ufeSg;

    /**
     * @var string
     *
     * @ORM\Column(name="gru_no", type="string", length=96, nullable=false)
     */
    private $gruNo;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=16, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="gru_endereco", type="string", length=200, nullable=false)
     */
    private $gruEndereco;

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

