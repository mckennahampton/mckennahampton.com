<?php

class PortfoliosLoader extends MvcPluginLoader {

    var $db_version = '1.0';
    var $tables = array();

    function activate() {

        // This call needs to be made to activate this app within WP MVC

        $this->activate_app(__FILE__);

        // Perform any databases modifications related to plugin activation here, if necessary

        require_once ABSPATH.'wp-admin/includes/upgrade.php';

        add_option('portfolios_db_version', $this->db_version);

        // Use dbDelta() to create the tables for the app here
        // $sql = '';
        // dbDelta($sql);

        global $wpdb;
        $sql = '
          CREATE TABLE '.$wpdb->prefix.'portfolios (
            id int(11) NOT NULL auto_increment,
            name varchar(255) NOT NULL,
            url varchar(255) default NULL,
            description text,
            platform varchar(255) default NULL,
            technologies varchar(255) default NULL,
            site_url varchar(255) default NULL,
            client_logo varchar(255) default NULL,
            PRIMARY KEY  (id)
          )';
        dbDelta($sql);

    }

    function deactivate() {

        // This call needs to be made to deactivate this app within WP MVC

        $this->deactivate_app(__FILE__);

        // Perform any databases modifications related to plugin deactivation here, if necessary

    }

}
