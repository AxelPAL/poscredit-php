<?php

namespace AxelPAL\PosCredit\Requests;

class SignDeliveryOptyRequest
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
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var int $deliveryType
     */
    protected $deliveryType = null;

    /**
     * @var string $deliveryAddress
     */
    protected $deliveryAddress = null;

    /**
     * @var int $deliveryTime
     */
    protected $deliveryTime = null;

    /**
     * @var int $acceptBank
     */
    protected $acceptBank = null;

    /**
     * @param int    $userID
     * @param string $userToken
     * @param int    $profileID
     * @param int    $deliveryType
     * @param string $deliveryAddress
     * @param int    $deliveryTime
     * @param int    $acceptBank
     */
    public function __construct(
        $userID,
        $userToken,
        $profileID,
        $deliveryType,
        $deliveryAddress,
        $deliveryTime,
        $acceptBank
    ) {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->profileID = $profileID;
        $this->deliveryType = $deliveryType;
        $this->deliveryAddress = $deliveryAddress;
        $this->deliveryTime = $deliveryTime;
        $this->acceptBank = $acceptBank;
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
     * @return SignDeliveryOptyRequest
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
     * @return SignDeliveryOptyRequest
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
        return $this;
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
     * @return SignDeliveryOptyRequest
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param int $deliveryType
     * @return SignDeliveryOptyRequest
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param string $deliveryAddress
     * @return SignDeliveryOptyRequest
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param int $deliveryTime
     * @return SignDeliveryOptyRequest
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getAcceptBank()
    {
        return $this->acceptBank;
    }

    /**
     * @param int $acceptBank
     * @return SignDeliveryOptyRequest
     */
    public function setAcceptBank($acceptBank)
    {
        $this->acceptBank = $acceptBank;
        return $this;
    }
}
