<?php
require "./header.php";

$cv_id = isset($_GET['id']) ? $_GET['id'] : null;
if (empty($cv_id))
    die("you are trying to access directly");

$info_array = json_decode(file_get_contents('./data/data.json'));


$info_array_arr = array_filter($info_array, function ($item) use ($cv_id) {
    return $item->id == $cv_id;
});


$cv_info = !empty($info_array_arr) ? $info_array_arr[array_key_first($info_array_arr)] : null;
?>

<main>
    <!--links-->
    <section id="links">
        <ul>
            <li><a href="<?= $cv_info->linkedin ?>">Linkedin</a></li>
        </ul>
        <ul>
            <li><a href="<?= $cv_info->github ?>">Github</a></li>
        </ul>
        <ul>
            <li><a href="mailto:<?= $cv_info->email ?>"><?= $cv_info->email ?></a></li>
        </ul>
    </section>
    <!-- <section>
        <img id="profile_img" src="./assets/profile.jpg">
    </section> -->

    <!--Education-->
    <section class="media_test" id="edu">
        <h2>Education:</h2>
        <ul id="edu_list">
            <li id="uni"><?= $cv_info->education ?> - <time datetime="2019"><?= $cv_info->educationDate ?></time>
                <!-- add institute -->
                <ul>
                    <li>Applied Science University</li>
                </ul>
            </li>
        </ul>
    </section>

    <!--Experiance-->
    <section class="media_test" id="experiance">
        <h2>Experience:</h2>
        <ul>
            <li><?= $cv_info->experiance ?><time datetime="2022"><?= $cv_info->experianceDate ?></time></li>
        </ul>
    </section>

    <!--Skills & Languages-->
    <section class="media_test" id="skills">
        <h2>
            Skills:
        </h2>
        <ul>
            <li><br><?= $cv_info->skills ?></br></li>
        </ul>
        <ul>
            <li id="lang"><br><?= $cv_info->languages ?></br></strong>
            </li>
        </ul>
    </section>
</main>

<?php require "./footer.php"; ?>