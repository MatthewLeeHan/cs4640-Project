<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "<h1>moshi moshi</h1>";
    foreach ($_POST as $key => $val){
        $data[$key] = $val;
    }
    print_array($data);
}

function print_array($arr){
    while($curr = each($arr)):
        $k = $curr["key"];
        $v = $curr['value'];
        echo "[$k => $v ] <br/>";
    endwhile;
}
?>