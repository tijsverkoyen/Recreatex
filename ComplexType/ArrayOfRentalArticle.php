<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRentalArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRentalArticle';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $RentalArticle = array();

    /**
     * @param  array                $rentalArticle
     * @return ArrayOfRentalArticle
     */
    public function setRentalArticle(array $rentalArticle = array())
    {
        $this->RentalArticle = $rentalArticle;

        return $this;
    }

    /**
     * @return array
     */
    public function getRentalArticle()
    {
        return $this->RentalArticle;
    }
}
