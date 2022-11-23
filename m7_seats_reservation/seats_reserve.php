<?php
session_start();
include './functions.php';

if (!isset($_SESSION['user']))
reserve_redirect('./');

if (empty($_GET['id']))
    die("you are trying to access directly!");

$seat = get_seat($_GET['id']);


if (empty($_GET['id']))
    die("you are trying to access directly!");


if (empty($seat))
    die('There is no seat with this id');

if ($seat->avaliable) {
    update_seat_reserve($seat->id, 0, $_SESSION['user']['user_id']);
} else {

    if ($seat->user_id != $_SESSION['user']['user_id'])
        die('Access Denied!');

    update_seat_reserve($seat->id, 1, null);
}

reserve_redirect('./home.php');