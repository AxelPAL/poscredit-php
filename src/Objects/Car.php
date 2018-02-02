<?php

namespace AxelPAL\PosCredit\Objects;

class Car
{

    /**
     * @var string $brand
     */
    protected $brand = null;

    /**
     * @var string $model
     */
    protected $model = null;

    /**
     * @var int $year
     */
    protected $year = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @param string $brand
     * @param string $model
     * @param int    $year
     * @param string $country
     * @param string $number
     * @param string $source
     */
    public function __construct($brand, $model, $year, $country, $number, $source)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->country = $country;
        $this->number = $number;
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Car
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Car
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return Car
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }
}
