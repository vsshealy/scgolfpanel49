<?php 
    /**
     * php/menus/menu-footer-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.09.06)
     * @copyright 2024 (2024.09.06)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'footer-primary',
            'menu_id' => 'Footer-Primary'
        )
    );
?>