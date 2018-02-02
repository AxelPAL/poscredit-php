<?php

namespace AxelPAL\PosCredit\Objects;

class Result
{

    /**
     * @var int $bank
     */
    protected $bank = null;

    /**
     * @var int $decision
     */
    protected $decision = null;

    /**
     * @var int $selectedVariant
     */
    protected $selectedVariant = null;

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
     * @var int $requestCancel
     */
    protected $requestCancel = null;

    /**
     * @var int $authCancel
     */
    protected $authCancel = null;

    /**
     * @var Offer[] $offer
     */
    protected $offer = null;

    /**
     * @param int $bank
     * @param int $decision
     * @param int $authStatus
     * @param int $requestCancel
     * @param int $authCancel
     */
    public function __construct($bank, $decision, $authStatus, $requestCancel, $authCancel)
    {
        $this->bank = $bank;
        $this->decision = $decision;
        $this->authStatus = $authStatus;
        $this->requestCancel = $requestCancel;
        $this->authCancel = $authCancel;
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
     * @return Result
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return int
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * @param int $decision
     * @return Result
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;
        return $this;
    }

    /**
     * @return int
     */
    public function getSelectedVariant()
    {
        return $this->selectedVariant;
    }

    /**
     * @param int $selectedVariant
     * @return Result
     */
    public function setSelectedVariant($selectedVariant)
    {
        $this->selectedVariant = $selectedVariant;
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
     * @return Result
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
     * @return Result
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
     * @return Result
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequestCancel()
    {
        return $this->requestCancel;
    }

    /**
     * @param int $requestCancel
     * @return Result
     */
    public function setRequestCancel($requestCancel)
    {
        $this->requestCancel = $requestCancel;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthCancel()
    {
        return $this->authCancel;
    }

    /**
     * @param int $authCancel
     * @return Result
     */
    public function setAuthCancel($authCancel)
    {
        $this->authCancel = $authCancel;
        return $this;
    }

    /**
     * @return Offer[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param Offer[] $offer
     * @return Result
     */
    public function setOffer(array $offer = null)
    {
        $this->offer = $offer;
        return $this;
    }
}
