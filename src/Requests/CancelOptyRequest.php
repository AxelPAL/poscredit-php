<?php

namespace AxelPAL\PosCredit\Requests;

class CancelOptyRequest
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
     * @var int $acceptBank
     */
    protected $acceptBank = null;

    /**
     * @param int    $userID
     * @param string $userToken
     * @param int    $profileID
     * @param int    $acceptBank
     */
    public function __construct($userID, $userToken, $profileID, $acceptBank)
    {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->profileID = $profileID;
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
     * @return CancelOptyRequest
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
     * @return CancelOptyRequest
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
     * @return CancelOptyRequest
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
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
     * @return CancelOptyRequest
     */
    public function setAcceptBank($acceptBank)
    {
        $this->acceptBank = $acceptBank;
        return $this;
    }
}
