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

     * maxOccurs = unbounded     * @var array
     */
    protected $PriceGroupActivity = array();

    /**
     * @param  array                     $priceGroupActivity
     * @return ArrayOfPriceGroupActivity
     */
    public function setPriceGroupActivity(array $priceGroupActivity = array())
    {
        $this->PriceGroupActivity = $priceGroupActivity;

        return $this;
    }

    /**
     * @return array
     */
    public function getPriceGroupActivity()
    {
        return $this->PriceGroupActivity;
    }
}
