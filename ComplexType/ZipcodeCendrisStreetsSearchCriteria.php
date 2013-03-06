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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ZipcodePattern
     */
    protected $ZipcodePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Number
     */
    protected $Number;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ZipcodeCendrisStreetIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PagingCriteria|null $Paging
     */
    protected $Paging;

    /**
     * @param  string|null                         $zipcodePattern
     * @return ZipcodeCendrisStreetsSearchCriteria
     */
    public function setZipcodePattern($zipcodePattern)
    {
        $this->ZipcodePattern = $zipcodePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipcodePattern()
    {
        return $this->ZipcodePattern;
    }

    /**
     * @param  integer|null                        $number
     * @return ZipcodeCendrisStreetsSearchCriteria
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  ZipcodeCendrisStreetIncludes|null   $includes
     * @return ZipcodeCendrisStreetsSearchCriteria
     */
    public function setIncludes(ZipcodeCendrisStreetIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return ZipcodeCendrisStreetIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  PagingCriteria|null                 $paging
     * @return ZipcodeCendrisStreetsSearchCriteria
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

}
