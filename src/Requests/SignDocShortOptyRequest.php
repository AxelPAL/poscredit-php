<?php

namespace AxelPAL\PosCredit\Requests;

use AxelPAL\PosCredit\Objects\Documents;

class SignDocShortOptyRequest
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
     * @var int $signStatus
     */
    protected $signStatus = null;

    /**
     * @var Documents $documents
     */
    protected $documents = null;

    /**
     * @param int       $userID
     * @param string    $userToken
     * @param int       $profileID
     * @param int       $signStatus
     * @param Documents $documents
     */
    public function __construct($userID, $userToken, $profileID, $signStatus, $documents)
    {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->profileID = $profileID;
        $this->signStatus = $signStatus;
        $this->documents = $documents;
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
     * @return SignDocShortOptyRequest
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
     * @return SignDocShortOptyRequest
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
     * @return SignDocShortOptyRequest
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSignStatus()
    {
        return $this->signStatus;
    }

    /**
     * @param int $signStatus
     * @return SignDocShortOptyRequest
     */
    public function setSignStatus($signStatus)
    {
        $this->signStatus = $signStatus;
        return $this;
    }

    /**
     * @return Documents
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param Documents $documents
     * @return SignDocShortOptyRequest
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }
}
