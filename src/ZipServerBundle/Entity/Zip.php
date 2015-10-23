<?php

namespace ZipServerBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="zip")
 */
class Zip
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $zip;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $street;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $area;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $state;

    /**
     * Set zip
     *
     * @param integer $zip
     *
     * @return Zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return integer
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Zip
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set area
     *
     * @param string $area
     *
     * @return Zip
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Zip
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Zip
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
