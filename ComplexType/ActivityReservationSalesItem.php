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
     * @var SimpleType\guid|null $EntryId
     */
    protected $EntryId;

    /**
     * @param  SimpleType\guid|null         $entryId
     * @return ActivityReservationSalesItem
     */
    public function setEntryId(SimpleType\guid $entryId = null)
    {
        $this->EntryId = $entryId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getEntryId()
    {
        return $this->EntryId;
    }

}
