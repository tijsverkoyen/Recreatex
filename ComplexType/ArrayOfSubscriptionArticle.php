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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SubscriptionArticle[] $SubscriptionArticle
     */
    protected $SubscriptionArticle = array();

    /**
     * @param  SubscriptionArticle[]      $subscriptionArticle
     * @return ArrayOfSubscriptionArticle
     */
    public function setSubscriptionArticle(array $subscriptionArticle = array())
    {
        $this->SubscriptionArticle = $subscriptionArticle;

        return $this;
    }

    /**
     * @return SubscriptionArticle[]
     */
    public function getSubscriptionArticle()
    {
        return $this->SubscriptionArticle;
    }

}
