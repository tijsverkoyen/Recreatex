<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Image
     */
    protected $Image;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ImageUri
     */
    protected $ImageUri;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Options
     */
    protected $Options;


    /**
     * @param boolean|null $image
     * @return CultureEventIncludes
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param boolean|null $imageUri
     * @return CultureEventIncludes
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }

    /**
     * @param boolean|null $options
     * @return CultureEventIncludes
     */
    public function setOptions($options)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getOptions()
    {
        return $this->Options;
    }


}

