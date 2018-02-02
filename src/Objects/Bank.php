<?php

namespace AxelPAL\PosCredit\Objects;

class Bank
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $productID
     */
    protected $productID = null;

    /**
     * @param int    $id
     * @param string $productID
     */
    public function __construct($id, $productID)
    {
        $this->id = $id;
        $this->productID = $productID;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Bank
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     * @return Bank
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }
}
