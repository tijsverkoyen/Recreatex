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

     * @var SimpleTypeGuid
     */
    protected $ActivityId;

    /**
     * @param  SimpleType\Guid[optional]        $activityId
     * @return PriceGroupActivitySearchCriteria
     */
    public function setActivityId(SimpleType\Guid $activityId = null)
    {
        $this->ActivityId = $activityId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }
}
