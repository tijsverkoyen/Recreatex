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
}
