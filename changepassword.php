<?php
require_once 'inc/init.php';

$status = $user->changePassword($_POST, $db);

if ($status === 'success') {
    echo json_encode([
        'success'=> 'success',
        'message' => '<p class="alert alert-success">Your Password Changed Successfully</p>',
        'signout' => 1,
    ]);
} else if ($status === 'missing_fields') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">All Fields Mandatory!</p>'
    ]);
} else if ($status === 'mismatch_password') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">MisMatch New Password and Confirm Password</p>'
    ]);
} else if ($status === 'incorrect_old_password') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">Incorrect Old Password</p>'
    ]);
} else if ($status === 'error') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">Failed to change Password!</p>'
    ]);
}