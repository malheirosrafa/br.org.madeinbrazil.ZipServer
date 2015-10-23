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



    /**
     * Get cpcNuSequencial
     *
     * @return integer
     */
    public function getCpcNuSequencial()
    {
        return $this->cpcNuSequencial;
    }

    /**
     * Set ufeSg
     *
     * @param string $ufeSg
     *
     * @return LogCpc
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
     * Set cep
     *
     * @param string $cep
     *
     * @return LogCpc
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
     * Set cpcNo
     *
     * @param string $cpcNo
     *
     * @return LogCpc
     */
    public function setCpcNo($cpcNo)
    {
        $this->cpcNo = $cpcNo;

        return $this;
    }

    /**
     * Get cpcNo
     *
     * @return string
     */
    public function getCpcNo()
    {
        return $this->cpcNo;
    }

    /**
     * Set cpcEndereco
     *
     * @param string $cpcEndereco
     *
     * @return LogCpc
     */
    public function setCpcEndereco($cpcEndereco)
    {
        $this->cpcEndereco = $cpcEndereco;

        return $this;
    }

    /**
     * Get cpcEndereco
     *
     * @return string
     */
    public function getCpcEndereco()
    {
        return $this->cpcEndereco;
    }

    /**
     * Set cpcTipo
     *
     * @param string $cpcTipo
     *
     * @return LogCpc
     */
    public function setCpcTipo($cpcTipo)
    {
        $this->cpcTipo = $cpcTipo;

        return $this;
    }

    /**
     * Get cpcTipo
     *
     * @return string
     */
    public function getCpcTipo()
    {
        return $this->cpcTipo;
    }

    /**
     * Set cpcAbrangencia
     *
     * @param string $cpcAbrangencia
     *
     * @return LogCpc
     */
    public function setCpcAbrangencia($cpcAbrangencia)
    {
        $this->cpcAbrangencia = $cpcAbrangencia;

        return $this;
    }

    /**
     * Get cpcAbrangencia
     *
     * @return string
     */
    public function getCpcAbrangencia()
    {
        return $this->cpcAbrangencia;
    }

    /**
     * Set temp
     *
     * @param string $temp
     *
     * @return LogCpc
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
     * @return LogCpc
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
