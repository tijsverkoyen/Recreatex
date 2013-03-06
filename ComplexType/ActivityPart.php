<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityPart extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityPart';

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var Period
     */
    protected $Period;

    /**
     * @param  string[optional] $comments
     * @return ActivityPart
     */
    public function setComments($comments)
    {
        $this->Comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ActivityPart
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
     * @param  Period[optional] $period
     * @return ActivityPart
     */
    public function setPeriod(Period $period = null)
    {
        $this->Period = $period;

        return $this;
    }

    /**
     * @return Period
     */
    public function getPeriod()
    {
        return $this->Period;
    }
}
