<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class Billing
{

    /**
     * @var Account $ShipperAccountNumber
     */
    protected $ShipperAccountNumber = null;

    /**
     * @var ShipmentPaymentType $ShippingPaymentType
     */
    protected $ShippingPaymentType = null;

    /**
     * @var Account $BillingAccountNumber
     */
    protected $BillingAccountNumber = null;

    /**
     * @param Account $ShipperAccountNumber
     * @param ShipmentPaymentType $ShippingPaymentType
     */
    public function __construct($ShipperAccountNumber, $ShippingPaymentType)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      $this->ShippingPaymentType = $ShippingPaymentType;
    }

    /**
     * @return Account
     */
    public function getShipperAccountNumber()
    {
      return $this->ShipperAccountNumber;
    }

    /**
     * @param Account $ShipperAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Billing
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      return $this;
    }

    /**
     * @return ShipmentPaymentType
     */
    public function getShippingPaymentType()
    {
      return $this->ShippingPaymentType;
    }

    /**
     * @param ShipmentPaymentType $ShippingPaymentType
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Billing
     */
    public function setShippingPaymentType($ShippingPaymentType)
    {
      $this->ShippingPaymentType = $ShippingPaymentType;
      return $this;
    }

    /**
     * @return Account
     */
    public function getBillingAccountNumber()
    {
      return $this->BillingAccountNumber;
    }

    /**
     * @param Account $BillingAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Billing
     */
    public function setBillingAccountNumber($BillingAccountNumber)
    {
      $this->BillingAccountNumber = $BillingAccountNumber;
      return $this;
    }

}
