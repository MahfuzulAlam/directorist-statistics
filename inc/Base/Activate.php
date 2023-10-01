<?php
/**
 * @package  DirectoristStatistics
 */

namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
        self::create_database();

	}

    public function create_database()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'directorist_stats';

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id BIGINT(20) NOT NULL AUTO_INCREMENT,
            ip_address VARCHAR(255),
            category BIGINT(20),
            location BIGINT(20),
            dir_type BIGINT(20),
            listing BIGINT(20),
            user BIGINT(20),
            new TINYINT(1) NOT NULL,
            moment DATETIME,
            moment_gmt DATETIME,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
