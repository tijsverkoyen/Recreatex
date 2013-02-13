<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityPartReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityPartReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfActivityOption|null $ActivityOptions
     */
    protected $ActivityOptions;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ActivityPart|null $ActivityPart
     */
    protected $ActivityPart;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IsSelected
     */
    protected $IsSelected;


    /**
     * @param ArrayOfActivityOption|null $activityOptions
     * @return ActivityPartReservation
     */
    public function setActivityOptions(ArrayOfActivityOption $activityOptions = null)
    {
        $this->ActivityOptions = $activityOptions;

        return $this;
    }

    /**
     * @return ArrayOfActivityOption|null
     */
    public function getActivityOptions()
    {
        return $this->ActivityOptions;
    }

    /**
     * @param ActivityPart|null $activityPart
     * @return ActivityPartReservation
     */
    public function setActivityPart(ActivityPart $activityPart = null)
    {
        $this->ActivityPart = $activityPart;

        return $this;
    }

    /**
     * @return ActivityPart|null
     */
    public function getActivityPart()
    {
        return $this->ActivityPart;
    }

    /**
     * @param boolean|null $isSelected
     * @return ActivityPartReservation
     */
    public function setIsSelected($isSelected)
    {
        $this->IsSelected = $isSelected;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsSelected()
    {
        return $this->IsSelected;
    }


}

