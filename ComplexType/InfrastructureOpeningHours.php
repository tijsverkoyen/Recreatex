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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $InfrastructureID
     */
    protected $InfrastructureID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfOpeningHour|null $OpenHours
     */
    protected $OpenHours;

    /**
     * @param  SimpleType\guid|null       $infrastructureID
     * @return InfrastructureOpeningHours
     */
    public function setInfrastructureID(SimpleType\guid $infrastructureID = null)
    {
        $this->InfrastructureID = $infrastructureID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getInfrastructureID()
    {
        return $this->InfrastructureID;
    }

    /**
     * @param  ArrayOfOpeningHour|null    $openHours
     * @return InfrastructureOpeningHours
     */
    public function setOpenHours(ArrayOfOpeningHour $openHours = null)
    {
        $this->OpenHours = $openHours;

        return $this;
    }

    /**
     * @return ArrayOfOpeningHour|null
     */
    public function getOpenHours()
    {
        return $this->OpenHours;
    }

}
