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

     * maxOccurs = unbounded     * @var array
     */
    protected $CultureSite = array();

    /**
     * @param  array              $cultureSite
     * @return ArrayOfCultureSite
     */
    public function setCultureSite(array $cultureSite = array())
    {
        $this->CultureSite = $cultureSite;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureSite()
    {
        return $this->CultureSite;
    }
}
