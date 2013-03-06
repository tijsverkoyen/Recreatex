<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityOption extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityOption';

    /**
     * @var integer
     */
    protected $Amount;

    /**
     * @var SimpleType\Guid
     */
    protected $ArticleId;

    /**
     * @var float
     */
    protected $CustomPrice;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @param  integer[optional] $amount
     * @return ActivityOption
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return integer
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  SimpleType\Guid[optional] $articleId
     * @return ActivityOption
     */
    public function setArticleId(SimpleType\Guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  float[optional] $customPrice
     * @return ActivityOption
     */
    public function setCustomPrice($customPrice)
    {
        $this->CustomPrice = $customPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getCustomPrice()
    {
        return $this->CustomPrice;
    }

    /**
     * @param  string[optional] $description
     * @return ActivityOption
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
     * @param  SimpleType\Guid[optional] $id
     * @return ActivityOption
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
}
