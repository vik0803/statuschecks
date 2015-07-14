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
 */
include 'class/class.Core.php';

/**
 * Auto load magic function for all classes
 * @param $class_name class to be loaded
 */
function __autoload($class_name) {
    include 'class/class.' . $class_name . '.php';
}

$site = new Core();
if ($site) {
    echo "Core Initialized";
} else {
    echo "Failed";
}