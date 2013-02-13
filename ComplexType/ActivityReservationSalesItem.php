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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $EntryId
     */
    protected $EntryId;

    /**
     * @param  SimpleType\Guid|null         $entryId
     * @return ActivityReservationSalesItem
     */
    public function setEntryId(SimpleType\Guid $entryId = null)
    {
        $this->EntryId = $entryId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getEntryId()
    {
        return $this->EntryId;
    }
}
