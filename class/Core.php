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
        init();
    }

    /**
     * check if settings file exists if so load it else return error.
     */
    private function settings() {
        if (file_exists('settings/settings.inc')) {
            $settings = array();
            include_once('settings/settings.inc');
            return $settings;
        }
        else {
            die('This instance is not yet installed.');
        }
    }

    /**
     * @TODO Finish init function
     * custom init function
     */
    private function init() {
        $this->db_log(1, 'Core init', NULL);
    }

    /**
     * @TODO FINISH db_log FUNCTION
     * Log action to database
     * @param $status int
     * @param $message string
     * @param $link string
     */
    public function db_log($status, $message, $link) {

    }

}