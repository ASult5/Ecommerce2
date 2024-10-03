<?php

if (isset($_POST['file'])) {
    $file = $_POST['file'];

    $allowed_files = ['add_new_user', 'view_edit_users', 'add_new_products', 'view_edit_products', 'view_current_orders', 'add_orders_for_admin', '404']; 
    if (in_array($file, $allowed_files)) {
        include($file . '.php'); 
    } else {
        include('404.php');
    }
} else {
    include('404.php');
}
?>