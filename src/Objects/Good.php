<?php

namespace AxelPAL\PosCredit\Objects;

class Good
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $model
     */
    protected $model = null;

    /**
     * @var string $brand
     */
    protected $brand = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @param string $id
     * @param string $model
     * @param string $brand
     * @param float  $price
     */
    public function __construct($id, $model, $brand, $price)
    {
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Good
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Good
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
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
     * @return Good
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Good
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}
