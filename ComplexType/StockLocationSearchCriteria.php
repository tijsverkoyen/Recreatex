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
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var SimpleTypeGuid
     */
    protected $ArticleId;

    /**
     * @var SimpleTypeGuid
     */
    protected $EmployeeId;

    /**
     * @param  PagingCriteria[optional]    $paging
     * @return StockLocationSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria
     */
    public function getPaging()
    {
        return $this->Paging;
    }

    /**
     * @param  SimpleType\Guid[optional]   $articleId
     * @return StockLocationSearchCriteria
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
     * @param  SimpleType\Guid[optional]   $employeeId
     * @return StockLocationSearchCriteria
     */
    public function setEmployeeId(SimpleType\Guid $employeeId = null)
    {
        $this->EmployeeId = $employeeId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }
}
