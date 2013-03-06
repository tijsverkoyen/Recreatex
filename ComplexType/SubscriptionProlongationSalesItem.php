<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionProlongationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionProlongationSalesItem';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $SubscriptionId
     */
    protected $SubscriptionId;

    /**
     * @param  SimpleType\guid|null              $subscriptionId
     * @return SubscriptionProlongationSalesItem
     */
    public function setSubscriptionId(SimpleType\guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }

}
