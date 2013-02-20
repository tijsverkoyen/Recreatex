<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SavePersonResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SavePersonResult';

    /**
     * @var Person
     */
    protected $Person;

    /**
     * @var ArrayOfValidationResult
     */
    protected $ValidationResults;

    /**
     * @param  Person|null      $person
     * @return SavePersonResult
     */
    public function setPerson(Person $person = null)
    {
        $this->Person = $person;

        return $this;
    }

    /**
     * @return Person|null
     */
    public function getPerson()
    {
        return $this->Person;
    }

    /**
     * @param  ArrayOfValidationResult|null $validationResults
     * @return SavePersonResult
     */
    public function setValidationResults(ArrayOfValidationResult $validationResults = null)
    {
        $this->ValidationResults = $validationResults;

        return $this;
    }

    /**
     * @return ArrayOfValidationResult|null
     */
    public function getValidationResults()
    {
        return $this->ValidationResults;
    }
}
