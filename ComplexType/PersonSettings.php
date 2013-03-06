<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonSettings extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonSettings';

    /**
     * @var ArrayOfSubcategory
     */
    protected $Subcategories;

    /**
     * @var boolean
     */
    protected $SubscribeMailingList;

    /**
     * @var ArrayOfPersonPriceGroup[optional] $PriceGroups
     */
    protected $PriceGroups;

    /**
     * @var ArrayOfPersonLLVInfo
     */
    protected $PersonLLVInfos;

    /**
     * @var ArrayOfPersonLLVTransferHistory
     */
    protected $PersonLLVTransferHistories;

    /**
     * @var ArrayOfLessonGroup
     */
    protected $PersonLLVCurrentLessonGroups;

    /**
     * @var PersonChildCareInfo
     */
    protected $PersonChildCareInfo;

    /**
     * @param  ArrayOfSubcategory[optional] $subcategories
     * @return PersonSettings
     */
    public function setSubcategories(ArrayOfSubcategory $subcategories = null)
    {
        $this->Subcategories = $subcategories;

        return $this;
    }

    /**
     * @return ArrayOfSubcategory
     */
    public function getSubcategories()
    {
        return $this->Subcategories;
    }

    /**
     * @param  boolean[optional] $subscribeMailingList
     * @return PersonSettings
     */
    public function setSubscribeMailingList($subscribeMailingList)
    {
        $this->SubscribeMailingList = $subscribeMailingList;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSubscribeMailingList()
    {
        return $this->SubscribeMailingList;
    }

    /**
     * @param  ArrayOfPersonPriceGroup[optional] $priceGroups
     * @return PersonSettings
     */
    public function setPriceGroups(ArrayOfPersonPriceGroup $priceGroups = null)
    {
        $this->PriceGroups = $priceGroups;

        return $this;
    }

    /**
     * @return ArrayOfPersonPriceGroup
     */
    public function getPriceGroups()
    {
        return $this->PriceGroups;
    }

    /**
     * @param  ArrayOfPersonLLVInfo[optional] $personLLVInfos
     * @return PersonSettings
     */
    public function setPersonLLVInfos(ArrayOfPersonLLVInfo $personLLVInfos = null)
    {
        $this->PersonLLVInfos = $personLLVInfos;

        return $this;
    }

    /**
     * @return ArrayOfPersonLLVInfo
     */
    public function getPersonLLVInfos()
    {
        return $this->PersonLLVInfos;
    }

    /**
     * @param  ArrayOfPersonLLVTransferHistory[optional] $personLLVTransferHistories
     * @return PersonSettings
     */
    public function setPersonLLVTransferHistories(ArrayOfPersonLLVTransferHistory $personLLVTransferHistories = null)
    {
        $this->PersonLLVTransferHistories = $personLLVTransferHistories;

        return $this;
    }

    /**
     * @return ArrayOfPersonLLVTransferHistory
     */
    public function getPersonLLVTransferHistories()
    {
        return $this->PersonLLVTransferHistories;
    }

    /**
     * @param  ArrayOfLessonGroup[optional] $personLLVCurrentLessonGroups
     * @return PersonSettings
     */
    public function setPersonLLVCurrentLessonGroups(ArrayOfLessonGroup $personLLVCurrentLessonGroups = null)
    {
        $this->PersonLLVCurrentLessonGroups = $personLLVCurrentLessonGroups;

        return $this;
    }

    /**
     * @return ArrayOfLessonGroup
     */
    public function getPersonLLVCurrentLessonGroups()
    {
        return $this->PersonLLVCurrentLessonGroups;
    }

    /**
     * @param  PersonChildCareInfo[optional] $personChildCareInfo
     * @return PersonSettings
     */
    public function setPersonChildCareInfo(PersonChildCareInfo $personChildCareInfo = null)
    {
        $this->PersonChildCareInfo = $personChildCareInfo;

        return $this;
    }

    /**
     * @return PersonChildCareInfo
     */
    public function getPersonChildCareInfo()
    {
        return $this->PersonChildCareInfo;
    }
}
