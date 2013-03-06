<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisitPriceGroupPeriodReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisitPriceGroupPeriodReservation';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PriceGroup|null $PriceGroup
     */
    protected $PriceGroup;

    /**
     * @param  PriceGroup|null                           $priceGroup
     * @return OrganisedVisitPriceGroupPeriodReservation
     */
    public function setPriceGroup(PriceGroup $priceGroup = null)
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return PriceGroup|null
     */
    public function getPriceGroup()
    {
        return $this->PriceGroup;
    }

}
