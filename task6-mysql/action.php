<?php
    $link = mysqli_connect('localhost', 'root', 'asd');

    if (!isset($_POST['request']) || $_POST['request'] == '') {
        echo 'error';
        exit;
    }

    $sql = strtolower($_POST['request']);
    mysqli_query($link, 'use first');
    $result = mysqli_query($link, $sql);

    // starts_with
    if (substr($sql, 0, 6) === 'select') {
        if ($result == false) {
            echo mysqli_error($link);
            exit;
        }

        print_r(mysqli_fetch_all($result, MYSQLI_ASSOC));
    } else {
        if ($result)
            echo 'Success';
        else
            echo mysqli_error($link);
    }
