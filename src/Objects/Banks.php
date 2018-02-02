<?php

namespace AxelPAL\PosCredit\Objects;

class Banks
{

    /**
     * @var Bank[] $bank
     */
    protected $bank = null;

    /**
     * @param Bank[] $bank
     */
    public function __construct(array $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return Bank[]
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param Bank[] $bank
     * @return Banks
     */
    public function setBank(array $bank)
    {
        $this->bank = $bank;
        return $this;
    }
}
