<?php
    $a=rand(-20,20);
    $d=rand(-20,20);
    $c=rand(-20,20);

    $y=(2*$c-42*$d)/($c+$a+1);

    print("(2 * " .$c. " - 42 - " .$d. ") / (" .$c. " * " .$a. " + 1) = " .$y);
?>