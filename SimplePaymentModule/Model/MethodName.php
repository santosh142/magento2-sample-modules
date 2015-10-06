<?php
namespace YourCompanyName\SimplePaymentModule\Model;
/**
 * Pay In Store payment method model
 */
class MethodName extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'methodname';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;


  

}
