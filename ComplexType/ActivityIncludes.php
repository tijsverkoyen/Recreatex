<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $DayParts
     */
    protected $DayParts;

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
     * @var boolean|null $ImageUrl
     */
    protected $ImageUrl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Options
     */
    protected $Options;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Price
     */
    protected $Price;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Type
     */
    protected $Type;

    /**
     * @param  boolean|null     $dayParts
     * @return ActivityIncludes
     */
    public function setDayParts($dayParts)
    {
        $this->DayParts = $dayParts;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getDayParts()
    {
        return $this->DayParts;
    }

    /**
     * @param  boolean|null     $image
     * @return ActivityIncludes
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
     * @param  boolean|null     $imageUrl
     * @return ActivityIncludes
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  boolean|null     $options
     * @return ActivityIncludes
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

    /**
     * @param  boolean|null     $price
     * @return ActivityIncludes
     */
    public function setPrice($price)
    {
        $this->Price = $price;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param  boolean|null     $type
     * @return ActivityIncludes
     */
    public function setType($type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getType()
    {
        return $this->Type;
    }
}
