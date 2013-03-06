<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPersonCard extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPersonCard';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $PersonCard = array();

    /**
     * @param  array             $personCard
     * @return ArrayOfPersonCard
     */
    public function setPersonCard(array $personCard = array())
    {
        $this->PersonCard = $personCard;

        return $this;
    }

    /**
     * @return array
     */
    public function getPersonCard()
    {
        return $this->PersonCard;
    }
}
