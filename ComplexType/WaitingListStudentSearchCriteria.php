<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class WaitingListStudentSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'WaitingListStudentSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @param  SimpleType\Guid[optional]        $personId
     * @return WaitingListStudentSearchCriteria
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
}
