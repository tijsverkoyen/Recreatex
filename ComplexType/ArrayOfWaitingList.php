<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfWaitingList extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfWaitingList';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var WaitingList[] $WaitingList
     */
    protected $WaitingList = array();

    /**
     * @param  WaitingList[]      $waitingList
     * @return ArrayOfWaitingList
     */
    public function setWaitingList(array $waitingList = array())
    {
        $this->WaitingList = $waitingList;

        return $this;
    }

    /**
     * @return WaitingList[]
     */
    public function getWaitingList()
    {
        return $this->WaitingList;
    }

}
