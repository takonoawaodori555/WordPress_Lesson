<?php
function register_my_menu() {
  register_nav_menu('global',__( 'グローバルメニュー' ));
}
add_action( 'init', 'register_my_menu' );