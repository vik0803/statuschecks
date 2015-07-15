<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 7/14/15
 * Time: 7:04 PM
 */

namespace StatusChecks;

class Site
{

    /**
     * render function. include theme files from active theme setting.
     * @param $template string
     */
    public function render($template) {
        /** @noinspection PhpIncludeInspection */
        include 'theme/' . Core::get('theme') . '/templates/' . $template . '.tmpl.inc';
    }

}