<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;

class AuthOptyResponse
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
     * @var string $agreementNumber
     */
    protected $agreementNumber = null;

    /**
     * @var string $authCode
     */
    protected $authCode = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int    $profileID
     * @param int    $success
     * @param string $agreementNumber
     * @param string $authCode
     * @param Error $error
     */
    public function __construct($profileID, $success, $agreementNumber, $authCode, $error)
    {
        $this->profileID = $profileID;
        $this->success = $success;
        $this->agreementNumber = $agreementNumber;
        $this->authCode = $authCode;
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
     * @return AuthOptyResponse
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
     * @return AuthOptyResponse
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreementNumber()
    {
        return $this->agreementNumber;
    }

    /**
     * @param string $agreementNumber
     * @return AuthOptyResponse
     */
    public function setAgreementNumber($agreementNumber)
    {
        $this->agreementNumber = $agreementNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return AuthOptyResponse
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
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
     * @return AuthOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
