<?php

function name($name) {
    $result= "";
    for($i=Strlen($name) -1 ; $i >= 0 ; $i--) {
        $result =  $result . $name[$i];
    }
    return $result;
   
}
// name('minh');
function nhapDuLieu($data) {
    if($data === name($data)) {
        echo "đúng";
    }else {
        echo "sai";
    }
}
nhapDuLieu('anna');

