<?php

unset($_COOKIE['user']);
setcookie('user', '', time() - 3600, '/cs4640-project');
header("Location: ../index.html");

?>