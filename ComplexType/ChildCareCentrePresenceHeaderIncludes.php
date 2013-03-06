<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentrePresenceHeaderIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentrePresenceHeaderIncludes';

    /**
     * @var boolean
     */
    protected $Tariffs;

    /**
     * @var boolean
     */
    protected $Presences;

    /**
     * @param  boolean[optional]                     $tariffs
     * @return ChildCareCentrePresenceHeaderIncludes
     */
    public function setTariffs($tariffs)
    {
        $this->Tariffs = $tariffs;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getTariffs()
    {
        return $this->Tariffs;
    }

    /**
     * @param  boolean[optional]                     $presences
     * @return ChildCareCentrePresenceHeaderIncludes
     */
    public function setPresences($presences)
    {
        $this->Presences = $presences;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPresences()
    {
        return $this->Presences;
    }
}
