<?php
/**
 * @link              http://www.itpixelz.com
 * @since             1.0.0
 * @package           wp_default_sender_email_itpixelz
 *
 * @wordpress-plugin
 * Plugin Name:       Wp Default Sender Email by IT Pixelz
 * Plugin URI:        http://www.itpixelz.com
 * Description:       Get rid of default email from like this wordpress@domain.com, use your own!
 * Version:           1.0
 * Author:            IT Pixelz
 * Author URI:        http://www.itpixelz.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/






include( 'admin-page.php' );
add_filter( 'wp_mail_from', 'wdsei_new_mail_from' );
add_filter( 'wp_mail_from_name', 'wdsei_new_mail_from_name' );

function wdsei_new_mail_from($old) {
	$wdsei_options =  get_option( 'wdsei_itpixelz_options' );
 return $wdsei_options['sender_mail'];
}
function wdsei_new_mail_from_name($old) {
	$wdsei_options =  get_option( 'wdsei_itpixelz_options' );
 return  $wdsei_options['sender_name'];
}



?>
