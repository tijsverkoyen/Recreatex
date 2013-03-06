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
     * @var boolean
     */
    protected $Audiences;

    /**
     * @var boolean
     */
    protected $Location;

    /**
     * @var boolean
     */
    protected $Subcategories;

    /**
     * @var boolean
     */
    protected $Pricing;

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

    /**
     * @param  boolean[optional]  $audiences
     * @return ExpositionIncludes
     */
    public function setAudiences($audiences)
    {
        $this->Audiences = $audiences;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getAudiences()
    {
        return $this->Audiences;
    }

    /**
     * @param  boolean[optional]  $location
     * @return ExpositionIncludes
     */
    public function setLocation($location)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  boolean[optional]  $subcategories
     * @return ExpositionIncludes
     */
    public function setSubcategories($subcategories)
    {
        $this->Subcategories = $subcategories;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSubcategories()
    {
        return $this->Subcategories;
    }

    /**
     * @param  boolean[optional]  $pricing
     * @return ExpositionIncludes
     */
    public function setPricing($pricing)
    {
        $this->Pricing = $pricing;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPricing()
    {
        return $this->Pricing;
    }
}
