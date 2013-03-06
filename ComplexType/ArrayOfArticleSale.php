<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfArticleSale extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfArticleSale';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ArticleSale[] $ArticleSale
     */
    protected $ArticleSale = array();

    /**
     * @param  ArticleSale[]      $articleSale
     * @return ArrayOfArticleSale
     */
    public function setArticleSale(array $articleSale = array())
    {
        $this->ArticleSale = $articleSale;

        return $this;
    }

    /**
     * @return ArticleSale[]
     */
    public function getArticleSale()
    {
        return $this->ArticleSale;
    }

}
