<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogBairro
 *
 * @ORM\Table(name="log_bairro", indexes={@ORM\Index(name="log_bairro_ufe_sgloc_nu_sequencialbai_no", columns={"ufe_sg", "loc_nu_sequencial", "bai_no"}), @ORM\Index(name="log_bairro_loc_nu_sequencial", columns={"loc_nu_sequencial"})})
 * @ORM\Entity
 */
class LogBairro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bai_nu_sequencial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $baiNuSequencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ufe_sg", type="string", length=2, nullable=false)
     */
    private $ufeSg;

    /**
     * @var string
     *
     * @ORM\Column(name="bai_no", type="string", length=72, nullable=false)
     */
    private $baiNo;

    /**
     * @var string
     *
     * @ORM\Column(name="bai_no_abrev", type="string", length=36, nullable=true)
     */
    private $baiNoAbrev;

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
     * Get baiNuSequencial
     *
     * @return integer
     */
    public function getBaiNuSequencial()
    {
        return $this->baiNuSequencial;
    }

    /**
     * Set ufeSg
     *
     * @param string $ufeSg
     *
     * @return LogBairro
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
     * Set baiNo
     *
     * @param string $baiNo
     *
     * @return LogBairro
     */
    public function setBaiNo($baiNo)
    {
        $this->baiNo = $baiNo;

        return $this;
    }

    /**
     * Get baiNo
     *
     * @return string
     */
    public function getBaiNo()
    {
        return $this->baiNo;
    }

    /**
     * Set baiNoAbrev
     *
     * @param string $baiNoAbrev
     *
     * @return LogBairro
     */
    public function setBaiNoAbrev($baiNoAbrev)
    {
        $this->baiNoAbrev = $baiNoAbrev;

        return $this;
    }

    /**
     * Get baiNoAbrev
     *
     * @return string
     */
    public function getBaiNoAbrev()
    {
        return $this->baiNoAbrev;
    }

    /**
     * Set locNuSequencial
     *
     * @param \ZipServerBundle\Entity\LogLocalidade $locNuSequencial
     *
     * @return LogBairro
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
