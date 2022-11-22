<?php
session_start();
include './functions.php';

if (!isset($_SESSION['user']) && !strpos($_SERVER['SCRIPT_FILENAME'], 'index.php') && !strpos($_SERVER['SCRIPT_FILENAME'], 'reg.php'))
    reserve_redirect('./');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">


    <title>Stadum Reservation!</title>
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black px-5 py-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="./seats_reserve.php">The Princesses Stadum</a>
                <?php if (isset($_SESSION['user'])) : ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./seats_reserve.php">Home</a>
                            </li>
                        </ul>
                        <div>
                            <span class="me-3">
                                <?= $_SESSION['user']['name']; ?>
                            </span>
                            <a href="./authen/logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </header>