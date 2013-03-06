<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonLLVTransferHistory extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonLLVTransferHistory';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromGroup
     */
    protected $FromGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FromGroupCode
     */
    protected $FromGroupCode;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ToGroup
     */
    protected $ToGroup;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ToGroupCode
     */
    protected $ToGroupCode;

    /**
     * @param  SimpleType\guid|null     $id
     * @return PersonLLVTransferHistory
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null              $date
     * @return PersonLLVTransferHistory
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  string|null              $fromGroup
     * @return PersonLLVTransferHistory
     */
    public function setFromGroup($fromGroup)
    {
        $this->FromGroup = $fromGroup;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromGroup()
    {
        return $this->FromGroup;
    }

    /**
     * @param  string|null              $fromGroupCode
     * @return PersonLLVTransferHistory
     */
    public function setFromGroupCode($fromGroupCode)
    {
        $this->FromGroupCode = $fromGroupCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromGroupCode()
    {
        return $this->FromGroupCode;
    }

    /**
     * @param  string|null              $toGroup
     * @return PersonLLVTransferHistory
     */
    public function setToGroup($toGroup)
    {
        $this->ToGroup = $toGroup;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToGroup()
    {
        return $this->ToGroup;
    }

    /**
     * @param  string|null              $toGroupCode
     * @return PersonLLVTransferHistory
     */
    public function setToGroupCode($toGroupCode)
    {
        $this->ToGroupCode = $toGroupCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToGroupCode()
    {
        return $this->ToGroupCode;
    }

}
