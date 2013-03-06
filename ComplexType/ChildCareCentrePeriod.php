<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentrePeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentrePeriod';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $ChildCareCentreId;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @var integer
     */
    protected $MaxChildren;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ChildCareCentrePeriod
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
     * @param  SimpleType\Guid[optional] $childCareCentreId
     * @return ChildCareCentrePeriod
     */
    public function setChildCareCentreId(SimpleType\Guid $childCareCentreId = null)
    {
        $this->ChildCareCentreId = $childCareCentreId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getChildCareCentreId()
    {
        return $this->ChildCareCentreId;
    }

    /**
     * @param  string[optional]      $from
     * @return ChildCareCentrePeriod
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  string[optional]      $until
     * @return ChildCareCentrePeriod
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }

    /**
     * @param  integer[optional]     $maxChildren
     * @return ChildCareCentrePeriod
     */
    public function setMaxChildren($maxChildren)
    {
        $this->MaxChildren = $maxChildren;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMaxChildren()
    {
        return $this->MaxChildren;
    }

    /**
     * @param  string[optional]      $comment
     * @return ChildCareCentrePeriod
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
}
