<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPurchaseArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPurchaseArticle';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $PurchaseArticle = array();

    /**
     * @param  array                  $purchaseArticle
     * @return ArrayOfPurchaseArticle
     */
    public function setPurchaseArticle(array $purchaseArticle = array())
    {
        $this->PurchaseArticle = $purchaseArticle;

        return $this;
    }

    /**
     * @return array
     */
    public function getPurchaseArticle()
    {
        return $this->PurchaseArticle;
    }
}
