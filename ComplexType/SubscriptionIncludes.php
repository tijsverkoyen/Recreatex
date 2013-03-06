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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Inactive
     */
    protected $Inactive;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Invalid
     */
    protected $Invalid;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Logs
     */
    protected $Logs;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonCards
     */
    protected $PersonCards;

    /**
     * @param  boolean|null         $inactive
     * @return SubscriptionIncludes
     */
    public function setInactive($inactive)
    {
        $this->Inactive = $inactive;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }

    /**
     * @param  boolean|null         $invalid
     * @return SubscriptionIncludes
     */
    public function setInvalid($invalid)
    {
        $this->Invalid = $invalid;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getInvalid()
    {
        return $this->Invalid;
    }

    /**
     * @param  boolean|null         $logs
     * @return SubscriptionIncludes
     */
    public function setLogs($logs)
    {
        $this->Logs = $logs;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getLogs()
    {
        return $this->Logs;
    }

    /**
     * @param  boolean|null         $personCards
     * @return SubscriptionIncludes
     */
    public function setPersonCards($personCards)
    {
        $this->PersonCards = $personCards;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonCards()
    {
        return $this->PersonCards;
    }

}
