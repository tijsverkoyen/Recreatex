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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Tariffs
     */
    protected $Tariffs;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Presences
     */
    protected $Presences;

    /**
     * @param  boolean|null                          $tariffs
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
     * @param  boolean|null                          $presences
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
