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
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $PageIndex
     */
    protected $PageIndex;

    /**
     * The number of items per page
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $PageSize
     */
    protected $PageSize;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SortingCriteria|null $Sorting
     */
    protected $Sorting;

    /**
     * @param  integer|null   $pageIndex
     * @return PagingCriteria
     */
    public function setPageIndex($pageIndex)
    {
        $this->PageIndex = $pageIndex;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPageIndex()
    {
        return $this->PageIndex;
    }

    /**
     * @param  integer|null   $pageSize
     * @return PagingCriteria
     */
    public function setPageSize($pageSize)
    {
        $this->PageSize = $pageSize;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getPageSize()
    {
        return $this->PageSize;
    }

    /**
     * @param  SortingCriteria|null $sorting
     * @return PagingCriteria
     */
    public function setSorting(SortingCriteria $sorting = null)
    {
        $this->Sorting = $sorting;

        return $this;
    }

    /**
     * @return SortingCriteria|null
     */
    public function getSorting()
    {
        return $this->Sorting;
    }
}
