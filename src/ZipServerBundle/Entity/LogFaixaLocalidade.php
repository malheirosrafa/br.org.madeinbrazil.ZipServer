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



    /**
     * Set locRad1Ini
     *
     * @param string $locRad1Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad1Ini($locRad1Ini)
    {
        $this->locRad1Ini = $locRad1Ini;

        return $this;
    }

    /**
     * Get locRad1Ini
     *
     * @return string
     */
    public function getLocRad1Ini()
    {
        return $this->locRad1Ini;
    }

    /**
     * Set locSuf1Ini
     *
     * @param string $locSuf1Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf1Ini($locSuf1Ini)
    {
        $this->locSuf1Ini = $locSuf1Ini;

        return $this;
    }

    /**
     * Get locSuf1Ini
     *
     * @return string
     */
    public function getLocSuf1Ini()
    {
        return $this->locSuf1Ini;
    }

    /**
     * Set locRad1Fim
     *
     * @param string $locRad1Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad1Fim($locRad1Fim)
    {
        $this->locRad1Fim = $locRad1Fim;

        return $this;
    }

    /**
     * Get locRad1Fim
     *
     * @return string
     */
    public function getLocRad1Fim()
    {
        return $this->locRad1Fim;
    }

    /**
     * Set locSuf1Fim
     *
     * @param string $locSuf1Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf1Fim($locSuf1Fim)
    {
        $this->locSuf1Fim = $locSuf1Fim;

        return $this;
    }

    /**
     * Get locSuf1Fim
     *
     * @return string
     */
    public function getLocSuf1Fim()
    {
        return $this->locSuf1Fim;
    }

    /**
     * Set locRad2Ini
     *
     * @param string $locRad2Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad2Ini($locRad2Ini)
    {
        $this->locRad2Ini = $locRad2Ini;

        return $this;
    }

    /**
     * Get locRad2Ini
     *
     * @return string
     */
    public function getLocRad2Ini()
    {
        return $this->locRad2Ini;
    }

    /**
     * Set locSuf2Ini
     *
     * @param string $locSuf2Ini
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf2Ini($locSuf2Ini)
    {
        $this->locSuf2Ini = $locSuf2Ini;

        return $this;
    }

    /**
     * Get locSuf2Ini
     *
     * @return string
     */
    public function getLocSuf2Ini()
    {
        return $this->locSuf2Ini;
    }

    /**
     * Set locRad2Fim
     *
     * @param string $locRad2Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocRad2Fim($locRad2Fim)
    {
        $this->locRad2Fim = $locRad2Fim;

        return $this;
    }

    /**
     * Get locRad2Fim
     *
     * @return string
     */
    public function getLocRad2Fim()
    {
        return $this->locRad2Fim;
    }

    /**
     * Set locSuf2Fim
     *
     * @param string $locSuf2Fim
     *
     * @return LogFaixaLocalidade
     */
    public function setLocSuf2Fim($locSuf2Fim)
    {
        $this->locSuf2Fim = $locSuf2Fim;

        return $this;
    }

    /**
     * Get locSuf2Fim
     *
     * @return string
     */
    public function getLocSuf2Fim()
    {
        return $this->locSuf2Fim;
    }

    /**
     * Set locNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogLocalidade $locNuSequencial
     *
     * @return LogFaixaLocalidade
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
