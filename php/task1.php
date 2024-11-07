<?php
    // 1- Given a name S. Print "Hello, (name)" without parentheses.

      $name="Shimaa";
      echo "<br>"."<br>";
      
      echo "hello,".$name ."<br>"."<br>";

    //  2-  Given two numbers X and Y. Print the summation and multiplication and subtraction of these 2 numbers.

     $x=10;
     $y=5;
    $sum=$x+$y ;
    $res=$x*$y ;
    $res1=$x-$y ;

     
    echo $x ."+". +$y ."=".$sum."<br>" ;
    echo $x ."*". +$y ."=".$res."<br>" ;
    echo $x ."-". +$y ."=".$res1."<br>"."<br>" ;

    // 3- Given four numbers A, B, C and D. Print the result of the following equation :

    $A=1;
    $B=2;
    $C=3;
    $D=4;

    $X=($A*$B)-($C*$D);
    
    echo  "Difference ="." ".$x."<br>"."<br>";   // بيطلع موجب

    // 4. Given two numbers N and M. Print the summation of their last digits. 

     $M=13;
     $N=12;

     $m=$M%10;
     $n=$N%10;
 
     $result=$m+$n;

     echo $result."<br>"."<br>";

    //  Given a number X. Print "EVEN" if the first digit of X is even number. Otherwise print "ODD".

    $num = 4569;
    $res=($num%2);

    $num1 = 3569;
    $res1=($num1%2);

    if($res == 0)
    {
        echo "EVEN"."<br>";
    }else{
        echo "ODD"."<br>";
    }

    if($res1 == 0)
    {
        echo "EVEN"."<br>";
    }else{
        echo "ODD"."<br>"."<br>";
    }

    // Memo and Momo are playing a game. Memo will choose a positive number a, and Momo will choose a positive number b
    
     $memo=15;
     $momo=7;
     $k=3;
      if(($memo % $k)==0){
           echo'Memo wins'."<br>";
      }elseif(($memo % $k)==0 && ($momo % $k)==0) {
        echo'both win'."<br>";
      } elseif(($momo % $k)==0) {
        echo'Momo wins'."<br>";
       }
       else{
        echo'NO one'."<br>"."<br>";
           }
      
      
     $memo1=22;
     $momo1=10;
     $k1=2;

     if(($memo1 % $k)==0){
        echo'Memo wins'."<br>";
   }elseif(($memo1 % $k)==0 && ($momo1 % $k)==0) {
     echo'both win'."<br>";
   } elseif(($momo1 % $k)==0) {
     echo'Momo wins'."<br>";
    }
    else{
     echo'NO one'."<br>"."<br>";
        }



// A number of two digits is lucky if one of its digits is divisible by the other. For example, 39, 82, and 55 are lucky, while 79 and 43 are not. 
// Given a number between 10 and 99, determine whether it is lucky or not.

                  
  $input1=34;
 $num1=intdiv($input1,10);
 $num2=($input1 % 10);

   
  if ($num1 === 0 || $num2 === 0) {
    echo "Not lucky";
  }
   elseif($num1 % $num2 === 0 || $num2 % $num1 === 0){
    echo "lucky"."<br>";
   }
   else{
    echo "Not Lucky"."<br>";

   }
 


?>