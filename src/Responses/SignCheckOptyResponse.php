<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\ClientScans;
use AxelPAL\PosCredit\Objects\Error;

class SignCheckOptyResponse
{

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
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var string $carNumber
     */
    protected $carNumber = null;

    /**
     * @var string $clientPhoto
     */
    protected $clientPhoto = null;

    /**
     * @var ClientScans $clientScans
     */
    protected $clientScans = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int         $profileID
     * @param int         $deliveryType
     * @param string      $deliveryAddress
     * @param int         $deliveryTime
     * @param string      $status
     * @param string      $mobilePhone
     * @param string      $carNumber
     * @param string      $clientPhoto
     * @param ClientScans $clientScans
     * @param Error       $error
     */
    public function __construct(
        $profileID,
        $deliveryType,
        $deliveryAddress,
        $deliveryTime,
        $status,
        $mobilePhone,
        $carNumber,
        $clientPhoto,
        $clientScans,
        $error
    ) {
        $this->profileID = $profileID;
        $this->deliveryType = $deliveryType;
        $this->deliveryAddress = $deliveryAddress;
        $this->deliveryTime = $deliveryTime;
        $this->status = $status;
        $this->mobilePhone = $mobilePhone;
        $this->carNumber = $carNumber;
        $this->clientPhoto = $clientPhoto;
        $this->clientScans = $clientScans;
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
     * @return SignCheckOptyResponse
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
     * @return SignCheckOptyResponse
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
     * @return SignCheckOptyResponse
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
     * @return SignCheckOptyResponse
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return SignCheckOptyResponse
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
     * @return SignCheckOptyResponse
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }

    /**
     * @param string $carNumber
     * @return SignCheckOptyResponse
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber = $carNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientPhoto()
    {
        return $this->clientPhoto;
    }

    /**
     * @param string $clientPhoto
     * @return SignCheckOptyResponse
     */
    public function setClientPhoto($clientPhoto)
    {
        $this->clientPhoto = $clientPhoto;
        return $this;
    }

    /**
     * @return ClientScans
     */
    public function getClientScans()
    {
        return $this->clientScans;
    }

    /**
     * @param ClientScans $clientScans
     * @return SignCheckOptyResponse
     */
    public function setClientScans($clientScans)
    {
        $this->clientScans = $clientScans;
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
     * @return SignCheckOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
