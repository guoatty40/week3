<?php
    // The Array operators
    echo"The Array operators<hr />";
    $x = array("a" => "red","b" => "green");
    $y = array("c" => "blue","d" => "yellow");
    print_r($x + $y); //union of $x and $y
    echo"<br />";

    var_dump($x == $y); //false(0,null), of $x and $y
    echo"<hr />";

    var_dump($x != $y); //ture,Inequality of $x and $y
    echo "<hr />";

    var_dump($x == $y);
    echo "<hr />";
?>

<?php

?>