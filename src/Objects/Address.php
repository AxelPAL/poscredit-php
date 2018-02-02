<?php

namespace AxelPAL\PosCredit\Objects;

class Address
{

    /**
     * @var string $index
     */
    protected $index = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $house
     */
    protected $house = null;

    /**
     * @var string $housing
     */
    protected $housing = null;

    /**
     * @var string $flat
     */
    protected $flat = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $period
     */
    protected $period = null;

    /**
     * @param string $index
     * @param string $city
     * @param string $street
     * @param string $house
     */
    public function __construct($index, $city, $street, $house)
    {
        $this->index = $index;
        $this->city = $city;
        $this->street = $street;
        $this->house = $house;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $index
     * @return Address
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string $house
     * @return Address
     */
    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    /**
     * @return string
     */
    public function getHousing()
    {
        return $this->housing;
    }

    /**
     * @param string $housing
     * @return Address
     */
    public function setHousing($housing)
    {
        $this->housing = $housing;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlat()
    {
        return $this->flat;
    }

    /**
     * @param string $flat
     * @return Address
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return Address
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Address
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param string $period
     * @return Address
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }
}
