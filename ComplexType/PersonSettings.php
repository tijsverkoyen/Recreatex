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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSubcategory|null $Subcategories
     */
    protected $Subcategories;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $SubscribeMailingList
     */
    protected $SubscribeMailingList;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPersonPriceGroup|null $PriceGroups
     */
    protected $PriceGroups;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPersonLLVInfo|null $PersonLLVInfos
     */
    protected $PersonLLVInfos;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPersonLLVTransferHistory|null $PersonLLVTransferHistories
     */
    protected $PersonLLVTransferHistories;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfLessonGroup|null $PersonLLVCurrentLessonGroups
     */
    protected $PersonLLVCurrentLessonGroups;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PersonChildCareInfo|null $PersonChildCareInfo
     */
    protected $PersonChildCareInfo;

    /**
     * @param  ArrayOfSubcategory|null $subcategories
     * @return PersonSettings
     */
    public function setSubcategories(ArrayOfSubcategory $subcategories = null)
    {
        $this->Subcategories = $subcategories;

        return $this;
    }

    /**
     * @return ArrayOfSubcategory|null
     */
    public function getSubcategories()
    {
        return $this->Subcategories;
    }

    /**
     * @param  boolean|null   $subscribeMailingList
     * @return PersonSettings
     */
    public function setSubscribeMailingList($subscribeMailingList)
    {
        $this->SubscribeMailingList = $subscribeMailingList;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getSubscribeMailingList()
    {
        return $this->SubscribeMailingList;
    }

    /**
     * @param  ArrayOfPersonPriceGroup|null $priceGroups
     * @return PersonSettings
     */
    public function setPriceGroups(ArrayOfPersonPriceGroup $priceGroups = null)
    {
        $this->PriceGroups = $priceGroups;

        return $this;
    }

    /**
     * @return ArrayOfPersonPriceGroup|null
     */
    public function getPriceGroups()
    {
        return $this->PriceGroups;
    }

    /**
     * @param  ArrayOfPersonLLVInfo|null $personLLVInfos
     * @return PersonSettings
     */
    public function setPersonLLVInfos(ArrayOfPersonLLVInfo $personLLVInfos = null)
    {
        $this->PersonLLVInfos = $personLLVInfos;

        return $this;
    }

    /**
     * @return ArrayOfPersonLLVInfo|null
     */
    public function getPersonLLVInfos()
    {
        return $this->PersonLLVInfos;
    }

    /**
     * @param  ArrayOfPersonLLVTransferHistory|null $personLLVTransferHistories
     * @return PersonSettings
     */
    public function setPersonLLVTransferHistories(ArrayOfPersonLLVTransferHistory $personLLVTransferHistories = null)
    {
        $this->PersonLLVTransferHistories = $personLLVTransferHistories;

        return $this;
    }

    /**
     * @return ArrayOfPersonLLVTransferHistory|null
     */
    public function getPersonLLVTransferHistories()
    {
        return $this->PersonLLVTransferHistories;
    }

    /**
     * @param  ArrayOfLessonGroup|null $personLLVCurrentLessonGroups
     * @return PersonSettings
     */
    public function setPersonLLVCurrentLessonGroups(ArrayOfLessonGroup $personLLVCurrentLessonGroups = null)
    {
        $this->PersonLLVCurrentLessonGroups = $personLLVCurrentLessonGroups;

        return $this;
    }

    /**
     * @return ArrayOfLessonGroup|null
     */
    public function getPersonLLVCurrentLessonGroups()
    {
        return $this->PersonLLVCurrentLessonGroups;
    }

    /**
     * @param  PersonChildCareInfo|null $personChildCareInfo
     * @return PersonSettings
     */
    public function setPersonChildCareInfo(PersonChildCareInfo $personChildCareInfo = null)
    {
        $this->PersonChildCareInfo = $personChildCareInfo;

        return $this;
    }

    /**
     * @return PersonChildCareInfo|null
     */
    public function getPersonChildCareInfo()
    {
        return $this->PersonChildCareInfo;
    }

}
