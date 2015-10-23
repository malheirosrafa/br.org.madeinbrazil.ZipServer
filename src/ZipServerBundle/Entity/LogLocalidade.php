<?php

namespace ZipServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogLocalidade
 *
 * @ORM\Table(name="log_localidade", indexes={@ORM\Index(name="log_localidade_cep", columns={"cep"}), @ORM\Index(name="log_localidade_ufe_sg", columns={"ufe_sg"}), @ORM\Index(name="log_localidade_temp", columns={"temp"})})
 * @ORM\Entity
 */
class LogLocalidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="loc_nu_sequencial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locNuSequencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="loc_nosub", type="string", length=50, nullable=true)
     */
    private $locNosub;

    /**
     * @var string
     *
     * @ORM\Column(name="loc_no", type="string", length=60, nullable=true)
     */
    private $locNo;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=16, nullable=true)
     */
    private $cep;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_in_situacao", type="integer", nullable=true)
     */
    private $locInSituacao = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="loc_in_tipo_localidade", type="string", length=1, nullable=false)
     */
    private $locInTipoLocalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="loc_nu_sequencial_sub", type="integer", nullable=true)
     */
    private $locNuSequencialSub = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="temp", type="string", length=8, nullable=true)
     */
    private $temp;

    /**
     * @var \ZipServerBundle\Entity\LogFaixaUf
     *
     * @ORM\ManyToOne(targetEntity="ZipServerBundle\Entity\LogFaixaUf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ufe_sg", referencedColumnName="ufe_sg")
     * })
     */
    private $ufeSg;



    /**
     * Get locNuSequencial
     *
     * @return integer
     */
    public function getLocNuSequencial()
    {
        return $this->locNuSequencial;
    }

    /**
     * Set locNosub
     *
     * @param string $locNosub
     *
     * @return LogLocalidade
     */
    public function setLocNosub($locNosub)
    {
        $this->locNosub = $locNosub;

        return $this;
    }

    /**
     * Get locNosub
     *
     * @return string
     */
    public function getLocNosub()
    {
        return $this->locNosub;
    }

    /**
     * Set locNo
     *
     * @param string $locNo
     *
     * @return LogLocalidade
     */
    public function setLocNo($locNo)
    {
        $this->locNo = $locNo;

        return $this;
    }

    /**
     * Get locNo
     *
     * @return string
     */
    public function getLocNo()
    {
        return $this->locNo;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return LogLocalidade
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
     * Set locInSituacao
     *
     * @param integer $locInSituacao
     *
     * @return LogLocalidade
     */
    public function setLocInSituacao($locInSituacao)
    {
        $this->locInSituacao = $locInSituacao;

        return $this;
    }

    /**
     * Get locInSituacao
     *
     * @return integer
     */
    public function getLocInSituacao()
    {
        return $this->locInSituacao;
    }

    /**
     * Set locInTipoLocalidade
     *
     * @param string $locInTipoLocalidade
     *
     * @return LogLocalidade
     */
    public function setLocInTipoLocalidade($locInTipoLocalidade)
    {
        $this->locInTipoLocalidade = $locInTipoLocalidade;

        return $this;
    }

    /**
     * Get locInTipoLocalidade
     *
     * @return string
     */
    public function getLocInTipoLocalidade()
    {
        return $this->locInTipoLocalidade;
    }

    /**
     * Set locNuSequencialSub
     *
     * @param integer $locNuSequencialSub
     *
     * @return LogLocalidade
     */
    public function setLocNuSequencialSub($locNuSequencialSub)
    {
        $this->locNuSequencialSub = $locNuSequencialSub;

        return $this;
    }

    /**
     * Get locNuSequencialSub
     *
     * @return integer
     */
    public function getLocNuSequencialSub()
    {
        return $this->locNuSequencialSub;
    }

    /**
     * Set temp
     *
     * @param string $temp
     *
     * @return LogLocalidade
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
     * Set ufeSg
     *
     * @param \ZipServerBundle\Entity\LogFaixaUf $ufeSg
     *
     * @return LogLocalidade
     */
    public function setUfeSg(\ZipServerBundle\Entity\LogFaixaUf $ufeSg = null)
    {
        $this->ufeSg = $ufeSg;

        return $this;
    }

    /**
     * Get ufeSg
     *
     * @return \ZipServerBundle\Entity\LogFaixaUf
     */
    public function getUfeSg()
    {
        return $this->ufeSg;
    }
}
