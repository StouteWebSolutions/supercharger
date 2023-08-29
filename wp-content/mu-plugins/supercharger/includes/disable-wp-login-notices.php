<?php
function supercharger_disable_wp_login_notices(){
    return 'Something is wrong.';
  }
  add_filter( 'login_errors', 'supercharger_disable_wp_login_notices' );