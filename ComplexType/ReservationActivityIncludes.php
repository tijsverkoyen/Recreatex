<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 * The includes that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationActivityIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationActivityIncludes';

    /**
     * Include blocked ReservationActivities as well.
     * @var boolean
     */
    protected $Blocked;

    /**
     * @param  boolean[optional]           $blocked
     * @return ReservationActivityIncludes
     */
    public function setBlocked($blocked)
    {
        $this->Blocked = $blocked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getBlocked()
    {
        return $this->Blocked;
    }
}
