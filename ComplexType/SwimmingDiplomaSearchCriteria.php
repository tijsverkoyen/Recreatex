<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SwimmingDiplomaSearchCriteria extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SwimmingDiplomaSearchCriteria';

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @param  SimpleType\Guid[optional]     $personId
     * @return SwimmingDiplomaSearchCriteria
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
}
