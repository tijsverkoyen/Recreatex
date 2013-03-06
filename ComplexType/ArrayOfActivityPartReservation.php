<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfActivityPartReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfActivityPartReservation';

    /**
     * @var array
     */
    protected $ActivityPartReservation = array();

    /**
     * @param  array                          $activityPartReservation
     * @return ArrayOfActivityPartReservation
     */
    public function setActivityPartReservation(array $activityPartReservation = array())
    {
        $this->ActivityPartReservation = $activityPartReservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getActivityPartReservation()
    {
        if (!is_array($this->ActivityPartReservation)) {
            return array($this->ActivityPartReservation);
        }

        return $this->ActivityPartReservation;
    }
}
