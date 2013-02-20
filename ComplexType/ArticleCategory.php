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
     * @var SimpleType\Guid
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
     * @var integer
     */
    protected $Level;

    /**
     * @var SimpleType\Guid
     */
    protected $ParentCategoryId;

    /**
     * @param  SimpleType\Guid|null $id
     * @return ArticleCategory
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
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
     * @param  SimpleType\Guid|null $parentCategoryId
     * @return ArticleCategory
     */
    public function setParentCategoryId(SimpleType\Guid $parentCategoryId = null)
    {
        $this->ParentCategoryId = $parentCategoryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getParentCategoryId()
    {
        return $this->ParentCategoryId;
    }
}
