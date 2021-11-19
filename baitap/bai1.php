<?php

$number = array(11,14,29,15,18,10);
$max = $number[0];
for($i = 0; $i < count($number); $i++) {
    if($number[$i]< $number[$i]) {
        $max = $number[$i + 1]; 
    }
}
echo $max."<br>";
// sort($fruits);
// $result=  end($fruits);
// echo $result;
// echo "<pre>";
    
//     print_r($fruits);
// echo "</pre>";
