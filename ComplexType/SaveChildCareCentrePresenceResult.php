<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SaveChildCareCentrePresenceResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SaveChildCareCentrePresenceResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ChildCareCentrePresence|null $ChildCareCentrePresence
     */
    protected $ChildCareCentrePresence;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfValidationResult|null $ValidationResults
     */
    protected $ValidationResults;

    /**
     * @param  ChildCareCentrePresence|null      $childCareCentrePresence
     * @return SaveChildCareCentrePresenceResult
     */
    public function setChildCareCentrePresence(ChildCareCentrePresence $childCareCentrePresence = null)
    {
        $this->ChildCareCentrePresence = $childCareCentrePresence;

        return $this;
    }

    /**
     * @return ChildCareCentrePresence|null
     */
    public function getChildCareCentrePresence()
    {
        return $this->ChildCareCentrePresence;
    }

    /**
     * @param  ArrayOfValidationResult|null      $validationResults
     * @return SaveChildCareCentrePresenceResult
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
