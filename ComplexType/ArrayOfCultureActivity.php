<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureActivity';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureActivity[] $CultureActivity
     */
    protected $CultureActivity = array();


    /**
     * @param CultureActivity[] $cultureActivity
     * @return ArrayOfCultureActivity
     */
    public function setCultureActivity(array $cultureActivity = array())
    {
        $this->CultureActivity = $cultureActivity;

        return $this;
    }

    /**
     * @return CultureActivity[]
     */
    public function getCultureActivity()
    {
        return $this->CultureActivity;
    }


}

