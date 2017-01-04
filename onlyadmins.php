<?php

/*
  Plugin Name: Only Admins - Restrict Dev and Staging site to admins
  Description: Only Admins is a minimal plugin that restricts your entire WordPress site to Admins. Best used as a MU-Plugin on Development and Staging sites.
  Version: 1.0
  Author: pcoitinho
  Author URI: http://informationandculture.com
  License: GPLv2
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No no no no' );

function onlyadmins_router() {

  // check user we are not not in the login page, and user isn't logged in
  if ( $GLOBALS['pagenow'] != 'wp-login.php' && ! is_user_logged_in() ) {
    // redirect to login
    auth_redirect();
  }

  // check user is logged in, but not admin
  if ( is_user_logged_in() && ! current_user_can( 'administrator' ) ) {
    // show error message
    wp_die( __( 'You must be an administrator to accesss this page', 'onlyadmins' ) );
  }

}

add_action( 'init', 'onlyadmins_router', 5, 0 );
