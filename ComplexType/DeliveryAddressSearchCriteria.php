<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class DeliveryAddressSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'DeliveryAddressSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var PagingCriteria
     */
    protected $Paging;

    /**
     * @param  SimpleType\Guid[optional]     $id
     * @return DeliveryAddressSearchCriteria
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  SimpleType\Guid[optional]     $personId
     * @return DeliveryAddressSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  PagingCriteria[optional]      $paging
     * @return DeliveryAddressSearchCriteria
     */
    public function setPaging(PagingCriteria $paging = null)
    {
        $this->Paging = $paging;

        return $this;
    }

    /**
     * @return PagingCriteria|null
     */
    public function getPaging()
    {
        return $this->Paging;
    }
}
