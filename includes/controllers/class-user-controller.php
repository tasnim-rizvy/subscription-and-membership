<?php

class User_Controller {
    public function __construct() {
        add_shortcode( 'membership_registration_form', array( $this, 'display_registration_form' ) );
    }

    public static function display_registration_form() {
        ob_start();

        if ( isset( $_POST['register_user'] ) ) {
            if ( ! isset( $_POST['membership_registration_nonce'] ) && ! wp_verify_nonce( wp_unslash( $_POST['membership_registration_nonce'] ), 'membership_registration_nonce_action' ) ) {
				wp_die( __( 'Security check failed', 'subscription-and-membership' ) );
			}

            $username = sanitize_text_field( $_POST['username'] );
            $name     = sanitize_text_field( $_POST['name'] );
            $email    = sanitize_email( $_POST['email'] );
            $password = wp_hash_password( $_POST['password'] );

            $user = new User();
            $user->register_user( $username, $name, $email, $password );
        }

        include_once SM_PLUGIN_PATH . 'inc/views/registration-form.php';
        ob_get_clean();
    }
}