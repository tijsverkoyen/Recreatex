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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PurchaseArticle[] $PurchaseArticle
     */
    protected $PurchaseArticle = array();

    /**
     * @param  PurchaseArticle[]      $purchaseArticle
     * @return ArrayOfPurchaseArticle
     */
    public function setPurchaseArticle(array $purchaseArticle = array())
    {
        $this->PurchaseArticle = $purchaseArticle;

        return $this;
    }

    /**
     * @return PurchaseArticle[]
     */
    public function getPurchaseArticle()
    {
        return $this->PurchaseArticle;
    }

}
