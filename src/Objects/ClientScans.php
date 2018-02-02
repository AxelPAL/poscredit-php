<?php

namespace AxelPAL\PosCredit\Objects;

class ClientScans
{

    /**
     * @var Scan[] $scan
     */
    protected $scan = null;

    /**
     * @param Scan[] $scan
     */
    public function __construct(array $scan)
    {
        $this->scan = $scan;
    }

    /**
     * @return Scan[]
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * @param Scan[] $scan
     * @return ClientScans
     */
    public function setScan(array $scan)
    {
        $this->scan = $scan;
        return $this;
    }
}
