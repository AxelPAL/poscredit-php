<?php

namespace AxelPAL\PosCredit\Objects;

class Services
{

    /**
     * @var int[] $service
     */
    protected $service = null;

    /**
     * @param int[] $service
     */
    public function __construct(array $service)
    {
        $this->service = $service;
    }

    /**
     * @return int[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param int[] $service
     * @return Services
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }
}
