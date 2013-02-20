<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ActivityReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ActivityReservationSalesItem';

    /**
     * @var SimpleType\Guid
     */
    protected $EntryId;

    /**
     * @param  SimpleType\Guid[optional]    $entryId
     * @return ActivityReservationSalesItem
     */
    public function setEntryId(SimpleType\Guid $entryId = null)
    {
        $this->EntryId = $entryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getEntryId()
    {
        return $this->EntryId;
    }
}
