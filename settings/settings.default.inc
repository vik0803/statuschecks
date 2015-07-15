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

GLOBAL $_SETTINGS;
$_SETTINGS = array();

/**
 * Basic site _SETTINGS
 */

$_SETTINGS['name'] = 'Status Checks';
$_SETTINGS['admin_email'] = ''; //Used for notifications of statuschecks status/updates
$_SETTINGS['base_url'] = ''; //Use to allow only one url, prevents site spoofing. Leave blank to accept any URL.
$_SETTINGS['cron_key'] = ''; //If not set, cron requests will fail.
$_SETTINGS['api_key'] = ''; //If set, all API requests MUST include this value to authenticate.

/**
 * Theme Settings
 */
$_SETTINGS['theme'] = 'default'; //must match directory name in theme directory ie {site}/theme/{theme name}

/**
 * Database _SETTINGS
 */
$_SETTINGS['host'] = '127.0.0.1';
$_SETTINGS['user'] = '';
$_SETTINGS['password'] = '';
$_SETTINGS['database'] = '';
$_SETTINGS['prefix'] = ''; //leave blank for no prefix