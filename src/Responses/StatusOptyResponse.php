<?php

namespace AxelPAL\PosCredit\Responses;

use AxelPAL\PosCredit\Objects\Error;
use AxelPAL\PosCredit\Objects\Results;

class StatusOptyResponse
{

    /**
     * @var int $profileID
     */
    protected $profileID = null;

    /**
     * @var Results $results
     */
    protected $results = null;

    /**
     * @var Error $error
     */
    protected $error = null;

    /**
     * @param int     $profileID
     * @param Results $results
     * @param Error   $error
     */
    public function __construct($profileID, $results, $error)
    {
        $this->profileID = $profileID;
        $this->results = $results;
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
     * @return StatusOptyResponse
     */
    public function setProfileID($profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * @return Results
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Results $results
     * @return StatusOptyResponse
     */
    public function setResults($results)
    {
        $this->results = $results;
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
     * @return StatusOptyResponse
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
