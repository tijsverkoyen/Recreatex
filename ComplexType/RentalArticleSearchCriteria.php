<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalArticleSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalArticleSearchCriteria';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ID
     */
    protected $ID;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $NamePattern
     */
    protected $NamePattern;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfguid|null $ArticleGroupIds
     */
    protected $ArticleGroupIds;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromDate
     */
    protected $FromDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $UntilDate
     */
    protected $UntilDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $DeliveryDate
     */
    protected $DeliveryDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ReturnDate
     */
    protected $ReturnDate;

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
     * @var RentalArticleIncludes|null $Includes
     */
    protected $Includes;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonID
     */
    protected $PersonID;

    /**
     * @param  SimpleType\guid|null        $iD
     * @return RentalArticleSearchCriteria
     */
    public function setID(SimpleType\guid $iD = null)
    {
        $this->ID = $iD;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param  string|null                 $namePattern
     * @return RentalArticleSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  ArrayOfguid|null            $articleGroupIds
     * @return RentalArticleSearchCriteria
     */
    public function setArticleGroupIds(ArrayOfguid $articleGroupIds = null)
    {
        $this->ArticleGroupIds = $articleGroupIds;

        return $this;
    }

    /**
     * @return ArrayOfguid|null
     */
    public function getArticleGroupIds()
    {
        return $this->ArticleGroupIds;
    }

    /**
     * @param  string|null                 $fromDate
     * @return RentalArticleSearchCriteria
     */
    public function setFromDate($fromDate)
    {
        $this->FromDate = $fromDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }

    /**
     * @param  string|null                 $untilDate
     * @return RentalArticleSearchCriteria
     */
    public function setUntilDate($untilDate)
    {
        $this->UntilDate = $untilDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntilDate()
    {
        return $this->UntilDate;
    }

    /**
     * @param  string|null                 $deliveryDate
     * @return RentalArticleSearchCriteria
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param  string|null                 $returnDate
     * @return RentalArticleSearchCriteria
     */
    public function setReturnDate($returnDate)
    {
        $this->ReturnDate = $returnDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReturnDate()
    {
        return $this->ReturnDate;
    }

    /**
     * @param  PagingCriteria|null         $paging
     * @return RentalArticleSearchCriteria
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
     * @param  RentalArticleIncludes|null  $includes
     * @return RentalArticleSearchCriteria
     */
    public function setIncludes(RentalArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return RentalArticleIncludes|null
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  SimpleType\guid|null        $personID
     * @return RentalArticleSearchCriteria
     */
    public function setPersonID(SimpleType\guid $personID = null)
    {
        $this->PersonID = $personID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonID()
    {
        return $this->PersonID;
    }

}
