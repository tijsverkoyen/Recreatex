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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RentalArticle[] $RentalArticle
     */
    protected $RentalArticle = array();

    /**
     * @param  RentalArticle[]      $rentalArticle
     * @return ArrayOfRentalArticle
     */
    public function setRentalArticle(array $rentalArticle = array())
    {
        $this->RentalArticle = $rentalArticle;

        return $this;
    }

    /**
     * @return RentalArticle[]
     */
    public function getRentalArticle()
    {
        return $this->RentalArticle;
    }

}
