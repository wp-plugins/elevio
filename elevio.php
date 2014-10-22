<?php
/*
Plugin Name: Elevio
Plugin URI: https://elevio.com/integrations/wordpress/
Description: Display your whole knowledge base and chat in a single tab on every page of your site.
Author: Elevio
Author URI: https://elev.io
Version: 3.0.1
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

