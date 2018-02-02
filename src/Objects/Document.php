<?php

namespace AxelPAL\PosCredit\Objects;

class Document
{

    /**
     * @var string $ext
     */
    protected $ext = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $file
     */
    protected $file = null;

    /**
     * @param string $ext
     * @param string $type
     * @param string $file
     */
    public function __construct($ext, $type, $file)
    {
        $this->ext = $ext;
        $this->type = $type;
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     * @return Document
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Document
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return Document
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }
}
