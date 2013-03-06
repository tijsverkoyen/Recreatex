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
     * @var ChildCareCentrePresence
     */
    protected $ChildCareCentrePresence;

    /**
     * @var ArrayOfValidationResult
     */
    protected $ValidationResults;

    /**
     * @param  ChildCareCentrePresence[optional] $childCareCentrePresence
     * @return SaveChildCareCentrePresenceResult
     */
    public function setChildCareCentrePresence(ChildCareCentrePresence $childCareCentrePresence = null)
    {
        $this->ChildCareCentrePresence = $childCareCentrePresence;

        return $this;
    }

    /**
     * @return ChildCareCentrePresence
     */
    public function getChildCareCentrePresence()
    {
        return $this->ChildCareCentrePresence;
    }

    /**
     * @param  ArrayOfValidationResult[optional] $validationResults
     * @return SaveChildCareCentrePresenceResult
     */
    public function setValidationResults(ArrayOfValidationResult $validationResults = null)
    {
        $this->ValidationResults = $validationResults;

        return $this;
    }

    /**
     * @return ArrayOfValidationResult
     */
    public function getValidationResults()
    {
        return $this->ValidationResults;
    }
}
