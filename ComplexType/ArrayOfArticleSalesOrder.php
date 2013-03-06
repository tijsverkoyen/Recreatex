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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleSalesOrder[] $ArticleSalesOrder
     */
    protected $ArticleSalesOrder = array();

    /**
     * @param  ArticleSalesOrder[]      $articleSalesOrder
     * @return ArrayOfArticleSalesOrder
     */
    public function setArticleSalesOrder(array $articleSalesOrder = array())
    {
        $this->ArticleSalesOrder = $articleSalesOrder;

        return $this;
    }

    /**
     * @return ArticleSalesOrder[]
     */
    public function getArticleSalesOrder()
    {
        return $this->ArticleSalesOrder;
    }

}
