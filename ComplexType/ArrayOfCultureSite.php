<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureSite extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureSite';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureSite[] $CultureSite
     */
    protected $CultureSite = array();

    /**
     * @param  CultureSite[]      $cultureSite
     * @return ArrayOfCultureSite
     */
    public function setCultureSite(array $cultureSite = array())
    {
        $this->CultureSite = $cultureSite;

        return $this;
    }

    /**
     * @return CultureSite[]
     */
    public function getCultureSite()
    {
        return $this->CultureSite;
    }

}
