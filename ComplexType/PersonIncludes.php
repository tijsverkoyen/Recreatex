<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Categories
     */
    protected $Categories;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PriceGroups
     */
    protected $PriceGroups;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Contacts
     */
    protected $Contacts;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonLLVInfos
     */
    protected $PersonLLVInfos;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonLLVTransferHistories
     */
    protected $PersonLLVTransferHistories;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $PersonLLVCurrentLessonGroups
     */
    protected $PersonLLVCurrentLessonGroups;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Relations
     */
    protected $Relations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ChildCareInfo
     */
    protected $ChildCareInfo;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ParentRelations
     */
    protected $ParentRelations;

    /**
     * @param  boolean|null   $categories
     * @return PersonIncludes
     */
    public function setCategories($categories)
    {
        $this->Categories = $categories;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param  boolean|null   $priceGroups
     * @return PersonIncludes
     */
    public function setPriceGroups($priceGroups)
    {
        $this->PriceGroups = $priceGroups;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPriceGroups()
    {
        return $this->PriceGroups;
    }

    /**
     * @param  boolean|null   $contacts
     * @return PersonIncludes
     */
    public function setContacts($contacts)
    {
        $this->Contacts = $contacts;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param  boolean|null   $personLLVInfos
     * @return PersonIncludes
     */
    public function setPersonLLVInfos($personLLVInfos)
    {
        $this->PersonLLVInfos = $personLLVInfos;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonLLVInfos()
    {
        return $this->PersonLLVInfos;
    }

    /**
     * @param  boolean|null   $personLLVTransferHistories
     * @return PersonIncludes
     */
    public function setPersonLLVTransferHistories($personLLVTransferHistories)
    {
        $this->PersonLLVTransferHistories = $personLLVTransferHistories;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonLLVTransferHistories()
    {
        return $this->PersonLLVTransferHistories;
    }

    /**
     * @param  boolean|null   $personLLVCurrentLessonGroups
     * @return PersonIncludes
     */
    public function setPersonLLVCurrentLessonGroups($personLLVCurrentLessonGroups)
    {
        $this->PersonLLVCurrentLessonGroups = $personLLVCurrentLessonGroups;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getPersonLLVCurrentLessonGroups()
    {
        return $this->PersonLLVCurrentLessonGroups;
    }

    /**
     * @param  boolean|null   $relations
     * @return PersonIncludes
     */
    public function setRelations($relations)
    {
        $this->Relations = $relations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getRelations()
    {
        return $this->Relations;
    }

    /**
     * @param  boolean|null   $childCareInfo
     * @return PersonIncludes
     */
    public function setChildCareInfo($childCareInfo)
    {
        $this->ChildCareInfo = $childCareInfo;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getChildCareInfo()
    {
        return $this->ChildCareInfo;
    }

    /**
     * @param  boolean|null   $parentRelations
     * @return PersonIncludes
     */
    public function setParentRelations($parentRelations)
    {
        $this->ParentRelations = $parentRelations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getParentRelations()
    {
        return $this->ParentRelations;
    }

}
