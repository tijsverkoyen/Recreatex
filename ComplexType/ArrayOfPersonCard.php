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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PersonCard[] $PersonCard
     */
    protected $PersonCard = array();

    /**
     * @param  PersonCard[]      $personCard
     * @return ArrayOfPersonCard
     */
    public function setPersonCard(array $personCard = array())
    {
        $this->PersonCard = $personCard;

        return $this;
    }

    /**
     * @return PersonCard[]
     */
    public function getPersonCard()
    {
        return $this->PersonCard;
    }

}
