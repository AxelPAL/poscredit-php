<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;

class CancelAuthOptyResponse
{

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var int $success
     */
    protected $success = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int   $profileID
     * @param int   $success
     * @param Error $error
     */
    public function __construct($profileID, $success, $error)
    {
        $this->profileID = $profileID;
        $this->success = $success;
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
     * @return CancelAuthOptyResponse
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param int $success
     * @return CancelAuthOptyResponse
     */
    public function setSuccess($success)
    {
        $this->success = $success;
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
     * @return CancelAuthOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
