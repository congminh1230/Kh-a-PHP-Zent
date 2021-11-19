<?php

$number = array(11,14,29,15,18,10);
$max = $number[0];
for($i = 0; $i < count($number); $i++) {
    if($number[$i]< $number[$i]) {
        $max = $number[$i + 1]; 
    }
}
echo $max;
// sort($fruits);
// $result=  end($fruits);
// echo $result;
// echo "<pre>";
    
//     print_r($fruits);
// echo "</pre>";
// foreach ($fruits as $key => $value) {
//     echo $value;
// }
// for($i=0; $i < count($fruits); $i++) {
//     echo $i;
// }

// $fruits = array("lemon", "orange", "banana", "apple");
// sort($fruits);
// foreach ($fruits as $key => $val) {
//     echo "fruits[" . $key . "] = " . $val . "\n";
// }


// }
// echo $array;

// echo $result;
// for($i = 0; $i < count($array); $i++) {
//     echo $i;
// }