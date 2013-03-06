<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonLLVTransferHistory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonLLVTransferHistory';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonLLVTransferHistory[] $PersonLLVTransferHistory
     */
    protected $PersonLLVTransferHistory = array();

    /**
     * @param  PersonLLVTransferHistory[]      $personLLVTransferHistory
     * @return ArrayOfPersonLLVTransferHistory
     */
    public function setPersonLLVTransferHistory(array $personLLVTransferHistory = array())
    {
        $this->PersonLLVTransferHistory = $personLLVTransferHistory;

        return $this;
    }

    /**
     * @return PersonLLVTransferHistory[]
     */
    public function getPersonLLVTransferHistory()
    {
        return $this->PersonLLVTransferHistory;
    }

}
