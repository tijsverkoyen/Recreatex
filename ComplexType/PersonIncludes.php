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
     * @var boolean
     */
    protected $Categories;

    /**
     * @var boolean
     */
    protected $PriceGroups;

    /**
     * @var boolean
     */
    protected $Contacts;

    /**
     * @var boolean
     */
    protected $PersonLLVInfos;

    /**
     * @var boolean
     */
    protected $PersonLLVTransferHistories;

    /**
     * @var boolean
     */
    protected $PersonLLVCurrentLessonGroups;

    /**
     * @var boolean
     */
    protected $Relations;

    /**
     * @var boolean
     */
    protected $ChildCareInfo;

    /**
     * @var boolean
     */
    protected $ParentRelations;

    /**
     * @param  boolean[optional] $categories
     * @return PersonIncludes
     */
    public function setCategories($categories)
    {
        $this->Categories = $categories;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param  boolean[optional] $priceGroups
     * @return PersonIncludes
     */
    public function setPriceGroups($priceGroups)
    {
        $this->PriceGroups = $priceGroups;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPriceGroups()
    {
        return $this->PriceGroups;
    }

    /**
     * @param  boolean[optional] $contacts
     * @return PersonIncludes
     */
    public function setContacts($contacts)
    {
        $this->Contacts = $contacts;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param  boolean[optional] $personLLVInfos
     * @return PersonIncludes
     */
    public function setPersonLLVInfos($personLLVInfos)
    {
        $this->PersonLLVInfos = $personLLVInfos;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonLLVInfos()
    {
        return $this->PersonLLVInfos;
    }

    /**
     * @param  boolean[optional] $personLLVTransferHistories
     * @return PersonIncludes
     */
    public function setPersonLLVTransferHistories($personLLVTransferHistories)
    {
        $this->PersonLLVTransferHistories = $personLLVTransferHistories;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonLLVTransferHistories()
    {
        return $this->PersonLLVTransferHistories;
    }

    /**
     * @param  boolean[optional] $personLLVCurrentLessonGroups
     * @return PersonIncludes
     */
    public function setPersonLLVCurrentLessonGroups($personLLVCurrentLessonGroups)
    {
        $this->PersonLLVCurrentLessonGroups = $personLLVCurrentLessonGroups;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonLLVCurrentLessonGroups()
    {
        return $this->PersonLLVCurrentLessonGroups;
    }

    /**
     * @param  boolean[optional] $relations
     * @return PersonIncludes
     */
    public function setRelations($relations)
    {
        $this->Relations = $relations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getRelations()
    {
        return $this->Relations;
    }

    /**
     * @param  boolean[optional] $childCareInfo
     * @return PersonIncludes
     */
    public function setChildCareInfo($childCareInfo)
    {
        $this->ChildCareInfo = $childCareInfo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getChildCareInfo()
    {
        return $this->ChildCareInfo;
    }

    /**
     * @param  boolean[optional] $parentRelations
     * @return PersonIncludes
     */
    public function setParentRelations($parentRelations)
    {
        $this->ParentRelations = $parentRelations;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getParentRelations()
    {
        return $this->ParentRelations;
    }
}
