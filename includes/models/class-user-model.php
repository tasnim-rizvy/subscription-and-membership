<?php

class User {
    public function register_user( $username, $name, $email, $password ) {
        $user_id = wp_insert_user( [
            'user_login' => $username,
            'user_pass'  => $password,
            'user_email' => $email,
            'display_name' => $name,
        ] );

        if ( is_wp_error( $user_id ) ) {
            wp_die( $user_id->get_error_message() );
        } else {
            echo '<p>' . __( 'Registration Successful', 'subscription-and-membership' ) . '</p>';
        }

        return $user_id;
    }
}