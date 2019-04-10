<?php

session_start();

if (count($_SESSION) > 0) {
    unset($_SESSION['username']);
    session_destroy();
    header("../index.html");
}

else{
}

?>