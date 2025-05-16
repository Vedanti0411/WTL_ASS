<?php
$globalscopevar=20;
echo"<br> function:".$globalscopevar;

function localscope(){
    echo "<br> value of global variable:".$GLOBALS['globalscopevar'];
}
localscope();

?>