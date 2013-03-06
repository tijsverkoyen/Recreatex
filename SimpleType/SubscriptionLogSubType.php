<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SubscriptionLogSubType extends SimpleTypeAbstract
{
    const NOACCESSINACTIVESUBSCRIPTION = 'NoAccessInactiveSubscription';
    const NOACCESSINVALIDTURNS = 'NoAccessInvalidTurns';
    const NOACCESSINVALIDPERIOD = 'NoAccessInvalidPeriod';
    const NOACCESSONHOLIDAY = 'NoAccessOnHoliday';
    const NOACCESSSUBSCRIPTIONEXCLUSIONCALENDAR = 'NoAccessSubscriptionExclusionCalendar';
    const NOACCESSACCESSGROUPEXCLUSIONCALENDAR = 'NoAccessAccessGroupExclusionCalendar';
    const NOACCESSINACTIVEREADERSETTING = 'NoAccessInactiveReaderSetting';
    const NOACCESSINVALIDTIMEACCESSTIME = 'NoAccessInvalidTimeAccessTime';
    const NOACCESSANTIPASSBACK = 'NoAccessAntiPassBack';
    const NOACCESSNOREMAININGTURNSPERPERIOD = 'NoAccessNoRemainingTurnsPerPeriod';
    const NOACCESSSUBSCRIPTIONNOTACTIVATED = 'NoAccessSubscriptionNotActivated';
    const NOACCESSVISITEXCEEDSMAXIMUMTIME = 'NoAccessVisitExceedsMaximumTime';
    const NOACCESSMINIMUMTIMENEXTVISITFAILURE = 'NoAccessMinimumTimeNextVisitFailure';
    const NOACCESSLINKEDSUBSCRIPTIONISINVALID = 'NoAccessLinkedSubscriptionIsInvalid';
    const NOACCESSNOVALIDPLACERESERVATIONFOUND = 'NoAccessNoValidPlaceReservationFound';
    const NOACCESSNOVALIDCULTURERESERVATIONFOUND = 'NoAccessNoValidCultureReservationFound';
    const NOACCESSINSUFFICIENTCREDITS = 'NoAccessInsufficientCredits';
    const NOACCESSINSUFFICIENTAMOUNTINPURSE = 'NoAccessInsufficientAmountInPurse';
    const CARDCOPY = 'CardCopy';
    const CARDMOVE = 'CardMove';
    const SUBSCRIPTIONINSENTIVE = 'SubscriptionInsentive';
}
