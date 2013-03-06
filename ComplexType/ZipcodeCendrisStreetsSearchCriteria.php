<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ZipcodeCendrisStreetsSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ZipcodeCendrisStreetsSearchCriteria';

    /**
     * @var string
     */
    protected $ZipcodePattern;

    /**
     * @var integer
     */
    protected $Number;

    /**
     * @var ZipcodeCendrisStreetIncludes
     */
    protected $Includes;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  string[optional]                    $zipcodePattern
     * @return ZipcodeCendrisStreetsSearchCriteria
     */
    public function setZipcodePattern($zipcodePattern)
    {
        $this->ZipcodePattern = $zipcodePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcodePattern()
    {
        return $this->ZipcodePattern;
    }

    /**
     * @param  integer[optional]                   $number
     * @return ZipcodeCendrisStreetsSearchCriteria
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  ZipcodeCendrisStreetIncludes[optional] $includes
     * @return ZipcodeCendrisStreetsSearchCriteria
     */
    public function setIncludes(ZipcodeCendrisStreetIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ZipcodeCendrisStreetIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria[optional]            $paging
     * @return ZipcodeCendrisStreetsSearchCriteria
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
