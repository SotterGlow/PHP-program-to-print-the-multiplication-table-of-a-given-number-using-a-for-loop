<?php 

declare(strict_types=1);
function multification(int $a) {

    for($i=1; $i<=12; $i++) {

        $result = $i * $a;
        echo $i." * ".$a." = ".$result;
    }
}
?>