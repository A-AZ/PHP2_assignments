<?php

function reserve_redirect($path)
{
    header("Location: $path");
    exit();
}


function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db-tickts";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function create_user($name, $email, $password)
{
    $connection = connect();
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    $new_user_id = 0;
    if (mysqli_query($connection, $sql)) {
        $new_user_id = $connection->insert_id;
    }
    mysqli_close($connection);

    return $new_user_id;
}

function get_user($id)
{
    $connection = connect();
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    mysqli_close($connection);

    return mysqli_fetch_object($result);
}


function get_seats()
{
    $connection = connect();
    $sql = "SELECT * FROM seat";
    $result = mysqli_query($connection, $sql);

    $seat = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_object($result)) {
            $seat[] = $row;
        }
    }

    return $seat;
}



function get_seat($id) {
    $connection = connect();
    $sql = "SELECT * FROM seat WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    mysqli_close($connection);
    return mysqli_fetch_object($result);
}



function update_seat_reserve($id, $status, $user_id) {
    $connection = connect();
    $user_id = !empty($user_id) ? $user_id : "NULL";
    $sql = <<<EOD
    UPDATE seat
        SET avaliable=$status, user_id=$user_id
        WHERE id=$id
    EOD;

    mysqli_query($connection, $sql);
    mysqli_close($connection);
}