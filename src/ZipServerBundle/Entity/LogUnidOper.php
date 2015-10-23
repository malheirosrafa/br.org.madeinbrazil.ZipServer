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



    /**
     * Get uopNuSequencial
     *
     * @return integer
     */
    public function getUopNuSequencial()
    {
        return $this->uopNuSequencial;
    }

    /**
     * Set ufeSg
     *
     * @param string $ufeSg
     *
     * @return LogUnidOper
     */
    public function setUfeSg($ufeSg)
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    /**
     * Get ufeSg
     *
     * @return string
     */
    public function getUfeSg()
    {
        return $this->ufeSg;
    }

    /**
     * Set uopNo
     *
     * @param string $uopNo
     *
     * @return LogUnidOper
     */
    public function setUopNo($uopNo)
    {
        $this->uopNo = $uopNo;

        return $this;
    }

    /**
     * Get uopNo
     *
     * @return string
     */
    public function getUopNo()
    {
        return $this->uopNo;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return LogUnidOper
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set uopEndereco
     *
     * @param string $uopEndereco
     *
     * @return LogUnidOper
     */
    public function setUopEndereco($uopEndereco)
    {
        $this->uopEndereco = $uopEndereco;

        return $this;
    }

    /**
     * Get uopEndereco
     *
     * @return string
     */
    public function getUopEndereco()
    {
        return $this->uopEndereco;
    }

    /**
     * Set uopInCp
     *
     * @param string $uopInCp
     *
     * @return LogUnidOper
     */
    public function setUopInCp($uopInCp)
    {
        $this->uopInCp = $uopInCp;

        return $this;
    }

    /**
     * Get uopInCp
     *
     * @return string
     */
    public function getUopInCp()
    {
        return $this->uopInCp;
    }

    /**
     * Set temp
     *
     * @param string $temp
     *
     * @return LogUnidOper
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return string
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set locNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogLocalidade $locNuSequencial
     *
     * @return LogUnidOper
     */
    public function setLocNuSequencial(\ZipServerBundle\Entity\LogLocalidade $locNuSequencial = null)
    {
        $this->locNuSequencial = $locNuSequencial;

        return $this;
    }

    /**
     * Get locNuSequencial
     *
     * @return \ZipServerBundle\Entity\LogLocalidade
     */
    public function getLocNuSequencial()
    {
        return $this->locNuSequencial;
    }

    /**
     * Set logNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogLogradouro $logNuSequencial
     *
     * @return LogUnidOper
     */
    public function setLogNuSequencial(\ZipServerBundle\Entity\LogLogradouro $logNuSequencial = null)
    {
        $this->logNuSequencial = $logNuSequencial;

        return $this;
    }

    /**
     * Get logNuSequencial
     *
     * @return \ZipServerBundle\Entity\LogLogradouro
     */
    public function getLogNuSequencial()
    {
        return $this->logNuSequencial;
    }

    /**
     * Set baiNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogBairro $baiNuSequencial
     *
     * @return LogUnidOper
     */
    public function setBaiNuSequencial(\ZipServerBundle\Entity\LogBairro $baiNuSequencial = null)
    {
        $this->baiNuSequencial = $baiNuSequencial;

        return $this;
    }

    /**
     * Get baiNuSequencial
     *
     * @return \ZipServerBundle\Entity\LogBairro
     */
    public function getBaiNuSequencial()
    {
        return $this->baiNuSequencial;
    }
}
