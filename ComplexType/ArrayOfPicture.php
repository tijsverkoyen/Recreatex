<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPicture extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPicture';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $Picture = array();

    /**
     * @param  array          $picture
     * @return ArrayOfPicture
     */
    public function setPicture(array $picture = array())
    {
        $this->Picture = $picture;

        return $this;
    }

    /**
     * @return array
     */
    public function getPicture()
    {
        return $this->Picture;
    }
}
