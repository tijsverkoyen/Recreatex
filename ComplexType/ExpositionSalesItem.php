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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionId
     */
    protected $ExpositionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionPeriodId
     */
    protected $ExpositionPeriodId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $OrganisedVisitId
     */
    protected $OrganisedVisitId;

    /**
     * @param  SimpleType\guid|null $expositionId
     * @return ExpositionSalesItem
     */
    public function setExpositionId(SimpleType\guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param  SimpleType\guid|null $expositionPeriodId
     * @return ExpositionSalesItem
     */
    public function setExpositionPeriodId(SimpleType\guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param  SimpleType\guid|null $organisedVisitId
     * @return ExpositionSalesItem
     */
    public function setOrganisedVisitId(SimpleType\guid $organisedVisitId = null)
    {
        $this->OrganisedVisitId = $organisedVisitId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getOrganisedVisitId()
    {
        return $this->OrganisedVisitId;
    }

}
