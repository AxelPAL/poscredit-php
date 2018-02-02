<?php

/**
 * @package AxelPAL\PosCredit
 * @author Alexander Palchikov <axelpal@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace AxelPAL\PosCredit\Requests;

/**
 * Class AcceptOptyRequest
 *
 * @package PosCredit
 * @author Alexander Palchikov <axelpal@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class AcceptOptyRequest
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
     * @var string $acceptVariant
     */
    protected $acceptVariant = null;

    /**
     * @param int    $userID
     * @param string $userToken
     * @param int    $profileID
     * @param int    $acceptBank
     * @param string $acceptVariant
     */
    public function __construct($userID, $userToken, $profileID, $acceptBank, $acceptVariant)
    {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->profileID = $profileID;
        $this->acceptBank = $acceptBank;
        $this->acceptVariant = $acceptVariant;
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
     * @return AcceptOptyRequest
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
     * @return AcceptOptyRequest
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
     * @return AcceptOptyRequest
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
     * @return AcceptOptyRequest
     */
    public function setAcceptBank($acceptBank)
    {
        $this->acceptBank = $acceptBank;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcceptVariant()
    {
        return $this->acceptVariant;
    }

    /**
     * @param string $acceptVariant
     * @return AcceptOptyRequest
     */
    public function setAcceptVariant($acceptVariant)
    {
        $this->acceptVariant = $acceptVariant;
        return $this;
    }
}
