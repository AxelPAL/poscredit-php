<?php

namespace AxelPAL\PosCredit\Objects;

class TransferPayment
{

    /**
     * @var string $statusPayment
     */
    protected $statusPayment = null;

    /**
     * @var float $datePayment
     */
    protected $datePayment = null;

    /**
     * @var int $numberPayment
     */
    protected $numberPayment = null;

    /**
     * @var string $codePayment
     */
    protected $codePayment = null;

    /**
     * @var float $amountPayment
     */
    protected $amountPayment = null;

    /**
     * @param string $statusPayment
     * @param float  $datePayment
     * @param int    $numberPayment
     * @param string $codePayment
     * @param float  $amountPayment
     */
    public function __construct($statusPayment, $datePayment, $numberPayment, $codePayment, $amountPayment)
    {
        $this->statusPayment = $statusPayment;
        $this->datePayment = $datePayment;
        $this->numberPayment = $numberPayment;
        $this->codePayment = $codePayment;
        $this->amountPayment = $amountPayment;
    }

    /**
     * @return string
     */
    public function getStatusPayment()
    {
        return $this->statusPayment;
    }

    /**
     * @param string $statusPayment
     * @return TransferPayment
     */
    public function setStatusPayment($statusPayment)
    {
        $this->statusPayment = $statusPayment;
        return $this;
    }

    /**
     * @return float
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * @param float $datePayment
     * @return TransferPayment
     */
    public function setDatePayment($datePayment)
    {
        $this->datePayment = $datePayment;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberPayment()
    {
        return $this->numberPayment;
    }

    /**
     * @param int $numberPayment
     * @return TransferPayment
     */
    public function setNumberPayment($numberPayment)
    {
        $this->numberPayment = $numberPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodePayment()
    {
        return $this->codePayment;
    }

    /**
     * @param string $codePayment
     * @return TransferPayment
     */
    public function setCodePayment($codePayment)
    {
        $this->codePayment = $codePayment;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountPayment()
    {
        return $this->amountPayment;
    }

    /**
     * @param float $amountPayment
     * @return TransferPayment
     */
    public function setAmountPayment($amountPayment)
    {
        $this->amountPayment = $amountPayment;
        return $this;
    }
}
