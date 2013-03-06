<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSalesItem';

    /**
     * @var array
     */
    protected $SalesItem = array();

    /**
     * @param  array            $salesItem
     * @return ArrayOfSalesItem
     */
    public function setSalesItem(array $salesItem = array())
    {
        $this->SalesItem = $salesItem;

        return $this;
    }

    /**
     * @return array
     */
    public function getSalesItem()
    {
	    if(!is_array($this->SalesItem)) {
		    return array($this->SalesItem);
	    }
	    return $this->SalesItem;
    }
}
