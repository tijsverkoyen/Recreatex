<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 * The includes that will be added to searchresult of ListReservationViews
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReservationViewIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ReservationViewIncludes';

    /**
     * Include Place information.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Places
     */
    protected $Places;

    /**
     * @param  boolean|null            $places
     * @return ReservationViewIncludes
     */
    public function setPlaces($places)
    {
        $this->Places = $places;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPlaces()
    {
        return $this->Places;
    }

}
