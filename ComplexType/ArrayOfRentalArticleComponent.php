<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRentalArticleComponent extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRentalArticleComponent';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var RentalArticleComponent[] $RentalArticleComponent
     */
    protected $RentalArticleComponent = array();

    /**
     * @param  RentalArticleComponent[]      $rentalArticleComponent
     * @return ArrayOfRentalArticleComponent
     */
    public function setRentalArticleComponent(array $rentalArticleComponent = array())
    {
        $this->RentalArticleComponent = $rentalArticleComponent;

        return $this;
    }

    /**
     * @return RentalArticleComponent[]
     */
    public function getRentalArticleComponent()
    {
        return $this->RentalArticleComponent;
    }

}
