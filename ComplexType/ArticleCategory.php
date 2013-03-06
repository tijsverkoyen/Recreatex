<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleCategory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleCategory';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ShortName
     */
    protected $ShortName;

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
     * @var integer|null $Level
     */
    protected $Level;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ParentCategoryId
     */
    protected $ParentCategoryId;

    /**
     * @param  SimpleType\guid|null $id
     * @return ArticleCategory
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

    /**
     * @param  string|null     $shortName
     * @return ArticleCategory
     */
    public function setShortName($shortName)
    {
        $this->ShortName = $shortName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param  string|null     $description
     * @return ArticleCategory
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
     * @param  integer|null    $level
     * @return ArticleCategory
     */
    public function setLevel($level)
    {
        $this->Level = $level;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param  SimpleType\guid|null $parentCategoryId
     * @return ArticleCategory
     */
    public function setParentCategoryId(SimpleType\guid $parentCategoryId = null)
    {
        $this->ParentCategoryId = $parentCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getParentCategoryId()
    {
        return $this->ParentCategoryId;
    }

}
