<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonChipKnipIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonChipKnipIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $History
     */
    protected $History;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $ChildCareInfo
     */
    protected $ChildCareInfo;

    /**
     * @param  boolean|null           $history
     * @return PersonChipKnipIncludes
     */
    public function setHistory($history)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHistory()
    {
        return $this->History;
    }

    /**
     * @param  boolean|null           $childCareInfo
     * @return PersonChipKnipIncludes
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

}
