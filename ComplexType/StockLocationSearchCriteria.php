<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class StockLocationSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'StockLocationSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

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
     * @var SimpleType\guid|null $EmployeeId
     */
    protected $EmployeeId;

    /**
     * @param  PagingCriteria|null         $paging
     * @return StockLocationSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  SimpleType\guid|null        $articleId
     * @return StockLocationSearchCriteria
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
     * @param  SimpleType\guid|null        $employeeId
     * @return StockLocationSearchCriteria
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
