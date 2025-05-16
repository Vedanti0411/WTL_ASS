<?php
$globalscopevar=20;
echo"<br> value of globalscope variable outside the function:".$globalscopevar;

function localscope(){
    echo "<br> value of global variable inside the function is:".$globalscopevar;
}
localscope();

?>