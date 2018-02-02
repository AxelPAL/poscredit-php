<?php

namespace AxelPAL\PosCredit\Objects;

class ErrorCustom
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param int    $code
     * @param string $description
     */
    public function __construct($code, $description)
    {
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return ErrorCustom
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ErrorCustom
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
