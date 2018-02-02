<?php

namespace AxelPAL\PosCredit\Requests;

class StatusSelectedOptyRequest
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
     * @var string $orderID
     */
    protected $orderID = null;

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @param int    $userID
     * @param string $userToken
     * @param string $orderID
     * @param int    $profileID
     */
    public function __construct($userID, $userToken, $orderID, $profileID)
    {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->orderID = $orderID;
        $this->profileID = $profileID;
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
     * @return StatusSelectedOptyRequest
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
     * @return StatusSelectedOptyRequest
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
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
     * @return StatusSelectedOptyRequest
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
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
     * @return StatusSelectedOptyRequest
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }
}
