<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPriceGroupActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPriceGroupActivity';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PriceGroupActivity[] $PriceGroupActivity
     */
    protected $PriceGroupActivity = array();

    /**
     * @param  PriceGroupActivity[]      $priceGroupActivity
     * @return ArrayOfPriceGroupActivity
     */
    public function setPriceGroupActivity(array $priceGroupActivity = array())
    {
        $this->PriceGroupActivity = $priceGroupActivity;

        return $this;
    }

    /**
     * @return PriceGroupActivity[]
     */
    public function getPriceGroupActivity()
    {
        return $this->PriceGroupActivity;
    }

}
