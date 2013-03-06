<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfEmployee extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfEmployee';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Employee[] $Employee
     */
    protected $Employee = array();

    /**
     * @param  Employee[]      $employee
     * @return ArrayOfEmployee
     */
    public function setEmployee(array $employee = array())
    {
        $this->Employee = $employee;

        return $this;
    }

    /**
     * @return Employee[]
     */
    public function getEmployee()
    {
        return $this->Employee;
    }

}
