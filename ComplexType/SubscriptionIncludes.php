<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionIncludes';

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $Inactive;

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $Invalid;

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $Logs;

    /**

     * maxOccurs = 1     * @var boolean
     */
    protected $PersonCards;

    /**
     * @param  boolean[optional]    $inactive
     * @return SubscriptionIncludes
     */
    public function setInactive($inactive)
    {
        $this->Inactive = $inactive;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
        return $this->Inactive;
    }

    /**
     * @param  boolean[optional]    $invalid
     * @return SubscriptionIncludes
     */
    public function setInvalid($invalid)
    {
        $this->Invalid = $invalid;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getInvalid()
    {
        return $this->Invalid;
    }

    /**
     * @param  boolean[optional]    $logs
     * @return SubscriptionIncludes
     */
    public function setLogs($logs)
    {
        $this->Logs = $logs;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLogs()
    {
        return $this->Logs;
    }

    /**
     * @param  boolean[optional]    $personCards
     * @return SubscriptionIncludes
     */
    public function setPersonCards($personCards)
    {
        $this->PersonCards = $personCards;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonCards()
    {
        return $this->PersonCards;
    }
}
