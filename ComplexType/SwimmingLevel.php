<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SwimmingLevel extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SwimmingLevel';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $ShortName;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var integer
     */
    protected $AmountOfLessons;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return SwimmingLevel
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $shortName
     * @return SwimmingLevel
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string[optional] $description
     * @return SwimmingLevel
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  string[optional] $comment
     * @return SwimmingLevel
     */
    public function setComment($comment)
    {
        $this->Comment = $comment;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param  integer[optional] $amountOfLessons
     * @return SwimmingLevel
     */
    public function setAmountOfLessons($amountOfLessons)
    {
        $this->AmountOfLessons = $amountOfLessons;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAmountOfLessons()
    {
        return $this->AmountOfLessons;
    }
}
