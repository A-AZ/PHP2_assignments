<?php
require './header.php';
?>

<div class="row my-5 py-5">


    <?php foreach (get_seats() as $seat) :
        if ($seat->avaliable) { ?>
            <a href="./seats_reserve.php?id=<?= $seat->id ?>" class="seat col-2 m-5 d-flex justify-content-center align-content-center <?= $seat->avaliable ? "avalabile_seats" : 'reserved_seat' ?>">
                <?= $seat->seat_no ?>
            </a>
            <?php } else {
            if ($seat->user_id == $_SESSION['user']['user_id']) { ?>
                <a href="./seats_reserve.php?id=<?= $seat->id ?>" class="seat col-2 m-5 d-flex justify-content-center align-content-center <?= $seat->avaliable ? "avalabile_seats" : 'reserved_seat' ?>">
                    <?= $seat->seat_no ?>
                </a>
            <?php } else { ?>
                <div class="seat col-2 m-5 d-flex justify-content-center align-content-center <?= $seat->avaliable ? "avalabile_seats" : 'reserved_seat' ?>">
                    <?= $seat->seat_no ?>
                </div>
    <?PHP }
        }
    endforeach; ?>






</div>


<?php require './footer.php'; ?>