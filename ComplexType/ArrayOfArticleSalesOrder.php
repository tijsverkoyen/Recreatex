<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleSalesOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleSalesOrder';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $ArticleSalesOrder = array();

    /**
     * @param  array                    $articleSalesOrder
     * @return ArrayOfArticleSalesOrder
     */
    public function setArticleSalesOrder(array $articleSalesOrder = array())
    {
        $this->ArticleSalesOrder = $articleSalesOrder;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleSalesOrder()
    {
        if (!is_array($this->ArticleSalesOrder)) {
            return array($this->ArticleSalesOrder);
        }

        return $this->ArticleSalesOrder;
    }
}
