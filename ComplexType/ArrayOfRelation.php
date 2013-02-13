<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRelation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRelation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Relation[] $Relation
     */
    protected $Relation = array();


    /**
     * @param Relation[] $relation
     * @return ArrayOfRelation
     */
    public function setRelation(array $relation = array())
    {
        $this->Relation = $relation;

        return $this;
    }

    /**
     * @return Relation[]
     */
    public function getRelation()
    {
        return $this->Relation;
    }


}

