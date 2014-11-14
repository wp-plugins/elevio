<?php
/*
Plugin Name: Elevio
Plugin URI: https://elev.io/
Description: A better way for your users to access the help they need.
Author: Elevio
Author URI: https://elev.io
Version: 3.1.1
*/

if (is_admin())
{
    require_once(dirname(__FILE__).'/plugin_files/ElevioAdmin.class.php');
    ElevioAdmin::get_instance();
}
else
{
    require_once(dirname(__FILE__).'/plugin_files/Elevio.class.php');
    Elevio::get_instance();
}

