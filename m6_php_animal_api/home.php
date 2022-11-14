<?php require './header.php';


$animals = json_decode(file_get_contents('./api_data/aniamls.json'));
//$json_pretty = json_encode(json_decode($json,true),JSON_PRETTY_PRINT);
//file_put_contents('data.json', [$json_pretty], FILE_APPEND);
?>
<main class="container my-5">

    <h1 class="text-center">Animals</h1>
    <hr class="w-50 m-auto">

    <div id="animals" class="mt-5 row">
    <?php foreach ($animals as $animal) :
            if (!$animal->id)
                continue;
        ?>
            <div class="animal-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                <div class="card">
                    <img src="<?= $animal->image_link ?>" class="card-img-top" alt="PHP">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $animal->name ?>
                        </h5>
                        <a href="./animal info.php?id= <?= $animal->id ?>" class="btn btn-primary">more info</a>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>
    </div>
</main>
<?php require './footer.php';
?>