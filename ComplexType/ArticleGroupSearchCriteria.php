<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArticleGroupSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArticleGroupSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\ArticleType|null $ArticleTypes
     */
    protected $ArticleTypes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeImage
     */
    protected $IncludeImage;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeImageUrl
     */
    protected $IncludeImageUrl;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $EmployeeId
     */
    protected $EmployeeId;

    /**
     * @param  SimpleType\ArticleType|null $articleTypes
     * @return ArticleGroupSearchCriteria
     */
    public function setArticleTypes(SimpleType\ArticleType $articleTypes = null)
    {
        $this->ArticleTypes = $articleTypes;

        return $this;
    }

    /**
     * @return SimpleType\ArticleType|null
     */
    public function getArticleTypes()
    {
        return $this->ArticleTypes;
    }

    /**
     * @param  boolean|null               $includeImage
     * @return ArticleGroupSearchCriteria
     */
    public function setIncludeImage($includeImage)
    {
        $this->IncludeImage = $includeImage;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeImage()
    {
        return $this->IncludeImage;
    }

    /**
     * @param  boolean|null               $includeImageUrl
     * @return ArticleGroupSearchCriteria
     */
    public function setIncludeImageUrl($includeImageUrl)
    {
        $this->IncludeImageUrl = $includeImageUrl;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeImageUrl()
    {
        return $this->IncludeImageUrl;
    }

    /**
     * @param  SimpleType\guid|null       $employeeId
     * @return ArticleGroupSearchCriteria
     */
    public function setEmployeeId(SimpleType\guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

}
