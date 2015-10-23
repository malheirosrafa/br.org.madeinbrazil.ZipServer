<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogCpc
 *
 * @ORM\Table(name="log_cpc", indexes={@ORM\Index(name="log_cpc_cep", columns={"cep"}), @ORM\Index(name="log_cpc_ufe_sgloc_nu_sequencialcpc_no", columns={"ufe_sg", "loc_nu_sequencial", "cpc_no"}), @ORM\Index(name="log_cpc_loc_nu_sequencial", columns={"loc_nu_sequencial"}), @ORM\Index(name="log_cpc_temp", columns={"temp"})})
 * @ORM\Entity
 */
class LogCpc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cpc_nu_sequencial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpcNuSequencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_sg", type="string", length=2, nullable=false)
     */
    private $ufeSg;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=16, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="cpc_no", type="string", length=96, nullable=false)
     */
    private $cpcNo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpc_endereco", type="string", length=108, nullable=false)
     */
    private $cpcEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cpc_tipo", type="string", length=2, nullable=true)
     */
    private $cpcTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpc_abrangencia", type="string", length=80, nullable=true)
     */
    private $cpcAbrangencia;

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


}

