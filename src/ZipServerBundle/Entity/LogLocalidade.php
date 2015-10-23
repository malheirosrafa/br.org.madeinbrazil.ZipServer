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


}

