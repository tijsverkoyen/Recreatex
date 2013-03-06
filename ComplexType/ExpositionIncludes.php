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
     * @var boolean|null $Audiences
     */
    protected $Audiences;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Location
     */
    protected $Location;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Subcategories
     */
    protected $Subcategories;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Pricing
     */
    protected $Pricing;

    /**
     * @param  boolean|null       $image
     * @return ExpositionIncludes
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
     * @param  boolean|null       $imageUri
     * @return ExpositionIncludes
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
     * @param  boolean|null       $audiences
     * @return ExpositionIncludes
     */
    public function setAudiences($audiences)
    {
        $this->Audiences = $audiences;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getAudiences()
    {
        return $this->Audiences;
    }

    /**
     * @param  boolean|null       $location
     * @return ExpositionIncludes
     */
    public function setLocation($location)
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param  boolean|null       $subcategories
     * @return ExpositionIncludes
     */
    public function setSubcategories($subcategories)
    {
        $this->Subcategories = $subcategories;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSubcategories()
    {
        return $this->Subcategories;
    }

    /**
     * @param  boolean|null       $pricing
     * @return ExpositionIncludes
     */
    public function setPricing($pricing)
    {
        $this->Pricing = $pricing;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPricing()
    {
        return $this->Pricing;
    }

}
