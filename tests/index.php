<?php

//require
require_once '../../../autoload.php';
require_once 'config.php';
session_start();

use \TijsVerkoyen\Recreatex\Recreatex;
use \TijsVerkoyen\Recreatex\ComplexType\Credential;

// create instance
$recreatex = new Recreatex(SERVER, PORT);
$recreatex->createServiceContext(SHOP_ID, DIVISION_ID, LANGUAGE);

try {
    // AuthenticateUser
//    $credential = new Credential();
//    $credential->setUsername(USERNAME);
//    $credential->setPassword(PASSWORD);
//    $response = $recreatex->authenticateUser($credential);
//    $response = $recreatex->authenticateUser(new Credential());

    // FindActivities   @remark: untested, because my RCX-instance hasn't any activities
//    $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
//    $paging->setPageSize(10);
//    $criteria = new \TijsVerkoyen\Recreatex\ComplexType\ActivitySearchCriteria();
//    $criteria->setPaging($paging);
//    $response = $recreatex->findActivities($criteria);

    // FindArticleCategories   @remark: untested, because my RCX-instance hasn't any article categories
//    $criteria = new \TijsVerkoyen\Recreatex\ComplexType\ArticleCategorySearchCriteria();
//    $response = $recreatex->findArticleCategories($criteria);

    // FindArticles
//    $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
//    $paging->setPageSize(10);
//    $criteria = new \TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria();
//    $criteria->setPaging($paging);
//    $response = $recreatex->findArticles($criteria);

    // FindCultureEvents
//    $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
//    $paging->setPageSize(10);
//    $criteria = new \TijsVerkoyen\Recreatex\ComplexType\CultureEventSearchCriteria();
//    $criteria->setPaging($paging);
//    $response = $recreatex->findCultureEvents($criteria);

    // IsAvailable
//    $response = $recreatex->isAvailable();

    // FindPerson
//    $criteria = new \TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria();
//    $criteria->setEmail('vorst@verkoyen.eu');
//    $response = $recreatex->findPerson($criteria);
} catch (Exception $e) {
    var_dump($e);
}

// output
var_dump($response);
