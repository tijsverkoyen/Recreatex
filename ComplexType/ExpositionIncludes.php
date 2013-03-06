<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionIncludes';

    /**
     * @var boolean
     */
    protected $Image;

    /**
     * @var boolean
     */
    protected $ImageUri;

    /**
     * @param  boolean[optional]  $image
     * @return ExpositionIncludes
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param  boolean[optional]  $imageUri
     * @return ExpositionIncludes
     */
    public function setImageUri($imageUri)
    {
        $this->ImageUri = $imageUri;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImageUri()
    {
        return $this->ImageUri;
    }
}
