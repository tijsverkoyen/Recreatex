<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventIncludes';

    /**
     * @var boolean
     */
    protected $Image;

    /**
     * @var boolean
     */
    protected $ImageUri;

    /**
     * @var boolean
     */
    protected $Options;

    /**
     * @param  boolean|null         $image
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
     * @param  boolean|null         $imageUri
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
     * @param  boolean|null         $options
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
