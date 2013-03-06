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
     * @var SimpleTypeGuid
     */
    protected $ID;

    /**
     * @var string
     */
    protected $NamePattern;

    /**
     * @var ArrayOfGuid
     */
    protected $ArticleGroupIds;

    /**
     * @var string
     */
    protected $FromDate;

    /**
     * @var string
     */
    protected $UntilDate;

    /**
     * @var string
     */
    protected $DeliveryDate;

    /**
     * @var string
     */
    protected $ReturnDate;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @var RentalArticleIncludes
     */
    protected $Includes;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonID;

    /**
     * @param  SimpleType\Guid[optional]   $iD
     * @return RentalArticleSearchCriteria
     */
    public function setID(SimpleType\Guid $iD = null)
    {
        $this->ID = $iD;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param  string[optional]            $namePattern
     * @return RentalArticleSearchCriteria
     */
    public function setNamePattern($namePattern)
    {
        $this->NamePattern = $namePattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePattern()
    {
        return $this->NamePattern;
    }

    /**
     * @param  ArrayOfguid[optional]       $articleGroupIds
     * @return RentalArticleSearchCriteria
     */
    public function setArticleGroupIds(ArrayOfguid $articleGroupIds = null)
    {
        $this->ArticleGroupIds = $articleGroupIds;

        return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getArticleGroupIds()
    {
        return $this->ArticleGroupIds;
    }

    /**
     * @param  string[optional]            $fromDate
     * @return RentalArticleSearchCriteria
     */
    public function setFromDate($fromDate)
    {
        $this->FromDate = $fromDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }

    /**
     * @param  string[optional]            $untilDate
     * @return RentalArticleSearchCriteria
     */
    public function setUntilDate($untilDate)
    {
        $this->UntilDate = $untilDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntilDate()
    {
        return $this->UntilDate;
    }

    /**
     * @param  string[optional]            $deliveryDate
     * @return RentalArticleSearchCriteria
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->DeliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param  string[optional]            $returnDate
     * @return RentalArticleSearchCriteria
     */
    public function setReturnDate($returnDate)
    {
        $this->ReturnDate = $returnDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnDate()
    {
        return $this->ReturnDate;
    }

    /**
     * @param  PagingCriteria[optional]    $paging
     * @return RentalArticleSearchCriteria
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
     * @param  RentalArticleIncludes[optional] $includes
     * @return RentalArticleSearchCriteria
     */
    public function setIncludes(RentalArticleIncludes $includes = null)
    {
        $this->Includes = $includes;

        return $this;
    }

    /**
     * @return RentalArticleIncludes
     */
    public function getIncludes()
    {
        return $this->Includes;
    }

    /**
     * @param  SimpleType\Guid[optional]   $personID
     * @return RentalArticleSearchCriteria
     */
    public function setPersonID(SimpleType\Guid $personID = null)
    {
        $this->PersonID = $personID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonID()
    {
        return $this->PersonID;
    }
}
