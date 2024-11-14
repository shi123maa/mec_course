<?php
// 1. Given a number N. Print numbers from 1 to N in separate lines. 

for($i=1;$i<=5;$i++){
    
    print($i).'<br>';
}

echo "----------------------------------------------------------------------------------------------------------------,<br>";

// 2.  Given a number N. Print all even numbers between 1 and N inclusive in separate lines.
echo "<br>";

echo "input n = 10 ,<br>";
for($i=1;$i<=10;$i++){
    if( $i % 2 == 0){
        print($i)."<br>";
    }
 }

 echo "<br>";

 echo "input n = 5 ,<br>";

 for($i=1;$i<=5;$i++){
    if( $i % 2 == 0){
        print($i)."<br>";
    }
 }

echo "----------------------------------------------------------------------------------------------------------------,<br>";

// 3. Given a number N, and N numbers, find maximum number in these N numbers.
 
$numbers = [1 ,8 ,5 ,7 ,5];
$max=max($numbers);

echo 'max number : '.$max.'<br>';

echo "----------------------------------------------------------------------------------------------------------------,<br>";

// 4. Given a number X. Determine if the number is prime or not Note: 
    
         
     
    $num = 9; 
    $flag=true;
    for($x=2;$x < $num;$x++){
        
          if($num % $x == 0){
            $flag=false ;
           
          }
     }

     if($flag){
         echo "prime <br>";
     }else{
        echo "not prime <br>";

     }

echo "----------------------------------------------------------------------------------------------------------------,<br>";

echo "<br>";

// 5. Given a number N Print 2 lines that contain the following respectively Print N in a reversed order and not leading zeroes If N  is a palindrome number print "YES" otherwise, print "NO. 

$N = 160; 


$reversedN = ltrim(strrev($N), '0');


if ($reversedN == strval($N)) {
    $isPalindrome = "YES";
} else {
    $isPalindrome = "NO";
}

echo "number is:   ". $N . "<br>";
echo "reserved number is:   ". $reversedN . "<br>";
echo $isPalindrome . "\n";

echo "<br>";

echo "-----------------------------------------------------------------------------,<br>";

//6- Given a number N. Print all the divisors of N in ascending order Input Only one line containing a number N (1 ≤ N ≤ 104) Output Print all positive divisors of N, one number per line. 

   $num =7;
   
   for($i=1 ; $i <= $num; $i++ ){
         if($i % $num == 0 || $num % $i == 0){
            echo $i ."<br>";
         }
   }



   echo "----------------------------------------------------------------------------------------------------------------,<br>";

// 7. Given two numbers A and B. Print all lucky numbers between A and B inclusive. 

$A = 4;
$B = 20;

$luckyNumbers = [];

for ($i = $A; $i <= $B; $i++) {
    $numberStr = strval($i); 
    $isLucky = true;

    for ($j = 0; $j < strlen($numberStr); $j++) {
        if ($numberStr[$j] != '4' && $numberStr[$j] != '7') {
            $isLucky = false; 
            break;
        }
    }

    if ($isLucky) {
        $luckyNumbers[] = $i;
    }
}


if (count($luckyNumbers) > 0) {
    echo implode(" ", $luckyNumbers);
} else {
    echo "-1";
}




echo "<br>";

echo "----------------------------------------------------------------------------------------------------------------,<br>";

//8- Given a number N. Print a left angled triangle that has N rows.For more clarification see the example below.     
$n =4; 
for($i=0 ; $i<= $n ;$i++){
    for($j=0 ; $j<= $i ;$j++){
           echo "*"."\n";
    }
    print '<br>';
 }

?>