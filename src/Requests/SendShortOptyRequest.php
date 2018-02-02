<?php

namespace AxelPAL\PosCredit\Requests;

use AxelPAL\PosCredit\Objects\GoodParams;

class SendShortOptyRequest
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
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $surName
     */
    protected $surName = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var float $firstPayment
     */
    protected $firstPayment = null;

    /**
     * @var string $passport
     */
    protected $passport = null;

    /**
     * @var int $period
     */
    protected $period = null;

    /**
     * @var string $requestID
     */
    protected $requestID = null;

    /**
     * @var int $tradeID
     */
    protected $tradeID = null;

    /**
     * @var int $creditCondition
     */
    protected $creditCondition = null;

    /**
     * @var GoodParams $goodParams
     */
    protected $goodParams = null;

    /**
     * @param int        $userID
     * @param string     $userToken
     * @param string     $lastName
     * @param string     $firstName
     * @param string     $surName
     * @param string     $mobilePhone
     * @param string     $comment
     * @param float      $firstPayment
     * @param string     $passport
     * @param int        $period
     * @param string     $requestID
     * @param int        $tradeID
     * @param int        $creditCondition
     * @param GoodParams $goodParams
     */
    public function __construct(
        $userID,
        $userToken,
        $lastName,
        $firstName,
        $surName,
        $mobilePhone,
        $comment,
        $firstPayment,
        $passport,
        $period,
        $requestID,
        $tradeID,
        $creditCondition,
        $goodParams
    ) {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->mobilePhone = $mobilePhone;
        $this->comment = $comment;
        $this->firstPayment = $firstPayment;
        $this->passport = $passport;
        $this->period = $period;
        $this->requestID = $requestID;
        $this->tradeID = $tradeID;
        $this->creditCondition = $creditCondition;
        $this->goodParams = $goodParams;
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
     * @return SendShortOptyRequest
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
     * @return SendShortOptyRequest
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return SendShortOptyRequest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return SendShortOptyRequest
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param string $surName
     * @return SendShortOptyRequest
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return SendShortOptyRequest
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return SendShortOptyRequest
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
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
     * @return SendShortOptyRequest
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param string $passport
     * @return SendShortOptyRequest
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param int $period
     * @return SendShortOptyRequest
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * @param string $requestID
     * @return SendShortOptyRequest
     */
    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTradeID()
    {
        return $this->tradeID;
    }

    /**
     * @param int $tradeID
     * @return SendShortOptyRequest
     */
    public function setTradeID($tradeID)
    {
        $this->tradeID = $tradeID;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditCondition()
    {
        return $this->creditCondition;
    }

    /**
     * @param int $creditCondition
     * @return SendShortOptyRequest
     */
    public function setCreditCondition($creditCondition)
    {
        $this->creditCondition = $creditCondition;
        return $this;
    }

    /**
     * @return GoodParams
     */
    public function getGoodParams()
    {
        return $this->goodParams;
    }

    /**
     * @param GoodParams $goodParams
     * @return SendShortOptyRequest
     */
    public function setGoodParams($goodParams)
    {
        $this->goodParams = $goodParams;
        return $this;
    }
}
