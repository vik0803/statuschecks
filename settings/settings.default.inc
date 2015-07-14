<?php
/**
 * Status Checks - PHP server/Network Status Monitor and Notifications
 * Author: Ben Townsend
 * Licensed Under: GNU GENERAL PUBLIC LICENSE V2
 * Date: 7/10/2015
 * Time: 11:46 AM
 */

/**
 * Copy this file to {site_root}/_SETTINGS/_SETTINGS.inc and modify _SETTINGS below to their appropriate values for your
 * instance to complete the installation process.
 */

//initialize blank _SETTINGS array.
GLOBAL $_SETTINGS;
$_SETTINGS = array();

/**
 * Basic site _SETTINGS
 */

$_SETTINGS['site']['name'] = 'Status Checks';
$_SETTINGS['site']['admin_email'] = ''; //Used for notifications of statuschecks status/updates
$_SETTINGS['site']['base_url'] = ''; //Use to allow only one url, prevents site spoofing. Leave blank to accept any URL.
$_SETTINGS['site']['cron_key'] = ''; //If not set, cron requests will fail.
$_SETTINGS['site']['api_key'] = ''; //If set, all API requests MUST include this value to authenticate.


/**
 * Database _SETTINGS
 */
$_SETTINGS['database']['host'] = '127.0.0.1';
$_SETTINGS['database']['user'] = '';
$_SETTINGS['database']['password'] = '';
$_SETTINGS['database']['database'] = '';
$_SETTINGS['database']['prefix'] = ''; //leave blank for no prefix