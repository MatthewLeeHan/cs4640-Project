<?php

    echo "hello";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "hello";
        if($_POST['user_id'] != ""){
            echo "hello";
        }
    }

?>