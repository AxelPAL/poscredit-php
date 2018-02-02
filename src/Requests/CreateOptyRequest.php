<?php

namespace AxelPAL\PosCredit\Requests;

use AxelPAL\PosCredit\Objects\Address;
use AxelPAL\PosCredit\Objects\Banks;
use AxelPAL\PosCredit\Objects\Car;
use AxelPAL\PosCredit\Objects\EducationList;
use AxelPAL\PosCredit\Objects\Goods;
use AxelPAL\PosCredit\Objects\Person;
use AxelPAL\PosCredit\Objects\Services;

class CreateOptyRequest
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
     * @var Banks $selectedBanks
     */
    protected $selectedBanks = null;

    /**
     * @var Services $selectedServices
     */
    protected $selectedServices = null;

    /**
     * @var float $firstPayment
     */
    protected $firstPayment = null;

    /**
     * @var int $duration
     */
    protected $duration = null;

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
     * @var int $nameChanged
     */
    protected $nameChanged = null;

    /**
     * @var string $nameChangedOld
     */
    protected $nameChangedOld = null;

    /**
     * @var int $sex
     */
    protected $sex = null;

    /**
     * @var string $birthPlace
     */
    protected $birthPlace = null;

    /**
     * @var string $birthDate
     */
    protected $birthDate = null;

    /**
     * @var int $educationID
     */
    protected $educationID = null;

    /**
     * @var EducationList $educationList
     */
    protected $educationList = null;

    /**
     * @var int $familyStatus
     */
    protected $familyStatus = null;

    /**
     * @var int $childrens
     */
    protected $childrens = null;

    /**
     * @var int $dependents
     */
    protected $dependents = null;

    /**
     * @var Person $spouce
     */
    protected $spouce = null;

    /**
     * @var string $docSerial
     */
    protected $docSerial = null;

    /**
     * @var string $docNumber
     */
    protected $docNumber = null;

    /**
     * @var string $docIssuirer
     */
    protected $docIssuirer = null;

    /**
     * @var string $docDate
     */
    protected $docDate = null;

    /**
     * @var string $docCode
     */
    protected $docCode = null;

    /**
     * @var string $workPhone
     */
    protected $workPhone = null;

    /**
     * @var string $homePhone
     */
    protected $homePhone = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var Person $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var Address $regAddress
     */
    protected $regAddress = null;

    /**
     * @var int $postMatch
     */
    protected $postMatch = null;

    /**
     * @var Address $postAddress
     */
    protected $postAddress = null;

    /**
     * @var int $pensioner
     */
    protected $pensioner = null;

    /**
     * @var int $workType
     */
    protected $workType = null;

    /**
     * @var string $workName
     */
    protected $workName = null;

    /**
     * @var int $workBranch
     */
    protected $workBranch = null;

    /**
     * @var int $workType1
     */
    protected $workType1 = null;

    /**
     * @var int $workType2
     */
    protected $workType2 = null;

    /**
     * @var int $workType3
     */
    protected $workType3 = null;

    /**
     * @var int $workField
     */
    protected $workField = null;

    /**
     * @var int $workPosition
     */
    protected $workPosition = null;

    /**
     * @var int $workFieldTime
     */
    protected $workFieldTime = null;

    /**
     * @var int $workTime
     */
    protected $workTime = null;

    /**
     * @var Address $workAddress
     */
    protected $workAddress = null;

    /**
     * @var int $additionalDoc
     */
    protected $additionalDoc = null;

    /**
     * @var string $additionalDocName
     */
    protected $additionalDocName = null;

    /**
     * @var int $isHome
     */
    protected $isHome = null;

    /**
     * @var int $isFlat
     */
    protected $isFlat = null;

    /**
     * @var int $isVilla
     */
    protected $isVilla = null;

    /**
     * @var int $isEstate
     */
    protected $isEstate = null;

    /**
     * @var int $isGarage
     */
    protected $isGarage = null;

    /**
     * @var int $isVehicle
     */
    protected $isVehicle = null;

    /**
     * @var Car $carProperty
     */
    protected $carProperty = null;

    /**
     * @var float $priceMonth
     */
    protected $priceMonth = null;

    /**
     * @var float $otherIncome
     */
    protected $otherIncome = null;

    /**
     * @var float $priceFamily
     */
    protected $priceFamily = null;

    /**
     * @var int $isSalary
     */
    protected $isSalary = null;

    /**
     * @var int $isBusiness
     */
    protected $isBusiness = null;

    /**
     * @var int $isRent
     */
    protected $isRent = null;

    /**
     * @var int $isStudent
     */
    protected $isStudent = null;

    /**
     * @var int $isPension
     */
    protected $isPension = null;

    /**
     * @var int $isOtherPrice
     */
    protected $isOtherPrice = null;

    /**
     * @var string $codeWord
     */
    protected $codeWord = null;

    /**
     * @var Goods $goodsProperty
     */
    protected $goodsProperty = null;

    /**
     * @var string $photo
     */
    protected $photo = null;

    /**
     * @var string $orderID
     */
    protected $orderID = null;

    /**
     * @var int $tradeID
     */
    protected $tradeID = null;

    /**
     * @param int           $userID
     * @param string        $userToken
     * @param Banks         $selectedBanks
     * @param Services      $selectedServices
     * @param float         $firstPayment
     * @param int           $duration
     * @param string        $lastName
     * @param string        $firstName
     * @param string        $surName
     * @param int           $nameChanged
     * @param string        $nameChangedOld
     * @param int           $sex
     * @param string        $birthPlace
     * @param string        $birthDate
     * @param int           $educationID
     * @param EducationList $educationList
     * @param int           $familyStatus
     * @param int           $childrens
     * @param int           $dependents
     * @param Person        $spouce
     * @param string        $docSerial
     * @param string        $docNumber
     * @param string        $docIssuirer
     * @param string        $docDate
     * @param string        $docCode
     * @param string        $workPhone
     * @param string        $homePhone
     * @param string        $mobilePhone
     * @param Person        $contactPerson
     * @param string        $email
     * @param Address       $regAddress
     * @param int           $postMatch
     * @param Address       $postAddress
     * @param int           $pensioner
     * @param int           $workType
     * @param string        $workName
     * @param int           $workBranch
     * @param int           $workType1
     * @param int           $workType2
     * @param int           $workType3
     * @param int           $workField
     * @param int           $workPosition
     * @param int           $workFieldTime
     * @param int           $workTime
     * @param Address       $workAddress
     * @param int           $additionalDoc
     * @param string        $additionalDocName
     * @param int           $isHome
     * @param int           $isFlat
     * @param int           $isVilla
     * @param int           $isEstate
     * @param int           $isGarage
     * @param int           $isVehicle
     * @param Car           $carProperty
     * @param float         $priceMonth
     * @param float         $otherIncome
     * @param float         $priceFamily
     * @param int           $isSalary
     * @param int           $isBusiness
     * @param int           $isRent
     * @param int           $isStudent
     * @param int           $isPension
     * @param int           $isOtherPrice
     * @param string        $codeWord
     * @param Goods         $goodsProperty
     * @param string        $photo
     * @param string        $orderID
     * @param int           $tradeID
     */
    public function __construct(
        $userID,
        $userToken,
        $selectedBanks,
        $selectedServices,
        $firstPayment,
        $duration,
        $lastName,
        $firstName,
        $surName,
        $nameChanged,
        $nameChangedOld,
        $sex,
        $birthPlace,
        $birthDate,
        $educationID,
        $educationList,
        $familyStatus,
        $childrens,
        $dependents,
        $spouce,
        $docSerial,
        $docNumber,
        $docIssuirer,
        $docDate,
        $docCode,
        $workPhone,
        $homePhone,
        $mobilePhone,
        $contactPerson,
        $email,
        $regAddress,
        $postMatch,
        $postAddress,
        $pensioner,
        $workType,
        $workName,
        $workBranch,
        $workType1,
        $workType2,
        $workType3,
        $workField,
        $workPosition,
        $workFieldTime,
        $workTime,
        $workAddress,
        $additionalDoc,
        $additionalDocName,
        $isHome,
        $isFlat,
        $isVilla,
        $isEstate,
        $isGarage,
        $isVehicle,
        $carProperty,
        $priceMonth,
        $otherIncome,
        $priceFamily,
        $isSalary,
        $isBusiness,
        $isRent,
        $isStudent,
        $isPension,
        $isOtherPrice,
        $codeWord,
        $goodsProperty,
        $photo,
        $orderID,
        $tradeID
    ) {
        $this->userID = $userID;
        $this->userToken = $userToken;
        $this->selectedBanks = $selectedBanks;
        $this->selectedServices = $selectedServices;
        $this->firstPayment = $firstPayment;
        $this->duration = $duration;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->surName = $surName;
        $this->nameChanged = $nameChanged;
        $this->nameChangedOld = $nameChangedOld;
        $this->sex = $sex;
        $this->birthPlace = $birthPlace;
        $this->birthDate = $birthDate;
        $this->educationID = $educationID;
        $this->educationList = $educationList;
        $this->familyStatus = $familyStatus;
        $this->childrens = $childrens;
        $this->dependents = $dependents;
        $this->spouce = $spouce;
        $this->docSerial = $docSerial;
        $this->docNumber = $docNumber;
        $this->docIssuirer = $docIssuirer;
        $this->docDate = $docDate;
        $this->docCode = $docCode;
        $this->workPhone = $workPhone;
        $this->homePhone = $homePhone;
        $this->mobilePhone = $mobilePhone;
        $this->contactPerson = $contactPerson;
        $this->email = $email;
        $this->regAddress = $regAddress;
        $this->postMatch = $postMatch;
        $this->postAddress = $postAddress;
        $this->pensioner = $pensioner;
        $this->workType = $workType;
        $this->workName = $workName;
        $this->workBranch = $workBranch;
        $this->workType1 = $workType1;
        $this->workType2 = $workType2;
        $this->workType3 = $workType3;
        $this->workField = $workField;
        $this->workPosition = $workPosition;
        $this->workFieldTime = $workFieldTime;
        $this->workTime = $workTime;
        $this->workAddress = $workAddress;
        $this->additionalDoc = $additionalDoc;
        $this->additionalDocName = $additionalDocName;
        $this->isHome = $isHome;
        $this->isFlat = $isFlat;
        $this->isVilla = $isVilla;
        $this->isEstate = $isEstate;
        $this->isGarage = $isGarage;
        $this->isVehicle = $isVehicle;
        $this->carProperty = $carProperty;
        $this->priceMonth = $priceMonth;
        $this->otherIncome = $otherIncome;
        $this->priceFamily = $priceFamily;
        $this->isSalary = $isSalary;
        $this->isBusiness = $isBusiness;
        $this->isRent = $isRent;
        $this->isStudent = $isStudent;
        $this->isPension = $isPension;
        $this->isOtherPrice = $isOtherPrice;
        $this->codeWord = $codeWord;
        $this->goodsProperty = $goodsProperty;
        $this->photo = $photo;
        $this->orderID = $orderID;
        $this->tradeID = $tradeID;
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
     * @return CreateOptyRequest
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
     * @return CreateOptyRequest
     */
    public function setUserToken($userToken)
    {
        $this->userToken = $userToken;
        return $this;
    }

    /**
     * @return Banks
     */
    public function getSelectedBanks()
    {
        return $this->selectedBanks;
    }

    /**
     * @param Banks $selectedBanks
     * @return CreateOptyRequest
     */
    public function setSelectedBanks($selectedBanks)
    {
        $this->selectedBanks = $selectedBanks;
        return $this;
    }

    /**
     * @return Services
     */
    public function getSelectedServices()
    {
        return $this->selectedServices;
    }

    /**
     * @param Services $selectedServices
     * @return CreateOptyRequest
     */
    public function setSelectedServices($selectedServices)
    {
        $this->selectedServices = $selectedServices;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstPayment()
    {
        return $this->firstPayment;
    }

    /**
     * @param float $firstPayment
     * @return CreateOptyRequest
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return CreateOptyRequest
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
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
     * @return CreateOptyRequest
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
     * @return CreateOptyRequest
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
     * @return CreateOptyRequest
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }

    /**
     * @return int
     */
    public function getNameChanged()
    {
        return $this->nameChanged;
    }

    /**
     * @param int $nameChanged
     * @return CreateOptyRequest
     */
    public function setNameChanged($nameChanged)
    {
        $this->nameChanged = $nameChanged;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameChangedOld()
    {
        return $this->nameChangedOld;
    }

    /**
     * @param string $nameChangedOld
     * @return CreateOptyRequest
     */
    public function setNameChangedOld($nameChangedOld)
    {
        $this->nameChangedOld = $nameChangedOld;
        return $this;
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     * @return CreateOptyRequest
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param string $birthPlace
     * @return CreateOptyRequest
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
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
     * @return CreateOptyRequest
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getEducationID()
    {
        return $this->educationID;
    }

    /**
     * @param int $educationID
     * @return CreateOptyRequest
     */
    public function setEducationID($educationID)
    {
        $this->educationID = $educationID;
        return $this;
    }

    /**
     * @return EducationList
     */
    public function getEducationList()
    {
        return $this->educationList;
    }

    /**
     * @param EducationList $educationList
     * @return CreateOptyRequest
     */
    public function setEducationList($educationList)
    {
        $this->educationList = $educationList;
        return $this;
    }

    /**
     * @return int
     */
    public function getFamilyStatus()
    {
        return $this->familyStatus;
    }

    /**
     * @param int $familyStatus
     * @return CreateOptyRequest
     */
    public function setFamilyStatus($familyStatus)
    {
        $this->familyStatus = $familyStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildrens()
    {
        return $this->childrens;
    }

    /**
     * @param int $childrens
     * @return CreateOptyRequest
     */
    public function setChildrens($childrens)
    {
        $this->childrens = $childrens;
        return $this;
    }

    /**
     * @return int
     */
    public function getDependents()
    {
        return $this->dependents;
    }

    /**
     * @param int $dependents
     * @return CreateOptyRequest
     */
    public function setDependents($dependents)
    {
        $this->dependents = $dependents;
        return $this;
    }

    /**
     * @return Person
     */
    public function getSpouce()
    {
        return $this->spouce;
    }

    /**
     * @param Person $spouce
     * @return CreateOptyRequest
     */
    public function setSpouce($spouce)
    {
        $this->spouce = $spouce;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocSerial()
    {
        return $this->docSerial;
    }

    /**
     * @param string $docSerial
     * @return CreateOptyRequest
     */
    public function setDocSerial($docSerial)
    {
        $this->docSerial = $docSerial;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocNumber()
    {
        return $this->docNumber;
    }

    /**
     * @param string $docNumber
     * @return CreateOptyRequest
     */
    public function setDocNumber($docNumber)
    {
        $this->docNumber = $docNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocIssuirer()
    {
        return $this->docIssuirer;
    }

    /**
     * @param string $docIssuirer
     * @return CreateOptyRequest
     */
    public function setDocIssuirer($docIssuirer)
    {
        $this->docIssuirer = $docIssuirer;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocDate()
    {
        return $this->docDate;
    }

    /**
     * @param string $docDate
     * @return CreateOptyRequest
     */
    public function setDocDate($docDate)
    {
        $this->docDate = $docDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocCode()
    {
        return $this->docCode;
    }

    /**
     * @param string $docCode
     * @return CreateOptyRequest
     */
    public function setDocCode($docCode)
    {
        $this->docCode = $docCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * @param string $workPhone
     * @return CreateOptyRequest
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * @param string $homePhone
     * @return CreateOptyRequest
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
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
     * @return CreateOptyRequest
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return Person
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param Person $contactPerson
     * @return CreateOptyRequest
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CreateOptyRequest
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return Address
     */
    public function getRegAddress()
    {
        return $this->regAddress;
    }

    /**
     * @param Address $regAddress
     * @return CreateOptyRequest
     */
    public function setRegAddress($regAddress)
    {
        $this->regAddress = $regAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostMatch()
    {
        return $this->postMatch;
    }

    /**
     * @param int $postMatch
     * @return CreateOptyRequest
     */
    public function setPostMatch($postMatch)
    {
        $this->postMatch = $postMatch;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPostAddress()
    {
        return $this->postAddress;
    }

    /**
     * @param Address $postAddress
     * @return CreateOptyRequest
     */
    public function setPostAddress($postAddress)
    {
        $this->postAddress = $postAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getPensioner()
    {
        return $this->pensioner;
    }

    /**
     * @param int $pensioner
     * @return CreateOptyRequest
     */
    public function setPensioner($pensioner)
    {
        $this->pensioner = $pensioner;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkType()
    {
        return $this->workType;
    }

    /**
     * @param int $workType
     * @return CreateOptyRequest
     */
    public function setWorkType($workType)
    {
        $this->workType = $workType;
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
     * @return CreateOptyRequest
     */
    public function setWorkName($workName)
    {
        $this->workName = $workName;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkBranch()
    {
        return $this->workBranch;
    }

    /**
     * @param int $workBranch
     * @return CreateOptyRequest
     */
    public function setWorkBranch($workBranch)
    {
        $this->workBranch = $workBranch;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkType1()
    {
        return $this->workType1;
    }

    /**
     * @param int $workType1
     * @return CreateOptyRequest
     */
    public function setWorkType1($workType1)
    {
        $this->workType1 = $workType1;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkType2()
    {
        return $this->workType2;
    }

    /**
     * @param int $workType2
     * @return CreateOptyRequest
     */
    public function setWorkType2($workType2)
    {
        $this->workType2 = $workType2;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkType3()
    {
        return $this->workType3;
    }

    /**
     * @param int $workType3
     * @return CreateOptyRequest
     */
    public function setWorkType3($workType3)
    {
        $this->workType3 = $workType3;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkField()
    {
        return $this->workField;
    }

    /**
     * @param int $workField
     * @return CreateOptyRequest
     */
    public function setWorkField($workField)
    {
        $this->workField = $workField;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkPosition()
    {
        return $this->workPosition;
    }

    /**
     * @param int $workPosition
     * @return CreateOptyRequest
     */
    public function setWorkPosition($workPosition)
    {
        $this->workPosition = $workPosition;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkFieldTime()
    {
        return $this->workFieldTime;
    }

    /**
     * @param int $workFieldTime
     * @return CreateOptyRequest
     */
    public function setWorkFieldTime($workFieldTime)
    {
        $this->workFieldTime = $workFieldTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * @param int $workTime
     * @return CreateOptyRequest
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;
        return $this;
    }

    /**
     * @return Address
     */
    public function getWorkAddress()
    {
        return $this->workAddress;
    }

    /**
     * @param Address $workAddress
     * @return CreateOptyRequest
     */
    public function setWorkAddress($workAddress)
    {
        $this->workAddress = $workAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdditionalDoc()
    {
        return $this->additionalDoc;
    }

    /**
     * @param int $additionalDoc
     * @return CreateOptyRequest
     */
    public function setAdditionalDoc($additionalDoc)
    {
        $this->additionalDoc = $additionalDoc;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalDocName()
    {
        return $this->additionalDocName;
    }

    /**
     * @param string $additionalDocName
     * @return CreateOptyRequest
     */
    public function setAdditionalDocName($additionalDocName)
    {
        $this->additionalDocName = $additionalDocName;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsHome()
    {
        return $this->isHome;
    }

    /**
     * @param int $isHome
     * @return CreateOptyRequest
     */
    public function setIsHome($isHome)
    {
        $this->isHome = $isHome;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsFlat()
    {
        return $this->isFlat;
    }

    /**
     * @param int $isFlat
     * @return CreateOptyRequest
     */
    public function setIsFlat($isFlat)
    {
        $this->isFlat = $isFlat;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsVilla()
    {
        return $this->isVilla;
    }

    /**
     * @param int $isVilla
     * @return CreateOptyRequest
     */
    public function setIsVilla($isVilla)
    {
        $this->isVilla = $isVilla;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsEstate()
    {
        return $this->isEstate;
    }

    /**
     * @param int $isEstate
     * @return CreateOptyRequest
     */
    public function setIsEstate($isEstate)
    {
        $this->isEstate = $isEstate;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsGarage()
    {
        return $this->isGarage;
    }

    /**
     * @param int $isGarage
     * @return CreateOptyRequest
     */
    public function setIsGarage($isGarage)
    {
        $this->isGarage = $isGarage;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsVehicle()
    {
        return $this->isVehicle;
    }

    /**
     * @param int $isVehicle
     * @return CreateOptyRequest
     */
    public function setIsVehicle($isVehicle)
    {
        $this->isVehicle = $isVehicle;
        return $this;
    }

    /**
     * @return Car
     */
    public function getCarProperty()
    {
        return $this->carProperty;
    }

    /**
     * @param Car $carProperty
     * @return CreateOptyRequest
     */
    public function setCarProperty($carProperty)
    {
        $this->carProperty = $carProperty;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceMonth()
    {
        return $this->priceMonth;
    }

    /**
     * @param float $priceMonth
     * @return CreateOptyRequest
     */
    public function setPriceMonth($priceMonth)
    {
        $this->priceMonth = $priceMonth;
        return $this;
    }

    /**
     * @return float
     */
    public function getOtherIncome()
    {
        return $this->otherIncome;
    }

    /**
     * @param float $otherIncome
     * @return CreateOptyRequest
     */
    public function setOtherIncome($otherIncome)
    {
        $this->otherIncome = $otherIncome;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceFamily()
    {
        return $this->priceFamily;
    }

    /**
     * @param float $priceFamily
     * @return CreateOptyRequest
     */
    public function setPriceFamily($priceFamily)
    {
        $this->priceFamily = $priceFamily;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsSalary()
    {
        return $this->isSalary;
    }

    /**
     * @param int $isSalary
     * @return CreateOptyRequest
     */
    public function setIsSalary($isSalary)
    {
        $this->isSalary = $isSalary;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsBusiness()
    {
        return $this->isBusiness;
    }

    /**
     * @param int $isBusiness
     * @return CreateOptyRequest
     */
    public function setIsBusiness($isBusiness)
    {
        $this->isBusiness = $isBusiness;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsRent()
    {
        return $this->isRent;
    }

    /**
     * @param int $isRent
     * @return CreateOptyRequest
     */
    public function setIsRent($isRent)
    {
        $this->isRent = $isRent;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsStudent()
    {
        return $this->isStudent;
    }

    /**
     * @param int $isStudent
     * @return CreateOptyRequest
     */
    public function setIsStudent($isStudent)
    {
        $this->isStudent = $isStudent;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsPension()
    {
        return $this->isPension;
    }

    /**
     * @param int $isPension
     * @return CreateOptyRequest
     */
    public function setIsPension($isPension)
    {
        $this->isPension = $isPension;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsOtherPrice()
    {
        return $this->isOtherPrice;
    }

    /**
     * @param int $isOtherPrice
     * @return CreateOptyRequest
     */
    public function setIsOtherPrice($isOtherPrice)
    {
        $this->isOtherPrice = $isOtherPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeWord()
    {
        return $this->codeWord;
    }

    /**
     * @param string $codeWord
     * @return CreateOptyRequest
     */
    public function setCodeWord($codeWord)
    {
        $this->codeWord = $codeWord;
        return $this;
    }

    /**
     * @return Goods
     */
    public function getGoodsProperty()
    {
        return $this->goodsProperty;
    }

    /**
     * @param Goods $goodsProperty
     * @return CreateOptyRequest
     */
    public function setGoodsProperty($goodsProperty)
    {
        $this->goodsProperty = $goodsProperty;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return CreateOptyRequest
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @param string $orderID
     * @return CreateOptyRequest
     */
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTradeID()
    {
        return $this->tradeID;
    }

    /**
     * @param int $tradeID
     * @return CreateOptyRequest
     */
    public function setTradeID($tradeID)
    {
        $this->tradeID = $tradeID;
        return $this;
    }
}
