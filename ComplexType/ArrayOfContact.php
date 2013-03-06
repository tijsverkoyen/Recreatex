<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfContact extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfContact';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Contact = array();

    /**
     * @param  array          $contact
     * @return ArrayOfContact
     */
    public function setContact(array $contact = array())
    {
        $this->Contact = $contact;

        return $this;
    }

    /**
     * @return array
     */
    public function getContact()
    {
        return $this->Contact;
    }
}
