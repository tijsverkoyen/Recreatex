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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Amount
     */
    protected $Amount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ArticleId
     */
    protected $ArticleId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $CustomPrice
     */
    protected $CustomPrice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**
     * @param  integer|null   $amount
     * @return ActivityOption
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  SimpleType\guid|null $articleId
     * @return ActivityOption
     */
    public function setArticleId(SimpleType\guid $articleId = null)
    {
        $this->ArticleId = $articleId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getArticleId()
    {
        return $this->ArticleId;
    }

    /**
     * @param  float|null     $customPrice
     * @return ActivityOption
     */
    public function setCustomPrice($customPrice)
    {
        $this->CustomPrice = $customPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getCustomPrice()
    {
        return $this->CustomPrice;
    }

    /**
     * @param  string|null    $description
     * @return ActivityOption
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  SimpleType\guid|null $id
     * @return ActivityOption
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

}
