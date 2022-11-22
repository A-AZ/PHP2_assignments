<?php
require './header.php';

?>

<div class="container p-5">
    <h2 class="text-center ">Please Register To Reserve Seat !</h2>

    <div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php unset($_SESSION['error']);
        endif; ?>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <form class="w-50 " method="POST" action="./authen/create_user.php">
            <div class="mb-3 ">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email address:</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-success mt-4">Register</button>
            </div>
        </form>
    </div>
</div>

<?php require './footer.php'; ?>