<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionLogIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SubscriptionLogIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Person
     */
    protected $Person;

    /**
     * @param  boolean|null            $person
     * @return SubscriptionLogIncludes
     */
    public function setPerson($person)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPerson()
    {
        return $this->Person;
    }

}
