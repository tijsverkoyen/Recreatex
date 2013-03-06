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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Balance
     */
    protected $Balance;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPersonChipKnipLine|null $History
     */
    protected $History;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var PersonChipKnipChildCareInfo|null $ChildCareInfo
     */
    protected $ChildCareInfo;

    /**
     * @param  SimpleType\guid|null $personId
     * @return PersonChipKnip
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  float|null     $balance
     * @return PersonChipKnip
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param  ArrayOfPersonChipKnipLine|null $history
     * @return PersonChipKnip
     */
    public function setHistory(ArrayOfPersonChipKnipLine $history = null)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return ArrayOfPersonChipKnipLine|null
     */
    public function getHistory()
    {
        return $this->History;
    }

    /**
     * @param  PersonChipKnipChildCareInfo|null $childCareInfo
     * @return PersonChipKnip
     */
    public function setChildCareInfo(PersonChipKnipChildCareInfo $childCareInfo = null)
    {
        $this->ChildCareInfo = $childCareInfo;

        return $this;
    }

    /**
     * @return PersonChipKnipChildCareInfo|null
     */
    public function getChildCareInfo()
    {
        return $this->ChildCareInfo;
    }

}
