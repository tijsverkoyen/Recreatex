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
    protected $ImageUrl;

    /**
     * @var boolean
     */
    protected $DayParts;

    /**
     * @var boolean
     */
    protected $Options;

    /**
     * @var boolean
     */
    protected $Image;

    /**
     * @param  boolean          $imageUrl
     * @return ActivityIncludes
     */
    public function setImageUrl($imageUrl)
    {
        $this->ImageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }

    /**
     * @param  boolean          $dayParts
     * @return ActivityIncludes
     */
    public function setDayParts($dayParts)
    {
        $this->DayParts = $dayParts;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getDayParts()
    {
        return $this->DayParts;
    }

    /**
     * @param  boolean          $options
     * @return ActivityIncludes
     */
    public function setOptions($options)
    {
        $this->Options = $options;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * @param  boolean          $image
     * @return ActivityIncludes
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
}
