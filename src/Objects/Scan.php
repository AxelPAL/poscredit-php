<?php

namespace AxelPAL\PosCredit\Objects;

class Scan
{

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $file
     */
    protected $file = null;

    /**
     * @param string $format
     * @param string $file
     */
    public function __construct($format, $file)
    {
        $this->format = $format;
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return Scan
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return Scan
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }
}
