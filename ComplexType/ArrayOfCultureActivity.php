<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureActivity';

    /**
     * @var array
     */
    protected $CultureActivity = array();

    /**
     * @param  array      $cultureActivity
     * @return ArrayOfCultureActivity
     */
    public function setCultureActivity(array $cultureActivity = array())
    {
        $this->CultureActivity = $cultureActivity;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureActivity()
    {
        return $this->CultureActivity;
    }
}
