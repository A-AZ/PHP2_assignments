<?php require './header.php'; ?>

<div class="container p-5">
    <h2 class="text-center ">Please Login To Reserve Seat !</h2>

    <div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php unset($_SESSION['error']);
        endif; ?>
    </div>

    <div class="d-flex justify-content-center align-items-center">

        <form class="w-50 " method="POST" action="./authen/validation.php">
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email address:</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-light mt-4">Login</button>
                <a href="./reg.php" class="btn btn-success mt-4">Register</a>
            </div>
        </form>
    </div>
</div>

<?php require './footer.php'; ?>