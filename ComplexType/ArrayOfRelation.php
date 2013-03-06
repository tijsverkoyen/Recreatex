<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfRelation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfRelation';

    /**
     * @var array
     */
    protected $Relation = array();

    /**
     * @param  array           $relation
     * @return ArrayOfRelation
     */
    public function setRelation(array $relation = array())
    {
        $this->Relation = $relation;

        return $this;
    }

    /**
     * @return array
     */
    public function getRelation()
    {
	    if(!is_array($this->Relation)) {
		    return array($this->Relation);
	    }
	    return $this->Relation;
    }
}
