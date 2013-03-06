<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonChipKnip extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonChipKnip';

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var float
     */
    protected $Balance;

    /**
     * @var ArrayOfPersonChipKnipLine
     */
    protected $History;

    /**
     * @var PersonChipKnipChildCareInfo
     */
    protected $ChildCareInfo;

    /**
     * @param  SimpleType\Guid[optional] $personId
     * @return PersonChipKnip
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  float[optional] $balance
     * @return PersonChipKnip
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param  ArrayOfPersonChipKnipLine[optional] $history
     * @return PersonChipKnip
     */
    public function setHistory(ArrayOfPersonChipKnipLine $history = null)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return ArrayOfPersonChipKnipLine
     */
    public function getHistory()
    {
        return $this->History;
    }

    /**
     * @param  PersonChipKnipChildCareInfo[optional] $childCareInfo
     * @return PersonChipKnip
     */
    public function setChildCareInfo(PersonChipKnipChildCareInfo $childCareInfo = null)
    {
        $this->ChildCareInfo = $childCareInfo;

        return $this;
    }

    /**
     * @return PersonChipKnipChildCareInfo
     */
    public function getChildCareInfo()
    {
        return $this->ChildCareInfo;
    }
}
