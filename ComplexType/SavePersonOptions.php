<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SavePersonOptions extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SavePersonOptions';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $CreateZipcodes
     */
    protected $CreateZipcodes;

    /**
     * @param  boolean|null      $createZipcodes
     * @return SavePersonOptions
     */
    public function setCreateZipcodes($createZipcodes)
    {
        $this->CreateZipcodes = $createZipcodes;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCreateZipcodes()
    {
        return $this->CreateZipcodes;
    }

}
