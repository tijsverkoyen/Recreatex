<?php

namespace TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class BustripStates extends SimpleTypeAbstract
{
    const REQUESTED = 'Requested';

    const PLANNED = 'Planned';

    const REJECTED = 'Rejected';

    const APPROVED = 'Approved';

    const CANCELATIONREQUESTED = 'CancelationRequested';

    const OUTSOURCED = 'Outsourced';

    const CANCELLED = 'Cancelled';

}
