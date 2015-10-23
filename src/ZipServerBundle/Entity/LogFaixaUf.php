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
     * Set ufeNo
     *
     * @param string $ufeNo
     *
     * @return LogFaixaUf
     */
    public function setUfeNo($ufeNo)
    {
        $this->ufeNo = $ufeNo;

        return $this;
    }

    /**
     * Get ufeNo
     *
     * @return string
     */
    public function getUfeNo()
    {
        return $this->ufeNo;
    }

    /**
     * Set ufeRad1Ini
     *
     * @param string $ufeRad1Ini
     *
     * @return LogFaixaUf
     */
    public function setUfeRad1Ini($ufeRad1Ini)
    {
        $this->ufeRad1Ini = $ufeRad1Ini;

        return $this;
    }

    /**
     * Get ufeRad1Ini
     *
     * @return string
     */
    public function getUfeRad1Ini()
    {
        return $this->ufeRad1Ini;
    }

    /**
     * Set ufeSuf1Ini
     *
     * @param string $ufeSuf1Ini
     *
     * @return LogFaixaUf
     */
    public function setUfeSuf1Ini($ufeSuf1Ini)
    {
        $this->ufeSuf1Ini = $ufeSuf1Ini;

        return $this;
    }

    /**
     * Get ufeSuf1Ini
     *
     * @return string
     */
    public function getUfeSuf1Ini()
    {
        return $this->ufeSuf1Ini;
    }

    /**
     * Set ufeRad1Fim
     *
     * @param string $ufeRad1Fim
     *
     * @return LogFaixaUf
     */
    public function setUfeRad1Fim($ufeRad1Fim)
    {
        $this->ufeRad1Fim = $ufeRad1Fim;

        return $this;
    }

    /**
     * Get ufeRad1Fim
     *
     * @return string
     */
    public function getUfeRad1Fim()
    {
        return $this->ufeRad1Fim;
    }

    /**
     * Set ufeSuf1Fim
     *
     * @param string $ufeSuf1Fim
     *
     * @return LogFaixaUf
     */
    public function setUfeSuf1Fim($ufeSuf1Fim)
    {
        $this->ufeSuf1Fim = $ufeSuf1Fim;

        return $this;
    }

    /**
     * Get ufeSuf1Fim
     *
     * @return string
     */
    public function getUfeSuf1Fim()
    {
        return $this->ufeSuf1Fim;
    }

    /**
     * Set ufeRad2Ini
     *
     * @param string $ufeRad2Ini
     *
     * @return LogFaixaUf
     */
    public function setUfeRad2Ini($ufeRad2Ini)
    {
        $this->ufeRad2Ini = $ufeRad2Ini;

        return $this;
    }

    /**
     * Get ufeRad2Ini
     *
     * @return string
     */
    public function getUfeRad2Ini()
    {
        return $this->ufeRad2Ini;
    }

    /**
     * Set ufeSuf2Ini
     *
     * @param string $ufeSuf2Ini
     *
     * @return LogFaixaUf
     */
    public function setUfeSuf2Ini($ufeSuf2Ini)
    {
        $this->ufeSuf2Ini = $ufeSuf2Ini;

        return $this;
    }

    /**
     * Get ufeSuf2Ini
     *
     * @return string
     */
    public function getUfeSuf2Ini()
    {
        return $this->ufeSuf2Ini;
    }

    /**
     * Set ufeRad2Fim
     *
     * @param string $ufeRad2Fim
     *
     * @return LogFaixaUf
     */
    public function setUfeRad2Fim($ufeRad2Fim)
    {
        $this->ufeRad2Fim = $ufeRad2Fim;

        return $this;
    }

    /**
     * Get ufeRad2Fim
     *
     * @return string
     */
    public function getUfeRad2Fim()
    {
        return $this->ufeRad2Fim;
    }

    /**
     * Set ufeSuf2Fim
     *
     * @param string $ufeSuf2Fim
     *
     * @return LogFaixaUf
     */
    public function setUfeSuf2Fim($ufeSuf2Fim)
    {
        $this->ufeSuf2Fim = $ufeSuf2Fim;

        return $this;
    }

    /**
     * Get ufeSuf2Fim
     *
     * @return string
     */
    public function getUfeSuf2Fim()
    {
        return $this->ufeSuf2Fim;
    }
}
