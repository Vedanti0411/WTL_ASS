<?php
function localscope()
{
    static $var=5;
    echo "<br> The value of static variable $var inside the function is ",$var;
    $var++;
}

localscope();
localscope();

?>