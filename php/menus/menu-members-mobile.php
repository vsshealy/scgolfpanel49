<?php 
    /**
     * php/menus/menu-members-mobile.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.09.06)
     * @copyright 2024 (2024.09.06)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'members-mobile',
            'menu_id' => 'Members-Mobile'
        )
    );
?>