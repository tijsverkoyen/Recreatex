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
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @param  SimpleType\Guid[optional]         $subscriptionId
     * @return SubscriptionProlongationSalesItem
     */
    public function setSubscriptionId(SimpleType\Guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
}
