<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;

class SignDocShortOptyResponse
{

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var string $result
     */
    protected $result = null;

    /**
     * @var int $statusID
     */
    protected $statusID = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int    $profileID
     * @param string $result
     * @param int    $statusID
     * @param Error $error
     */
    public function __construct($profileID, $result, $statusID, $error)
    {
        $this->profileID = $profileID;
        $this->result = $result;
        $this->statusID = $statusID;
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
     * @return SignDocShortOptyResponse
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return SignDocShortOptyResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
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
     * @return SignDocShortOptyResponse
     */
    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;
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
     * @return SignDocShortOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
