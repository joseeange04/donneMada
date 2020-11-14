<?php 
    $json=file_get_contents("communes.json");
    $donne= json_decode($json);
    var_dump($donne);

?>