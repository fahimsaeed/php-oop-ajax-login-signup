<?php
require_once 'inc/init.php';

if(isset($_SESSION['logged_in'])) {
    $_SESSION = []; //assigning and empty arrat to $_SESSION variable
    
    //forcefully expiring cookie
    setcookie(session_name(), session_id(), time()-1000, "/");

    //this delete session from tmp directory
    session_destroy();

    header('location: index.php');

} else {
    header('location: index.php?error=Please login to your account');
}
