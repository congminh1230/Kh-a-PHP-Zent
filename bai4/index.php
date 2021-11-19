<?php

    // bài 1
    // for($i=1; $i <= 100 ; $i++) {
    //     if($i %3 == 0 && $i %5 == 0) {
    //         echo "FizzBuzz $i"."<br/>";
    //     } else if($i %3 == 0 ) {
    //         echo "Fizz.$i"."<br/>";
    //     }else if($i %5 == 0 ) {
    //         echo "Buzz.$i"."<br/>";
    //     }

    // }

    // bài 2
    // function number($a,$b,$c) {
    //     $delta = $b*$b - 4*$a*$c;
    //     $x1="";
    //     $x2="";
    //     if($delta > 0 ) {
    //        $x1= (- $b - sqrt( $delta ))/(2*$a);
    //        $x2= (- $b + sqrt( $delta ))/(2*$a);
    //        echo "Phương trình có 2 nghiệm:"."<br/>";
    //        echo "X1=".$x1."<br/>";
    //        echo "X2=".$x2."<br/>";
    //     }
    //     if($delta == 0 ) {
    //         $x1= (- $b)/(2*$a);
            
    //         echo "Phương trình có nghiệm kép:"."<br/>";
    //         echo "X1,X2 =".$x1."<br/>";
            
    //     }else {
    //         echo "Phương trình vô nghiệm";
    //     }
        
    // }
    // number(1,2,4)
    //  bài 2
    // bài 3
    
    // function checkNumber($n) {
    //     if ($n < 2) {
    //         return false;
    //     }
    //     $squareRoot = sqrt ( $n );
    //     for($i = 2; $i <= $squareRoot; $i++) {
    //         if ($n % $i == 0) {
    //             return false;
    //         }
    //     }
    //     return true;
    // }
    // echo ("Các số nguyên tố nhỏ hơn 100: <br>");
    // for($i = 0; $i < 100; $i ++) {
    //     if (checkNumber ( $i )) {
    //         echo ($i . ",");
    //     }
    // }
        // bai 5
    // function checkNumber($number)  {
    //     if($number < 2) {
    //         return false;
    //     }
    //     $a = sqrt($number);
    //     for($i = 2; $i <= $a; $i ++) {
    //         if($number % $i == 0){
    //             return false;
    //         }
    //     }
    //     return true;
        
    // }

    // for($j = 0; $j < 100 ; $j ++) {
    //     if(checkNumber($j)) {
    //         echo $j.","."<br/>";
    //     }
    // }


    // bài 4
    // $tong= 0;
    // for($i = 1; $i < 100; $i ++) {
    //     $tong += 1/$i;
        

    // }
    // echo "Tổng:".$tong;


    // bài 5

    function sum($number) {
        $sum = 0;
        while($number != 0) {
            $remainder = $number % 10;
            $sum += $remainder;
            $number = $number / 10;
        }
        // die();
        echo $sum;
        
    }
    sum("456");

    

    
    



?>