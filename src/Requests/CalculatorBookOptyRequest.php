<?php

namespace AxelPAL\PosCredit\Requests;

use AxelPAL\PosCredit\Objects\Banks;
use AxelPAL\PosCredit\Objects\Services;

class CalculatorBookOptyRequest
{
    /**
     * @var int $userID
     */
    protected $userID = null;

    /**
     * @var string $userToken
     */
    protected $userToken = null;

    /**
     * @var string $target
     */
    protected $target = 'API';
    /**
     * @var string $target
     */
    protected $operation = 'CalculatorBookOpty';

    /**
     * @var float $goodsAmount
     */
    protected $goodsAmount = null;

    /**
     * @var float $firstAmount
     */
    protected $firstAmount = null;

    /**
     * @var int $creditTerm
     */
    protected $creditTerm = null;

    /**
     * @var int $creditType
     */
    protected $creditType = null;
    /**
     * @var Banks $selectedBanks
     */
    protected $selectedBanks = null;
    /**
     * @var Services $selectedServices
     */
    protected $selectedServices = null;

    /**
     * @param int $userID
     * @param string $userToken
     * @param string $target
     * @param string $operation
     * @param float $goodsAmount
     * @param float $firstAmount
     * @param int $creditTerm
     * @param int $creditType
     * @param Banks|array $selectedBanks
     * @param Services|array $selectedServices
     */
    public function __construct(
        $userID,
        $userToken,
        $target,
        $operation,
        $goodsAmount,
        $firstAmount,
        $creditTerm,
        $creditType,
        $selectedBanks,
        $selectedServices
    ) {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->target = $target;
        $this->operation = $operation;
        $this->goodsAmount = $goodsAmount;
        $this->firstAmount = $firstAmount;
        $this->creditTerm = $creditTerm;
        $this->creditType = $creditType;
        $this->selectedBanks = $selectedBanks;
        $this->selectedServices = $selectedServices;
    }

    /**
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param int $userID
     * @return CalculatorBookOptyRequest
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserToken()
    {
        return $this->userToken;
    }

    /**
     * @param string $userToken
     * @return CalculatorBookOptyRequest
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     * @return CalculatorBookOptyRequest
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     * @return CalculatorBookOptyRequest
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoodsAmount()
    {
        return $this->goodsAmount;
    }

    /**
     * @param float $goodsAmount
     * @return CalculatorBookOptyRequest
     */
    public function setGoodsAmount($goodsAmount)
    {
        $this->goodsAmount = $goodsAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstAmount()
    {
        return $this->firstAmount;
    }

    /**
     * @param float $firstAmount
     * @return CalculatorBookOptyRequest
     */
    public function setFirstAmount($firstAmount)
    {
        $this->firstAmount = $firstAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditTerm()
    {
        return $this->creditTerm;
    }

    /**
     * @param int $creditTerm
     * @return CalculatorBookOptyRequest
     */
    public function setCreditTerm($creditTerm)
    {
        $this->creditTerm = $creditTerm;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditType()
    {
        return $this->creditType;
    }

    /**
     * @param int $creditType
     * @return CalculatorBookOptyRequest
     */
    public function setCreditType($creditType)
    {
        $this->creditType = $creditType;
        return $this;
    }

    /**
     * @return Banks
     */
    public function getSelectedBanks()
    {
        return $this->selectedBanks;
    }

    /**
     * @param Banks $banks
     * @return CalculatorBookOptyRequest
     */
    public function setSelectedBanks($banks)
    {
        $this->selectedBanks = $banks;
        return $this;
    }

    /**
     * @return Services
     */
    public function getSelectedServices()
    {
        return $this->selectedServices;
    }

    /**
     * @param Services $selectedServices
     * @return CalculatorBookOptyRequest
     */
    public function setSelectedServices($selectedServices)
    {
        $this->selectedServices = $selectedServices;
        return $this;
    }
}
