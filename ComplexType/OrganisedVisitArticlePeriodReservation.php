<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisitArticlePeriodReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisitArticlePeriodReservation';

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
     * @var string|null $ArticleCode
     */
    protected $ArticleCode;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArticleName
     */
    protected $ArticleName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ArticleDescription
     */
    protected $ArticleDescription;

    /**
     * @param  SimpleType\guid|null                   $articleId
     * @return OrganisedVisitArticlePeriodReservation
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
     * @param  string|null                            $articleCode
     * @return OrganisedVisitArticlePeriodReservation
     */
    public function setArticleCode($articleCode)
    {
        $this->ArticleCode = $articleCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleCode()
    {
        return $this->ArticleCode;
    }

    /**
     * @param  string|null                            $articleName
     * @return OrganisedVisitArticlePeriodReservation
     */
    public function setArticleName($articleName)
    {
        $this->ArticleName = $articleName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleName()
    {
        return $this->ArticleName;
    }

    /**
     * @param  string|null                            $articleDescription
     * @return OrganisedVisitArticlePeriodReservation
     */
    public function setArticleDescription($articleDescription)
    {
        $this->ArticleDescription = $articleDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleDescription()
    {
        return $this->ArticleDescription;
    }

}
