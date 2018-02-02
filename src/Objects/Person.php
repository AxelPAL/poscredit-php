<?php

namespace AxelPAL\PosCredit\Objects;

class Person
{

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $surName
     */
    protected $surName = null;

    /**
     * @var string $occupation
     */
    protected $occupation = null;

    /**
     * @var string $workName
     */
    protected $workName = null;

    /**
     * @var string $birthDate
     */
    protected $birthDate = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @param string $lastName
     * @param string $firstName
     * @param string $surName
     */
    public function __construct($lastName, $firstName, $surName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->surName = $surName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param string $surName
     * @return Person
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     * @return Person
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkName()
    {
        return $this->workName;
    }

    /**
     * @param string $workName
     * @return Person
     */
    public function setWorkName($workName)
    {
        $this->workName = $workName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return Person
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }
}
