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



    /**
     * Get logNuSequencial
     *
     * @return integer
     */
    public function getLogNuSequencial()
    {
        return $this->logNuSequencial;
    }

    /**
     * Set ufeSg
     *
     * @param string $ufeSg
     *
     * @return LogLogradouro
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
     * Set logNo
     *
     * @param string $logNo
     *
     * @return LogLogradouro
     */
    public function setLogNo($logNo)
    {
        $this->logNo = $logNo;

        return $this;
    }

    /**
     * Get logNo
     *
     * @return string
     */
    public function getLogNo()
    {
        return $this->logNo;
    }

    /**
     * Set logNome
     *
     * @param string $logNome
     *
     * @return LogLogradouro
     */
    public function setLogNome($logNome)
    {
        $this->logNome = $logNome;

        return $this;
    }

    /**
     * Get logNome
     *
     * @return string
     */
    public function getLogNome()
    {
        return $this->logNome;
    }

    /**
     * Set baiNuSequencialFim
     *
     * @param integer $baiNuSequencialFim
     *
     * @return LogLogradouro
     */
    public function setBaiNuSequencialFim($baiNuSequencialFim)
    {
        $this->baiNuSequencialFim = $baiNuSequencialFim;

        return $this;
    }

    /**
     * Get baiNuSequencialFim
     *
     * @return integer
     */
    public function getBaiNuSequencialFim()
    {
        return $this->baiNuSequencialFim;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return LogLogradouro
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
     * Set logComplemento
     *
     * @param string $logComplemento
     *
     * @return LogLogradouro
     */
    public function setLogComplemento($logComplemento)
    {
        $this->logComplemento = $logComplemento;

        return $this;
    }

    /**
     * Get logComplemento
     *
     * @return string
     */
    public function getLogComplemento()
    {
        return $this->logComplemento;
    }

    /**
     * Set logTipoLogradouro
     *
     * @param string $logTipoLogradouro
     *
     * @return LogLogradouro
     */
    public function setLogTipoLogradouro($logTipoLogradouro)
    {
        $this->logTipoLogradouro = $logTipoLogradouro;

        return $this;
    }

    /**
     * Get logTipoLogradouro
     *
     * @return string
     */
    public function getLogTipoLogradouro()
    {
        return $this->logTipoLogradouro;
    }

    /**
     * Set logStatusTipoLog
     *
     * @param string $logStatusTipoLog
     *
     * @return LogLogradouro
     */
    public function setLogStatusTipoLog($logStatusTipoLog)
    {
        $this->logStatusTipoLog = $logStatusTipoLog;

        return $this;
    }

    /**
     * Get logStatusTipoLog
     *
     * @return string
     */
    public function getLogStatusTipoLog()
    {
        return $this->logStatusTipoLog;
    }

    /**
     * Set logNoSemAcento
     *
     * @param string $logNoSemAcento
     *
     * @return LogLogradouro
     */
    public function setLogNoSemAcento($logNoSemAcento)
    {
        $this->logNoSemAcento = $logNoSemAcento;

        return $this;
    }

    /**
     * Get logNoSemAcento
     *
     * @return string
     */
    public function getLogNoSemAcento()
    {
        return $this->logNoSemAcento;
    }

    /**
     * Set indUop
     *
     * @param string $indUop
     *
     * @return LogLogradouro
     */
    public function setIndUop($indUop)
    {
        $this->indUop = $indUop;

        return $this;
    }

    /**
     * Get indUop
     *
     * @return string
     */
    public function getIndUop()
    {
        return $this->indUop;
    }

    /**
     * Set indGru
     *
     * @param string $indGru
     *
     * @return LogLogradouro
     */
    public function setIndGru($indGru)
    {
        $this->indGru = $indGru;

        return $this;
    }

    /**
     * Get indGru
     *
     * @return string
     */
    public function getIndGru()
    {
        return $this->indGru;
    }

    /**
     * Set temp
     *
     * @param string $temp
     *
     * @return LogLogradouro
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
     * Set baiNuSequencialIni
     *
     * @param \ZipServerBundle\Entity\LogBairro $baiNuSequencialIni
     *
     * @return LogLogradouro
     */
    public function setBaiNuSequencialIni(\ZipServerBundle\Entity\LogBairro $baiNuSequencialIni = null)
    {
        $this->baiNuSequencialIni = $baiNuSequencialIni;

        return $this;
    }

    /**
     * Get baiNuSequencialIni
     *
     * @return \ZipServerBundle\Entity\LogBairro
     */
    public function getBaiNuSequencialIni()
    {
        return $this->baiNuSequencialIni;
    }

    /**
     * Set locNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogLocalidade $locNuSequencial
     *
     * @return LogLogradouro
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
}
