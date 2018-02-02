<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;

class AcceptOptyResponse
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
     * @var string $contract
     */
    protected $contract = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int    $profileID
     * @param int    $success
     * @param string $contract
     * @param Error  $error
     */
    public function __construct($profileID, $success, $contract, $error)
    {
        $this->profileID = $profileID;
        $this->success = $success;
        $this->contract = $contract;
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
     * @return AcceptOptyResponse
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
     * @return AcceptOptyResponse
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     * @return AcceptOptyResponse
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
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
     * @return AcceptOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
