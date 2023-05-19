<?php
/**
 *@package WK7-ASSESSMENT
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLinks extends BaseController{
    
    public function register(){
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link( $links){
        $settings_link = '<a http://localhost/WK7-assessment/wp-admin/admin.php?page=employees">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}