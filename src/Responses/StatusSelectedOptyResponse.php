<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;

class StatusSelectedOptyResponse
{

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var string $orderID
     */
    protected $orderID = null;

    /**
     * @var string $clientName
     */
    protected $clientName = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var int $bank
     */
    protected $bank = null;

    /**
     * @var string $company
     */
    protected $company = null;

    /**
     * @var string $sellerName
     */
    protected $sellerName = null;

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
     * @var int $smsNotification
     */
    protected $smsNotification = null;

    /**
     * @var int $rgsType
     */
    protected $rgsType = null;

    /**
     * @var float $rgsAmount
     */
    protected $rgsAmount = null;

    /**
     * @var string $rgsContractNumber
     */
    protected $rgsContractNumber = null;

    /**
     * @var int $authStatus
     */
    protected $authStatus = null;

    /**
     * @var string $contractNumber
     */
    protected $contractNumber = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var int $delivery
     */
    protected $delivery = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int    $profileID
     * @param string $orderID
     * @param string $clientName
     * @param int    $status
     * @param int    $bank
     * @param string $company
     * @param string $sellerName
     * @param string $product
     * @param float  $amount
     * @param int    $terms
     * @param float  $firstPayment
     * @param float  $monthlyAmount
     * @param float  $insuranceAmount
     * @param float  $otherAmount
     * @param float  $rate
     * @param int    $smsNotification
     * @param int    $rgsType
     * @param float  $rgsAmount
     * @param string $rgsContractNumber
     * @param int    $authStatus
     * @param string $contractNumber
     * @param string $authCode
     * @param int    $delivery
     * @param string $date
     * @param Error $error
     */
    public function __construct(
        $profileID,
        $orderID,
        $clientName,
        $status,
        $bank,
        $company,
        $sellerName,
        $product,
        $amount,
        $terms,
        $firstPayment,
        $monthlyAmount,
        $insuranceAmount,
        $otherAmount,
        $rate,
        $smsNotification,
        $rgsType,
        $rgsAmount,
        $rgsContractNumber,
        $authStatus,
        $contractNumber,
        $authCode,
        $delivery,
        $date,
        $error
    ) {
        $this->profileID = $profileID;
        $this->orderID = $orderID;
        $this->clientName = $clientName;
        $this->status = $status;
        $this->bank = $bank;
        $this->company = $company;
        $this->sellerName = $sellerName;
        $this->product = $product;
        $this->amount = $amount;
        $this->terms = $terms;
        $this->firstPayment = $firstPayment;
        $this->monthlyAmount = $monthlyAmount;
        $this->insuranceAmount = $insuranceAmount;
        $this->otherAmount = $otherAmount;
        $this->rate = $rate;
        $this->smsNotification = $smsNotification;
        $this->rgsType = $rgsType;
        $this->rgsAmount = $rgsAmount;
        $this->rgsContractNumber = $rgsContractNumber;
        $this->authStatus = $authStatus;
        $this->contractNumber = $contractNumber;
        $this->authCode = $authCode;
        $this->delivery = $delivery;
        $this->date = $date;
        $this->error = $error;
    }

    /**
     * @return int
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * @param int $profileID
     * @return StatusSelectedOptyResponse
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param string $orderID
     * @return StatusSelectedOptyResponse
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param string $clientName
     * @return StatusSelectedOptyResponse
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return StatusSelectedOptyResponse
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param int $bank
     * @return StatusSelectedOptyResponse
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return StatusSelectedOptyResponse
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * @param string $sellerName
     * @return StatusSelectedOptyResponse
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
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
     * @return StatusSelectedOptyResponse
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmsNotification()
    {
        return $this->smsNotification;
    }

    /**
     * @param int $smsNotification
     * @return StatusSelectedOptyResponse
     */
    public function setSmsNotification($smsNotification)
    {
        $this->smsNotification = $smsNotification;
        return $this;
    }

    /**
     * @return int
     */
    public function getRgsType()
    {
        return $this->rgsType;
    }

    /**
     * @param int $rgsType
     * @return StatusSelectedOptyResponse
     */
    public function setRgsType($rgsType)
    {
        $this->rgsType = $rgsType;
        return $this;
    }

    /**
     * @return float
     */
    public function getRgsAmount()
    {
        return $this->rgsAmount;
    }

    /**
     * @param float $rgsAmount
     * @return StatusSelectedOptyResponse
     */
    public function setRgsAmount($rgsAmount)
    {
        $this->rgsAmount = $rgsAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getRgsContractNumber()
    {
        return $this->rgsContractNumber;
    }

    /**
     * @param string $rgsContractNumber
     * @return StatusSelectedOptyResponse
     */
    public function setRgsContractNumber($rgsContractNumber)
    {
        $this->rgsContractNumber = $rgsContractNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthStatus()
    {
        return $this->authStatus;
    }

    /**
     * @param int $authStatus
     * @return StatusSelectedOptyResponse
     */
    public function setAuthStatus($authStatus)
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * @param string $contractNumber
     * @return StatusSelectedOptyResponse
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return StatusSelectedOptyResponse
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @param int $delivery
     * @return StatusSelectedOptyResponse
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return StatusSelectedOptyResponse
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param Error $error
     * @return StatusSelectedOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
