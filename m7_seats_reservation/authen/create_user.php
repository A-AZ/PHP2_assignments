<?php
session_start();

include '../functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$error = false;
$error_msg = '';



if (!empty($name) && !empty($email) && !empty($password)) {
    $new_user_id = create_user($name, $email, $password);
    if ($new_user_id) {
        $user = get_user($new_user_id);
        if (empty($user)) {
            $error = true;
            $error_msg = 'User is not existed';
        }
    } else {
        $error = true;
        $error_msg = 'User is already existed';
    }
}
else {
    $error = true;
    $error_msg = 'You need to enter all the information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    reserve_redirect('../reg.php');
} else {
    $_SESSION['user'] = array(
        'name' => $user->name,
        'is_admin' => $user->is_admin,
        'user_id' => $user->id
    );
    reserve_redirect('../seats_reserve.php');
}
