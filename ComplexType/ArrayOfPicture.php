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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Picture[] $Picture
     */
    protected $Picture = array();

    /**
     * @param  Picture[]      $picture
     * @return ArrayOfPicture
     */
    public function setPicture(array $picture = array())
    {
        $this->Picture = $picture;

        return $this;
    }

    /**
     * @return Picture[]
     */
    public function getPicture()
    {
        return $this->Picture;
    }

}
