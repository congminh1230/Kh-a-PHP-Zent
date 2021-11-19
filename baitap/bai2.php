<?php
echo "Phần tử trong mảng:";
$arr = array(1,2,3,4,5);
for($i=0; $i < count($arr); $i++) {
    echo $arr[$i];
};
echo "Thứ tự ngược lại của mảng:";
for($j= count($arr) - 1; $j >= 0 ; $j--){
    echo $arr[$j];
}
