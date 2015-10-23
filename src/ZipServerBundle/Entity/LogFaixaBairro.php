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



    /**
     * Set fcbNuOrdem
     *
     * @param integer $fcbNuOrdem
     *
     * @return LogFaixaBairro
     */
    public function setFcbNuOrdem($fcbNuOrdem)
    {
        $this->fcbNuOrdem = $fcbNuOrdem;

        return $this;
    }

    /**
     * Get fcbNuOrdem
     *
     * @return integer
     */
    public function getFcbNuOrdem()
    {
        return $this->fcbNuOrdem;
    }

    /**
     * Set fcbRadIni
     *
     * @param string $fcbRadIni
     *
     * @return LogFaixaBairro
     */
    public function setFcbRadIni($fcbRadIni)
    {
        $this->fcbRadIni = $fcbRadIni;

        return $this;
    }

    /**
     * Get fcbRadIni
     *
     * @return string
     */
    public function getFcbRadIni()
    {
        return $this->fcbRadIni;
    }

    /**
     * Set fcbSufIni
     *
     * @param string $fcbSufIni
     *
     * @return LogFaixaBairro
     */
    public function setFcbSufIni($fcbSufIni)
    {
        $this->fcbSufIni = $fcbSufIni;

        return $this;
    }

    /**
     * Get fcbSufIni
     *
     * @return string
     */
    public function getFcbSufIni()
    {
        return $this->fcbSufIni;
    }

    /**
     * Set fcbRadFim
     *
     * @param string $fcbRadFim
     *
     * @return LogFaixaBairro
     */
    public function setFcbRadFim($fcbRadFim)
    {
        $this->fcbRadFim = $fcbRadFim;

        return $this;
    }

    /**
     * Get fcbRadFim
     *
     * @return string
     */
    public function getFcbRadFim()
    {
        return $this->fcbRadFim;
    }

    /**
     * Set fcbSufFim
     *
     * @param string $fcbSufFim
     *
     * @return LogFaixaBairro
     */
    public function setFcbSufFim($fcbSufFim)
    {
        $this->fcbSufFim = $fcbSufFim;

        return $this;
    }

    /**
     * Get fcbSufFim
     *
     * @return string
     */
    public function getFcbSufFim()
    {
        return $this->fcbSufFim;
    }

    /**
     * Set baiNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogBairro $baiNuSequencial
     *
     * @return LogFaixaBairro
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
