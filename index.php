<?php
/**
 * Status Checks - PHP Server/Network Status Monitor and Notifications
 * http://statuschecks.net
 * Author: Ben Townsend
 * Licensed Under: GNU GENERAL PUBLIC LICENSE V2
 * Date: 7/10/2015
 * Time: 9:49 AM
 */

namespace StatusChecks;

/**
 * Load Core class to handle basic site functions.
 * Load Site class to handle display settings
 */
include 'class/class.Core.php';
include 'class/class.Site.php';

/**
 * Auto load magic function for all classes
 * @param $class_name class to be loaded
 */
function __autoload($class_name) {
    /** @noinspection PhpToStringImplementationInspection */
    /** @noinspection PhpIncludeInspection */
    include 'class/class.' . $class_name . '.php';
}

$core = new Core();
if ($core) {
    $site = new Site();
    $site->render('index');
}