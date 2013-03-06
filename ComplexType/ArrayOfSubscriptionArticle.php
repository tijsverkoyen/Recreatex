<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSubscriptionArticle extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSubscriptionArticle';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $SubscriptionArticle = array();

    /**
     * @param  array                      $subscriptionArticle
     * @return ArrayOfSubscriptionArticle
     */
    public function setSubscriptionArticle(array $subscriptionArticle = array())
    {
        $this->SubscriptionArticle = $subscriptionArticle;

        return $this;
    }

    /**
     * @return array
     */
    public function getSubscriptionArticle()
    {
        return $this->SubscriptionArticle;
    }
}
