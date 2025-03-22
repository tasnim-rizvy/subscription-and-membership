<?php

/**
 * Plugin Name
 *
 * @package           subscription-and-membership
 * @author            Tasnim Rizvy
 * @copyright         2025 Tasnim Rizvy
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Subscription and Membership
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tasnim Rizvy
 * Author URI:        https://example.com
 * Text Domain:       subscription-and-membership
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if (! defined('ABSPATH')) {
    exit;
}

final class Subscription_And_Membership
{
    private static $instance;

    private function __construct()
    {
        $this->constants();
        $this->load_files();
        $this->enqueue_assets();
    }

    public static function get_instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function constants()
    {
        define( 'SM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
		define( 'SM_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    }

    public function load_files() {
        require_once SM_PLUGIN_PATH . '/includes/models/class-user-model.php';
        require_once SM_PLUGIN_PATH . '/includes/controllers/class-user-controller.php';
    }

    public function enqueue_assets() {

    }
}

Subscription_And_Membership::get_instance();
