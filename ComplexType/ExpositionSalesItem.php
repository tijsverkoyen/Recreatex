<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionSalesItem';

    /**
     * @var SimpleType\Guid
     */
    protected $ExpositionId;

    /**
     * @var SimpleType\Guid
     */
    protected $ExpositionPeriodId;

    /**
     * @param  SimpleType\Guid[optional] $expositionId
     * @return ExpositionSalesItem
     */
    public function setExpositionId(SimpleType\Guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param  SimpleType\Guid[optional] $expositionPeriodId
     * @return ExpositionSalesItem
     */
    public function setExpositionPeriodId(SimpleType\Guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }
}
