<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfWaitingListStudent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfWaitingListStudent';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var WaitingListStudent[] $WaitingListStudent
     */
    protected $WaitingListStudent = array();

    /**
     * @param  WaitingListStudent[]      $waitingListStudent
     * @return ArrayOfWaitingListStudent
     */
    public function setWaitingListStudent(array $waitingListStudent = array())
    {
        $this->WaitingListStudent = $waitingListStudent;

        return $this;
    }

    /**
     * @return WaitingListStudent[]
     */
    public function getWaitingListStudent()
    {
        return $this->WaitingListStudent;
    }

}
