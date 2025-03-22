<form method="post">
    <?php wp_nonce_field('membership_registration_nonce_action', 'membership_registration_nonce') ?>

    <label for="username"><?php esc_html_e('Username:', 'subscription-and-membership') ?></label>
    <input type="text" name="username" required><br>

    <label for="name"><?php esc_html_e('Full Name:', 'subscription-and-membership') ?></label>
    <input type="text" name="name" required><br>

    <label for="email"><?php esc_html_e('Email:', 'subscription-and-membership') ?></label>
    <input type="email" name="email" required><br>

    <label for="password"><?php esc_html_e('Password:', 'subscription-and-membership') ?></label>
    <input type="password" name="password" required><br>

    <input type="submit" name="register_user" value="<?php esc_html_e('Register Now', 'subscription-and-membership') ?>">
</form>