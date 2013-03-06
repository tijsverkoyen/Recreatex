<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 * The search criteria that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ListCountriesCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ListCountriesCriteria';

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  PagingCriteria[optional] $paging
     * @return ListCountriesCriteria
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
}
