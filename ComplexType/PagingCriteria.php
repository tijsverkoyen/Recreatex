<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 * Determines how paging is applied to the search results
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PagingCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PagingCriteria';

    /**
     * The index of the page. The index starts at zero (zero-based)
     * @var integer
     */
    protected $PageIndex;

    /**
     * The number of items per page
     * @var integer
     */
    protected $PageSize;

    /**
     * @var SortingCriteria
     */
    protected $Sorting;

    /**
     * @param  integer[optional] $pageIndex
     * @return PagingCriteria
     */
    public function setPageIndex($pageIndex)
    {
        $this->PageIndex = $pageIndex;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPageIndex()
    {
        return $this->PageIndex;
    }

    /**
     * @param  integer[optional] $pageSize
     * @return PagingCriteria
     */
    public function setPageSize($pageSize)
    {
        $this->PageSize = $pageSize;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * @param  SortingCriteria[optional] $sorting
     * @return PagingCriteria
     */
    public function setSorting(SortingCriteria $sorting = null)
    {
        $this->Sorting = $sorting;

        return $this;
    }

    /**
     * @return SortingCriteria
     */
    public function getSorting()
    {
        return $this->Sorting;
    }
}
