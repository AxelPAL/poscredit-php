<?php

namespace AxelPAL\PosCredit\Objects;

class Education
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $year
     */
    protected $year = null;

    /**
     * @param string $name
     * @param int    $year
     */
    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Education
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return Education
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}
