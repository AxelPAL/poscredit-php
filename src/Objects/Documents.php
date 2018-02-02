<?php

namespace AxelPAL\PosCredit\Objects;

class Documents
{

    /**
     * @var Document[] $document
     */
    protected $document = null;

    /**
     * @param Document[] $document
     */
    public function __construct(array $document)
    {
        $this->document = $document;
    }

    /**
     * @return Document[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document[] $document
     * @return Documents
     */
    public function setDocument(array $document)
    {
        $this->document = $document;
        return $this;
    }
}
