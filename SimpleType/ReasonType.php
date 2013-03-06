<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ReasonType extends SimpleTypeAbstract
{
    const UNKNOWN = 'Unknown';
    const RESERVATIONS = 'Reservations';
    const INVOICES = 'Invoices';
    const SUBSCRIPTIONS = 'Subscriptions';
    const INCASSO = 'Incasso';
    const TIMEREGISTRATION = 'TimeRegistration';
    const ENTRIES = 'Entries';
    const RESERVATIONSFOLLOWUP = 'ReservationsFollowUp';
    const RENTAL = 'Rental';
    const LESSONS = 'Lessons';
    const ITEMJOURNAL = 'ItemJournal';
    const TICKETING = 'Ticketing';
    const EXPOSITIONS = 'Expositions';
    const FILE = 'File';
}
