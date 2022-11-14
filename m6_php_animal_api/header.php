<?php
session_start();
function redirect($path)
{
    header("Location: $path");
    exit();
}

if (!isset($_SESSION['user']) && !strpos($_SERVER['SCRIPT_FILENAME'], 'index.php'))
    redirect('./');

$menu_items = json_decode(file_get_contents('./api_data/menu.json'));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/styles.css">
    <title>animals</title>

    <?php if (!strpos($_SERVER['SCRIPT_FILENAME'], 'index.php')) : ?>
        <style>
            header {
                background-image: url("./assets/images/home_bg.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: <?= strpos($_SERVER['SCRIPT_FILENAME'], 'home.php') ? 80 : 40 ?>vh;
            }
        </style>
    <?php else : ?>
        <style>
            footer {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100vw;
            }
        </style>
    <?php endif; ?>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light px-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="./home.php">Animals</a>
                <?php if (!strpos($_SERVER['SCRIPT_FILENAME'], 'index.php')) : ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php foreach ($menu_items as $item) : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= strpos($_SERVER['SCRIPT_FILENAME'], $item->script_name) ? 'active' : null ?>" aria-current="page" href="./<?= $item->script_name ?>">
                                        <?= $item->title ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div>
                            <span class="me-3">
                                <?= $_SESSION['user']['display_name'] ?>
                            </span>
                            <a href="./auth/logout.php" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

        <?php if (!strpos($_SERVER['SCRIPT_FILENAME'], 'index.php')) : ?>
                </div>
            </div>
        <?php endif; ?>
    </header>