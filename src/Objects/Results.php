<?php

namespace AxelPAL\PosCredit\Objects;

class Results
{

    /**
     * @var Result[] $result
     */
    protected $result = null;

    /**
     * @param Result[] $result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }

    /**
     * @return Result[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param Result[] $result
     * @return Results
     */
    public function setResult(array $result)
    {
        $this->result = $result;
        return $this;
    }
}
