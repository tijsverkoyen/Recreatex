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
}
