<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PriceGroupActivitySearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PriceGroupActivitySearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ActivityId
     */
    protected $ActivityId;

    /**
     * @param  SimpleType\guid|null             $activityId
     * @return PriceGroupActivitySearchCriteria
     */
    public function setActivityId(SimpleType\guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

}
