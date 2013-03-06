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
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Date;

    /**
     * @var string
     */
    protected $FromGroup;

    /**
     * @var string
     */
    protected $FromGroupCode;

    /**
     * @var string
     */
    protected $ToGroup;

    /**
     * @var string
     */
    protected $ToGroupCode;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PersonLLVTransferHistory
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]         $date
     * @return PersonLLVTransferHistory
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  string[optional]         $fromGroup
     * @return PersonLLVTransferHistory
     */
    public function setFromGroup($fromGroup)
    {
        $this->FromGroup = $fromGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromGroup()
    {
        return $this->FromGroup;
    }

    /**
     * @param  string[optional]         $fromGroupCode
     * @return PersonLLVTransferHistory
     */
    public function setFromGroupCode($fromGroupCode)
    {
        $this->FromGroupCode = $fromGroupCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromGroupCode()
    {
        return $this->FromGroupCode;
    }

    /**
     * @param  string[optional]         $toGroup
     * @return PersonLLVTransferHistory
     */
    public function setToGroup($toGroup)
    {
        $this->ToGroup = $toGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getToGroup()
    {
        return $this->ToGroup;
    }

    /**
     * @param  string[optional]         $toGroupCode
     * @return PersonLLVTransferHistory
     */
    public function setToGroupCode($toGroupCode)
    {
        $this->ToGroupCode = $toGroupCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getToGroupCode()
    {
        return $this->ToGroupCode;
    }
}
