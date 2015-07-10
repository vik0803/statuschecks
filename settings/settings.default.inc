<?php
/**
 * Status Checks - PHP server/Network Status Monitor and Notifications
 * Author: Ben Townsend
 * Licensed Under: GNU GENERAL PUBLIC LICENSE V2
 * Date: 7/10/2015
 * Time: 11:46 AM
 */

/**
 * Copy this file to {site_root}/settings/settings.inc and modify settings below to their appropriate values for your
 * instance to complete the installation process.
 */

//initialize blank settings array.
$settings = array();

/**
 * Basic site settings
 */

$settings['site']['name'] = 'Status Checks';
$settings['site']['admin_email'] = ''; //Used for notifications of statuschecks status/updates
$settings['site']['base_url'] = ''; //Use to allow only one url, prevents site spoofing. Leave blank to accept any URL.
$settings['site']['cron_key'] = ''; //If not set, cron requests will fail.
$settings['site']['api_key'] = ''; //If set, all API requests MUST include this value to authenticate.


/**
 * Database settings
 */
$settings['database']['host'] = '127.0.0.1';
$settings['database']['user'] = '';
$settings['database']['password'] = '';
$settings['database']['database'] = '';
$settings['database']['prefix'] = ''; //leave blank for no prefix