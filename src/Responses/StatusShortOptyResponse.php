<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;
use AxelPAL\PosCredit\Objects\TransferPayment;

class StatusShortOptyResponse
{
    const STATUS_NEW = 0;                   //новая заявка;
    const STATUS_IN_PROGRESS = 1;           //в обработке;
    const STATUS_DENIED = 2;                //в кредите отказано;
    const STATUS_GRANTED = 3;               //кредит предоставлен;
    const STATUS_ERROR_INPUT = 4;           //ошибочный ввод;
    const STATUS_CLIENT_CANCELLED = 5;      //отказ клиента;
    const STATUS_CONTRACT_AUTHORIZED = 6;   //договор авторизован;
    const STATUS_CONTRACT_SIGNED = 7;       //договор подписан клиентом;

    const BANK_OTP = 1;
    const BANK_RENAISSANCE = 2;
    const BANK_RUS_FINANCE = 3;
    const BANK_RUSSIAN_STANDARD = 4;
    const BANK_WESTERN_EXPRESS = 5;
    const BANK_ALPHA = 6;
    const BANK_LETO = 7;
    const BANK_TINKOFF = 8;
    const BANK_EUROPE = 9;
    const BANK_SETELEM = 10;

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var int $statusID идентификатор статуса
     */
    protected $statusID = null;

    /**
     * @var string $answer Комментарий сотрудника Контакт-центра при обработке заявки
     */
    protected $answer = null;

    /**
     * @var int $bankID идентификатор выбранного банка
     *
     */
    protected $bankID = null;

    /**
     * @var string $document
     * Если status=STATUS_GRANTED, то передается договор в формате Base64 в виде строки
     */
    protected $document = null;

    /**
     * @var float $saleProcent Процент скидки для клиента при рассрочке
     */
    protected $saleProcent = null;

    /**
     * @var float $firstPayment Первоначальный взнос
     */
    protected $firstPayment = null;

    /**
     * @var string $contract Номер банковского договора
     */
    protected $contract = null;

    /**
     * @var float $amount Сумма кредита в рублях
     */
    protected $amount = null;

    /**
     * @var int $creditTerms Срок кредита в месяцах
     */
    protected $creditTerms = null;

    /**
     * @var string $accountNum
     */
    protected $accountNum = null;

    /**
     * @var TransferPayment $transferPayment Блок данных по отправлению платежа за кредит от POS-CREDIT к Партнеру
     */
    protected $transferPayment = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int             $profileID
     * @param int             $statusID
     * @param string          $answer
     * @param int             $bankID
     * @param string          $document
     * @param float           $saleProcent
     * @param float           $firstPayment
     * @param string          $contract
     * @param float           $amount
     * @param int             $creditTerms
     * @param string          $accountNum
     * @param TransferPayment $transferPayment
     * @param string          $authCode
     * @param Error           $error
     */
    public function __construct(
        $profileID,
        $statusID,
        $answer,
        $bankID,
        $document,
        $saleProcent,
        $firstPayment,
        $contract,
        $amount,
        $creditTerms,
        $accountNum,
        $transferPayment,
        $authCode,
        $error
    ) {
        $this->profileID = $profileID;
        $this->statusID = $statusID;
        $this->answer = $answer;
        $this->bankID = $bankID;
        $this->document = $document;
        $this->saleProcent = $saleProcent;
        $this->firstPayment = $firstPayment;
        $this->contract = $contract;
        $this->amount = $amount;
        $this->creditTerms = $creditTerms;
        $this->accountNum = $accountNum;
        $this->transferPayment = $transferPayment;
        $this->authCode = $authCode;
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
     * @return StatusShortOptyResponse
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusID()
    {
        return $this->statusID;
    }

    /**
     * @param int $statusID
     * @return StatusShortOptyResponse
     */
    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     * @return StatusShortOptyResponse
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * @return int
     */
    public function getBankID()
    {
        return $this->bankID;
    }

    /**
     * @param int $bankID
     * @return StatusShortOptyResponse
     */
    public function setBankID($bankID)
    {
        $this->bankID = $bankID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param string $document
     * @return StatusShortOptyResponse
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return float
     */
    public function getSaleProcent()
    {
        return $this->saleProcent;
    }

    /**
     * @param float $saleProcent
     * @return StatusShortOptyResponse
     */
    public function setSaleProcent($saleProcent)
    {
        $this->saleProcent = $saleProcent;
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
     * @return StatusShortOptyResponse
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     * @return StatusShortOptyResponse
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
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
     * @return StatusShortOptyResponse
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditTerms()
    {
        return $this->creditTerms;
    }

    /**
     * @param int $creditTerms
     * @return StatusShortOptyResponse
     */
    public function setCreditTerms($creditTerms)
    {
        $this->creditTerms = $creditTerms;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNum()
    {
        return $this->accountNum;
    }

    /**
     * @param string $accountNum
     * @return StatusShortOptyResponse
     */
    public function setAccountNum($accountNum)
    {
        $this->accountNum = $accountNum;
        return $this;
    }

    /**
     * @return TransferPayment
     */
    public function getTransferPayment()
    {
        return $this->transferPayment;
    }

    /**
     * @param TransferPayment $transferPayment
     * @return StatusShortOptyResponse
     */
    public function setTransferPayment($transferPayment)
    {
        $this->transferPayment = $transferPayment;
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
     * @return StatusShortOptyResponse
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
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
     * @return StatusShortOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
