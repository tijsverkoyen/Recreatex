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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var StudentPresence[] $StudentPresence
     */
    protected $StudentPresence = array();

    /**
     * @param  StudentPresence[]      $studentPresence
     * @return ArrayOfStudentPresence
     */
    public function setStudentPresence(array $studentPresence = array())
    {
        $this->StudentPresence = $studentPresence;

        return $this;
    }

    /**
     * @return StudentPresence[]
     */
    public function getStudentPresence()
    {
        return $this->StudentPresence;
    }

}
