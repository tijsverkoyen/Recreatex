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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ActivityPartReservation[] $ActivityPartReservation
     */
    protected $ActivityPartReservation = array();

    /**
     * @param  ActivityPartReservation[]      $activityPartReservation
     * @return ArrayOfActivityPartReservation
     */
    public function setActivityPartReservation(array $activityPartReservation = array())
    {
        $this->ActivityPartReservation = $activityPartReservation;

        return $this;
    }

    /**
     * @return ActivityPartReservation[]
     */
    public function getActivityPartReservation()
    {
        return $this->ActivityPartReservation;
    }

}
