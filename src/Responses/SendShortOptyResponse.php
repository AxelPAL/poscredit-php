<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;

class SendShortOptyResponse
{

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int   $profileID
     * @param Error $error
     */
    public function __construct($profileID, $error)
    {
        $this->profileID = $profileID;
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
     * @return SendShortOptyResponse
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
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
     * @return SendShortOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
