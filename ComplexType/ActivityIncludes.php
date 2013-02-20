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
     * @var boolean
     */
    protected $DayParts;

    /**
     * @var boolean
     */
    protected $Image;

    /**
     * @var boolean
     */
    protected $ImageUrl;

    /**
     * @var boolean
     */
    protected $Options;

    /**
     * @var boolean
     */
    protected $Price;

    /**
     * @var boolean
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
