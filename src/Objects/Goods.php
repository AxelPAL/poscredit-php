<?php

namespace AxelPAL\PosCredit\Objects;

class Goods
{

    /**
     * @var Good[] $good
     */
    protected $good = null;

    /**
     * @param Good[] $good
     */
    public function __construct(array $good)
    {
        $this->good = $good;
    }

    /**
     * @return Good[]
     */
    public function getGood()
    {
        return $this->good;
    }

    /**
     * @param Good[] $good
     * @return Goods
     */
    public function setGood(array $good)
    {
        $this->good = $good;
        return $this;
    }
}
