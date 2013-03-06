<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityPartReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityPartReservation';

    /**
     * @var ArrayOfActivityOption
     */
    protected $ActivityOptions;

    /**
     * @var ActivityPart
     */
    protected $ActivityPart;

    /**
     * @var boolean
     */
    protected $IsSelected;

    /**
     * @param  ArrayOfActivityOption[optional] $activityOptions
     * @return ActivityPartReservation
     */
    public function setActivityOptions(ArrayOfActivityOption $activityOptions = null)
    {
        $this->ActivityOptions = $activityOptions;

        return $this;
    }

    /**
     * @return ArrayOfActivityOption
     */
    public function getActivityOptions()
    {
        return $this->ActivityOptions;
    }

    /**
     * @param  ActivityPart[optional]  $activityPart
     * @return ActivityPartReservation
     */
    public function setActivityPart(ActivityPart $activityPart = null)
    {
        $this->ActivityPart = $activityPart;

        return $this;
    }

    /**
     * @return ActivityPart
     */
    public function getActivityPart()
    {
        return $this->ActivityPart;
    }

    /**
     * @param  boolean[optional]       $isSelected
     * @return ActivityPartReservation
     */
    public function setIsSelected($isSelected)
    {
        $this->IsSelected = $isSelected;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSelected()
    {
        return $this->IsSelected;
    }
}
