<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonChipKnipChildCareInfo extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonChipKnipChildCareInfo';

    /**
     * @var float
     */
    protected $ChildCareCommission;

    /**
     * @var float
     */
    protected $ChildCareTreshold;

    /**
     * @param  float[optional]             $childCareCommission
     * @return PersonChipKnipChildCareInfo
     */
    public function setChildCareCommission($childCareCommission)
    {
        $this->ChildCareCommission = $childCareCommission;

        return $this;
    }

    /**
     * @return float
     */
    public function getChildCareCommission()
    {
        return $this->ChildCareCommission;
    }

    /**
     * @param  float[optional]             $childCareTreshold
     * @return PersonChipKnipChildCareInfo
     */
    public function setChildCareTreshold($childCareTreshold)
    {
        $this->ChildCareTreshold = $childCareTreshold;

        return $this;
    }

    /**
     * @return float
     */
    public function getChildCareTreshold()
    {
        return $this->ChildCareTreshold;
    }
}
