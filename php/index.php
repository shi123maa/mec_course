<?php
$user_name="shimaa";
$password="123";

$user="shimaa";
$pass="123";


if($user_name ===$user && $password === $pass){

    echo'done'."<br>";
}else{

    echo 'error'."<br>";
}

/////////////////////////////////////////////////

$min =10;

$max =20;

$num =15;

if($num >= $min && $num <= $max){

    echo'true'."<br>";
}else{

    echo'false'."<br>";
}

////////////////////////////////////////////////////////////////

$c = 'm';

if($c === "a" ||$c === "i" || $c === "e" || $c === "o" || $c === "u" ){
    
    echo'true'."<br>";   
   
}else{
    echo'false'."<br>";

}

///////////////////////////////////////////////

$day = "Friday";
switch($day){
    case "Saturday":
        echo "day 1";
        break;  
    case "Sunday":
        echo "day 2";
        break; 
    case "Monday":
        echo "day 3";
    case "Tuesday":
        echo "day 4";
          break;  
     case "Wednesday":
            echo "day 5";
          break; 
    case "Thursday":
          echo "day 6";
           break; 
    case "Friday":
         echo "day 7";
         break; 
    default:
         echo " error ";
                            
}


?>