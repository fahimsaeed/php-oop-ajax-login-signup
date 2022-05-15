<?php
require_once 'inc/init.php';

$status = $user->signup($_POST, $db);

if ($status === 'success') {
    echo json_encode([
        'success'=> 'success',
        'message' => '<p class="alert alert-success">You are signup Successfully!</p>',
        'signout' => 1,
    ]);
} else if ($status === 'missing_fields') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">All Fields Mandatory!</p>'
    ]);
} else if ($status === 'email_exists') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">Email Already Registerd!</p>'
    ]);
} else if ($status === 'mismatch_password') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">MisMatch Password and Confirm Password</p>'
    ]);
} else if ($status === 'error') {
    echo json_encode([
        'error'=> 'error',
        'message' => '<p class="alert alert-danger">Failed to sign you up!</p>'
    ]);
}