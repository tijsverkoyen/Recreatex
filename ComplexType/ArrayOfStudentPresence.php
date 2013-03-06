<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfStudentPresence extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfStudentPresence';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $StudentPresence = array();

    /**
     * @param  array                  $studentPresence
     * @return ArrayOfStudentPresence
     */
    public function setStudentPresence(array $studentPresence = array())
    {
        $this->StudentPresence = $studentPresence;

        return $this;
    }

    /**
     * @return array
     */
    public function getStudentPresence()
    {
        return $this->StudentPresence;
    }
}
