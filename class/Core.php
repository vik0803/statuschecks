<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 7/11/15
 * Time: 4:00 PM
 */

namespace StatusChecks;


class Core
{
    protected $config;
    /**
     * Construct the Core class
     */
    function __construct() {
        $config = settings();
    }

    /**
     * check if settings file exists if so load it else return error.
     */
    private function settings() {
        if (file_exists('settings/settings.inc')) {
            include_once('settings/settings.inc');
            return $settings;
        }
        else {
            die('This instance is not yet installed.');
        }
    }

    /**
     * custom init function
     */
    private function init() {

    }

}