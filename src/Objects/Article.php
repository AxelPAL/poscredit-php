<?php

namespace AxelPAL\PosCredit\Objects;

class Article
{

    /**
     * @var string $goodName
     */
    protected $goodName = null;

    /**
     * @var float $goodPrice
     */
    protected $goodPrice = null;

    /**
     * @var string $goodModel
     */
    protected $goodModel = null;

    /**
     * @var string $goodBrand
     */
    protected $goodBrand = null;

    /**
     * @param string $goodName
     * @param float  $goodPrice
     * @param string $goodModel
     * @param string $goodBrand
     */
    public function __construct($goodName, $goodPrice, $goodModel, $goodBrand)
    {
        $this->goodName = $goodName;
        $this->goodPrice = $goodPrice;
        $this->goodModel = $goodModel;
        $this->goodBrand = $goodBrand;
    }

    /**
     * @return string
     */
    public function getGoodName()
    {
        return $this->goodName;
    }

    /**
     * @param string $goodName
     * @return Article
     */
    public function setGoodName($goodName)
    {
        $this->goodName = $goodName;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoodPrice()
    {
        return $this->goodPrice;
    }

    /**
     * @param float $goodPrice
     * @return Article
     */
    public function setGoodPrice($goodPrice)
    {
        $this->goodPrice = $goodPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodModel()
    {
        return $this->goodModel;
    }

    /**
     * @param string $goodModel
     * @return Article
     */
    public function setGoodModel($goodModel)
    {
        $this->goodModel = $goodModel;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodBrand()
    {
        return $this->goodBrand;
    }

    /**
     * @param string $goodBrand
     * @return Article
     */
    public function setGoodBrand($goodBrand)
    {
        $this->goodBrand = $goodBrand;
        return $this;
    }
}
