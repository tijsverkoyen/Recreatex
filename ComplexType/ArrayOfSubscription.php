<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSubscription extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSubscription';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Subscription[] $Subscription
     */
    protected $Subscription = array();

    /**
     * @param  Subscription[]      $subscription
     * @return ArrayOfSubscription
     */
    public function setSubscription(array $subscription = array())
    {
        $this->Subscription = $subscription;

        return $this;
    }

    /**
     * @return Subscription[]
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

}
