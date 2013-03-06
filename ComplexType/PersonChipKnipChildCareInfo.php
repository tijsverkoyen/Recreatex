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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $ChildCareCommission
     */
    protected $ChildCareCommission;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $ChildCareTreshold
     */
    protected $ChildCareTreshold;

    /**
     * @param  float|null                  $childCareCommission
     * @return PersonChipKnipChildCareInfo
     */
    public function setChildCareCommission($childCareCommission)
    {
        $this->ChildCareCommission = $childCareCommission;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getChildCareCommission()
    {
        return $this->ChildCareCommission;
    }

    /**
     * @param  float|null                  $childCareTreshold
     * @return PersonChipKnipChildCareInfo
     */
    public function setChildCareTreshold($childCareTreshold)
    {
        $this->ChildCareTreshold = $childCareTreshold;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getChildCareTreshold()
    {
        return $this->ChildCareTreshold;
    }

}
