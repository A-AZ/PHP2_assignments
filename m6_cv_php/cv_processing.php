<?php

    $info_array = json_decode(file_get_contents('./data/data.json'));
    $id = count($info_array) + 1;

    $added_info = array(
        'id' => $id,
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'tel' => $_POST['tel'],
        'linkedin' => $_POST['linkedin'],
        'github' => $_POST['github'],
        'education' => $_POST['education'],
        'educationDate' => $_POST['educationDate'],
        'experiance' => $_POST['experiance'],
        'experianceDate' => $_POST['experianceDate'],
        'skills' => $_POST['skills'],
        'languages' => $_POST['languages']

    );

    $info_array[]= $added_info;
    //$new_data = json_encode($info_array, JSON_PRETTY_PRINT);
    file_put_contents('./data/data.json', json_encode($info_array, JSON_PRETTY_PRINT));

    header("location: ./cv_template.php?id=$id");