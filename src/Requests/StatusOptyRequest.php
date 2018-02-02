<?php

namespace AxelPAL\PosCredit\Requests;

class StatusOptyRequest
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
     * @param int    $userID
     * @param string $userToken
     * @param int    $profileID
     */
    public function __construct($userID, $userToken, $profileID)
    {
        $this->userID = $userID;
        $this->userToken = $userToken;
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
     * @return StatusOptyRequest
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
     * @return StatusOptyRequest
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
     * @return StatusOptyRequest
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }
}
