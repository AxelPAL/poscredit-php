<?php

namespace AxelPAL\PosCredit;

use AxelPAL\PosCredit\Objects\Address;
use AxelPAL\PosCredit\Objects\Article;
use AxelPAL\PosCredit\Objects\Bank;
use AxelPAL\PosCredit\Objects\Banks;
use AxelPAL\PosCredit\Objects\Car;
use AxelPAL\PosCredit\Objects\ClientScans;
use AxelPAL\PosCredit\Objects\Document;
use AxelPAL\PosCredit\Objects\Documents;
use AxelPAL\PosCredit\Objects\Education;
use AxelPAL\PosCredit\Objects\EducationList;
use AxelPAL\PosCredit\Objects\Error;
use AxelPAL\PosCredit\Objects\Good;
use AxelPAL\PosCredit\Objects\GoodParams;
use AxelPAL\PosCredit\Objects\Goods;
use AxelPAL\PosCredit\Objects\Offer;
use AxelPAL\PosCredit\Objects\Person;
use AxelPAL\PosCredit\Objects\Result;
use AxelPAL\PosCredit\Objects\Results;
use AxelPAL\PosCredit\Objects\Scan;
use AxelPAL\PosCredit\Objects\Services;
use AxelPAL\PosCredit\Objects\TransferPayment;
use AxelPAL\PosCredit\Requests\AcceptOptyRequest;
use AxelPAL\PosCredit\Requests\AuthOptyRequest;
use AxelPAL\PosCredit\Requests\CalculatorBookOptyRequest;
use AxelPAL\PosCredit\Requests\CancelAuthOptyRequest;
use AxelPAL\PosCredit\Requests\CancelOptyRequest;
use AxelPAL\PosCredit\Requests\CreateOptyRequest;
use AxelPAL\PosCredit\Requests\SendShortOptyRequest;
use AxelPAL\PosCredit\Requests\SignCheckOptyRequest;
use AxelPAL\PosCredit\Requests\SignDeliveryOptyRequest;
use AxelPAL\PosCredit\Requests\SignDocShortOptyRequest;
use AxelPAL\PosCredit\Requests\StatusOptyRequest;
use AxelPAL\PosCredit\Requests\StatusSelectedOptyRequest;
use AxelPAL\PosCredit\Requests\StatusShortOptyRequest;
use AxelPAL\PosCredit\Responses\AcceptOptyResponse;
use AxelPAL\PosCredit\Responses\AuthOptyResponse;
use AxelPAL\PosCredit\Responses\CancelAuthOptyResponse;
use AxelPAL\PosCredit\Responses\CancelOptyResponse;
use AxelPAL\PosCredit\Responses\CreateOptyResponse;
use AxelPAL\PosCredit\Responses\SendShortOptyResponse;
use AxelPAL\PosCredit\Responses\SignCheckOptyResponse;
use AxelPAL\PosCredit\Responses\SignDeliveryOptyResponse;
use AxelPAL\PosCredit\Responses\SignDocShortOptyResponse;
use AxelPAL\PosCredit\Responses\StatusOptyResponse;
use AxelPAL\PosCredit\Responses\StatusSelectedOptyResponse;
use AxelPAL\PosCredit\Responses\StatusShortOptyResponse;

class LoanService extends \SoapClient
{
    const WSDL_PATH = 'https://api.b2pos.ru/loan/wsdl.php';
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'error' => Error::class,
      'good' => Good::class,
      'goods' => Goods::class,
      'car' => Car::class,
      'address' => Address::class,
      'person' => Person::class,
      'education' => Education::class,
      'educationList' => EducationList::class,
      'services' => Services::class,
      'bank' => Bank::class,
      'banks' => Banks::class,
      'CreateOptyRequest' => CreateOptyRequest::class,
      'CreateOptyResponse' => CreateOptyResponse::class,
      'offer' => Offer::class,
      'result' => Result::class,
      'results' => Results::class,
      'StatusOptyRequest' => StatusOptyRequest::class,
      'StatusOptyResponse' => StatusOptyResponse::class,
      'StatusSelectedOptyRequest' => StatusSelectedOptyRequest::class,
      'StatusSelectedOptyResponse' => StatusSelectedOptyResponse::class,
      'AcceptOptyRequest' => AcceptOptyRequest::class,
      'AcceptOptyResponse' => AcceptOptyResponse::class,
      'AuthOptyRequest' => AuthOptyRequest::class,
      'AuthOptyResponse' => AuthOptyResponse::class,
      'CancelOptyRequest' => CancelOptyRequest::class,
      'CancelOptyResponse' => CancelOptyResponse::class,
      'CancelAuthOptyRequest' => CancelAuthOptyRequest::class,
      'CancelAuthOptyResponse' => CancelAuthOptyResponse::class,
      'SignDeliveryOptyRequest' => SignDeliveryOptyRequest::class,
      'SignDeliveryOptyResponse' => SignDeliveryOptyResponse::class,
      'scan' => Scan::class,
      'clientScans' => ClientScans::class,
      'SignCheckOptyRequest' => SignCheckOptyRequest::class,
      'SignCheckOptyResponse' => SignCheckOptyResponse::class,
      'article' => Article::class,
      'goodParams' => GoodParams::class,
      'SendShortOptyRequest' => SendShortOptyRequest::class,
      'SendShortOptyResponse' => SendShortOptyResponse::class,
      'transferPayment' => TransferPayment::class,
      'StatusShortOptyRequest' => StatusShortOptyRequest::class,
      'StatusShortOptyResponse' => StatusShortOptyResponse::class,
      'document' => Document::class,
      'documents' => Documents::class,
      'SignDocShortOptyRequest' => SignDocShortOptyRequest::class,
      'SignDocShortOptyResponse' => SignDocShortOptyResponse::class,
      'CalculatorBookOptyRequest' => CalculatorBookOptyRequest::class,
    );

    /**
     * @param array  $options A array of config values
     * @param string $wsdl    The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(
            [
                'features' => 1,
            ],
            $options
        );
        $wsdl = $wsdl ?: self::WSDL_PATH;
        parent::__construct($wsdl, $options);
    }

    /**
     * @param CreateOptyRequest $CreateOptyRequest
     * @return CreateOptyResponse
     */
    public function createOpty(CreateOptyRequest $CreateOptyRequest)
    {
        return $this->__soapCall('CreateOpty', [$CreateOptyRequest]);
    }

    /**
     * @param StatusOptyRequest $StatusOptyRequest
     * @return StatusOptyResponse
     */
    public function statusOpty(StatusOptyRequest $StatusOptyRequest)
    {
        return $this->__soapCall('StatusOpty', [$StatusOptyRequest]);
    }

    /**
     * @param StatusSelectedOptyRequest $StatusSelectedOptyRequest
     * @return StatusSelectedOptyResponse
     */
    public function statusSelectedOpty(StatusSelectedOptyRequest $StatusSelectedOptyRequest)
    {
        return $this->__soapCall('StatusSelectedOpty', [$StatusSelectedOptyRequest]);
    }

    /**
     * @param AcceptOptyRequest $AcceptOptyRequest
     * @return AcceptOptyResponse
     */
    public function acceptOpty(AcceptOptyRequest $AcceptOptyRequest)
    {
        return $this->__soapCall('AcceptOpty', [$AcceptOptyRequest]);
    }

    /**
     * @param AuthOptyRequest $AuthOptyRequest
     * @return AuthOptyResponse
     */
    public function authOpty(AuthOptyRequest $AuthOptyRequest)
    {
        return $this->__soapCall('AuthOpty', [$AuthOptyRequest]);
    }

    /**
     * @param CancelOptyRequest $CancelOptyRequest
     * @return CancelOptyResponse
     */
    public function cancelOpty(CancelOptyRequest $CancelOptyRequest)
    {
        return $this->__soapCall('CancelOpty', [$CancelOptyRequest]);
    }

    /**
     * @param CancelAuthOptyRequest $CancelAuthOptyRequest
     * @return CancelAuthOptyResponse
     */
    public function cancelAuthOpty(CancelAuthOptyRequest $CancelAuthOptyRequest)
    {
        return $this->__soapCall('CancelAuthOpty', [$CancelAuthOptyRequest]);
    }

    /**
     * @param SignDeliveryOptyRequest $SignDeliveryOptyRequest
     * @return SignDeliveryOptyResponse
     */
    public function signDeliveryOpty(SignDeliveryOptyRequest $SignDeliveryOptyRequest)
    {
        return $this->__soapCall('SignDeliveryOpty', [$SignDeliveryOptyRequest]);
    }

    /**
     * @param SignCheckOptyRequest $SignCheckOptyRequest
     * @return SignCheckOptyResponse
     */
    public function signCheckOpty(SignCheckOptyRequest $SignCheckOptyRequest)
    {
        return $this->__soapCall('SignCheckOpty', [$SignCheckOptyRequest]);
    }

    /**
     * @param SendShortOptyRequest $SendShortOptyRequest
     * @return SendShortOptyResponse
     */
    public function sendShortOpty(SendShortOptyRequest $SendShortOptyRequest)
    {
        return $this->__soapCall('SendShortOpty', [$SendShortOptyRequest]);
    }

    /**
     * @param StatusShortOptyRequest $StatusShortOptyRequest
     * @return StatusShortOptyResponse
     */
    public function statusShortOpty(StatusShortOptyRequest $StatusShortOptyRequest)
    {
        return $this->__soapCall('StatusShortOpty', [$StatusShortOptyRequest]);
    }

    /**
     * @param SignDocShortOptyRequest $SignDocShortOptyRequest
     * @return SignDocShortOptyResponse
     */
    public function signDocShortOpty(SignDocShortOptyRequest $SignDocShortOptyRequest)
    {
        return $this->__soapCall('SignDocShortOpty', [$SignDocShortOptyRequest]);
    }

    /**
     * @param CalculatorBookOptyRequest $CalculatorBookOptyRequest
     * @return SignDocShortOptyResponse
     */
    public function calculatorBookOpty(CalculatorBookOptyRequest $CalculatorBookOptyRequest)
    {
        return $this->__soapCall('CalculatorBookOpty', [$CalculatorBookOptyRequest]);
    }
}
