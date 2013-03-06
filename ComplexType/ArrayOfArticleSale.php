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
     * @var array
     */
    protected $ArticleSale = array();

    /**
     * @param  array              $articleSale
     * @return ArrayOfArticleSale
     */
    public function setArticleSale(array $articleSale = array())
    {
        $this->ArticleSale = $articleSale;

        return $this;
    }

    /**
     * @return array
     */
    public function getArticleSale()
    {
        if (!is_array($this->ArticleSale)) {
            return array($this->ArticleSale);
        }

        return $this->ArticleSale;
    }
}
