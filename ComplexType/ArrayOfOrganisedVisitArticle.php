<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfOrganisedVisitArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfOrganisedVisitArticle';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $OrganisedVisitArticle = array();

    /**
     * @param  array                        $organisedVisitArticle
     * @return ArrayOfOrganisedVisitArticle
     */
    public function setOrganisedVisitArticle(array $organisedVisitArticle = array())
    {
        $this->OrganisedVisitArticle = $organisedVisitArticle;

        return $this;
    }

    /**
     * @return array
     */
    public function getOrganisedVisitArticle()
    {
        return $this->OrganisedVisitArticle;
    }
}
