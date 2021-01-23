<?php

/**
 * Plugin Name: Thor Weather changer
 * Plugin URI:        http://pereiraryan.github.io/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ryan Pereira 
 * Author URI:        http://pereiraryan.github.io/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
*/

function wporg_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <p>To view the featured city on the weather template</p>
      <form action="options.php" method="post">
            <select name="city" id="city">
                <option value="mumbai">Mumbai</option>
                <option value="delhi">Delhi</option>
                <option value="bengaluru">Bengaluru</option>
                <option value="kolkata">Kolkata</option>
                <option value="chennai">Chennai</option>
            </select>
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        submit_button( __( 'Save', 'textdomain' ) );
        ?>
      </form>
    </div>
    <?php
}
?>
