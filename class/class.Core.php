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
    static $_this;

    function __construct() {
        self::$_this = $this->settings();;
    }

    static function &getInstance(){
        return self::$_this;
    }

    static function set($key, $value){
        self::$_this[$key] = $value;
    }

    static function &get($key){
        return self::$_this[$key];
    }

    /**
     * load settings file if exists
     * @return array
     */
    public function settings() {
        if (file_exists('settings/settings.inc')) {
            /** @noinspection PhpIncludeInspection */
            include_once('settings/settings.inc');
            return $_SETTINGS;
        }
        else {
            die('This instance is not yet installed.');
        }
    }

}