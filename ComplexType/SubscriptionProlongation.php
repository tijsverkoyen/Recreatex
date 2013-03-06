<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionProlongation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionProlongation';

    /**
     * @var SimpleTypeGuid
     */
    protected $SubscriptionId;

    /**
     * @param  SimpleType\Guid[optional] $subscriptionId
     * @return SubscriptionProlongation
     */
    public function setSubscriptionId(SimpleType\Guid $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
}
