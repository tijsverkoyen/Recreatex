<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSubscriptionLog extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSubscriptionLog';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $SubscriptionLog = array();

    /**
     * @param  array                  $subscriptionLog
     * @return ArrayOfSubscriptionLog
     */
    public function setSubscriptionLog(array $subscriptionLog = array())
    {
        $this->SubscriptionLog = $subscriptionLog;

        return $this;
    }

    /**
     * @return array
     */
    public function getSubscriptionLog()
    {
        return $this->SubscriptionLog;
    }
}
