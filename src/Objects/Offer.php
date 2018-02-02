<?php

namespace AxelPAL\PosCredit\Objects;

class Offer
{

    /**
     * @var int $variantID
     */
    protected $variantID = null;

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var int $terms
     */
    protected $terms = null;

    /**
     * @var float $firstPayment
     */
    protected $firstPayment = null;

    /**
     * @var float $monthlyAmount
     */
    protected $monthlyAmount = null;

    /**
     * @var float $insuranceAmount
     */
    protected $insuranceAmount = null;

    /**
     * @var float $otherAmount
     */
    protected $otherAmount = null;

    /**
     * @var float $rate
     */
    protected $rate = null;

    /**
     * @param string $product
     * @param float  $amount
     * @param int    $terms
     * @param float  $firstPayment
     * @param float  $monthlyAmount
     * @param float  $insuranceAmount
     * @param float  $otherAmount
     * @param float  $rate
     */
    public function __construct(
        $product,
        $amount,
        $terms,
        $firstPayment,
        $monthlyAmount,
        $insuranceAmount,
        $otherAmount,
        $rate
    ) {
        $this->product = $product;
        $this->amount = $amount;
        $this->terms = $terms;
        $this->firstPayment = $firstPayment;
        $this->monthlyAmount = $monthlyAmount;
        $this->insuranceAmount = $insuranceAmount;
        $this->otherAmount = $otherAmount;
        $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getVariantID()
    {
        return $this->variantID;
    }

    /**
     * @param int $variantID
     * @return Offer
     */
    public function setVariantID($variantID)
    {
        $this->variantID = $variantID;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     * @return Offer
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Offer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param int $terms
     * @return Offer
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstPayment()
    {
        return $this->firstPayment;
    }

    /**
     * @param float $firstPayment
     * @return Offer
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonthlyAmount()
    {
        return $this->monthlyAmount;
    }

    /**
     * @param float $monthlyAmount
     * @return Offer
     */
    public function setMonthlyAmount($monthlyAmount)
    {
        $this->monthlyAmount = $monthlyAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * @param float $insuranceAmount
     * @return Offer
     */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOtherAmount()
    {
        return $this->otherAmount;
    }

    /**
     * @param float $otherAmount
     * @return Offer
     */
    public function setOtherAmount($otherAmount)
    {
        $this->otherAmount = $otherAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return Offer
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }
}
