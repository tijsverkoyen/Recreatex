<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class InfrastructureOpeningHours extends ComplexTypeAbstract
{
    const CLASS_NAME = 'InfrastructureOpeningHours';

    /**

     * @var SimpleTypeGuid
     */
    protected $InfrastructureID;

    /**

     * @var ArrayOfOpeningHour
     */
    protected $OpenHours;

    /**
     * @param  SimpleType\Guid[optional]  $infrastructureID
     * @return InfrastructureOpeningHours
     */
    public function setInfrastructureID(SimpleType\Guid $infrastructureID = null)
    {
        $this->InfrastructureID = $infrastructureID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getInfrastructureID()
    {
        return $this->InfrastructureID;
    }

    /**
     * @param  ArrayOfOpeningHour[optional] $openHours
     * @return InfrastructureOpeningHours
     */
    public function setOpenHours(ArrayOfOpeningHour $openHours = null)
    {
        $this->OpenHours = $openHours;

        return $this;
    }

    /**
     * @return ArrayOfOpeningHour
     */
    public function getOpenHours()
    {
        return $this->OpenHours;
    }
}
