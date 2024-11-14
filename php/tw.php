<?php 

     $arr=[2,4,44,8,9,6,1,5,3,12];

     $min = $arr[0];
        
     foreach ($arr as $value) {
        
         if ($value < $min) {
             $min = $value;
         }
     }

      echo "min :". $min . '<br>';

     echo  '************************************************************************************';

     foreach ($arr as $value) {
          
        if ($value % 2 == 0) {
            echo $value . '<br>' ;
        }

     }
  
     echo  '************************************************************************************';
     
     $fruits = array("apple", "banana", "orange", "grape", "mango");
     $flag=false;
     foreach ($fruits as $value) {
      
        if ($value === "banana") {
              $flag=true;
             
        }
      
     }

     if($flag){
        echo "exist";
     }else {
        echo "not exist";
     }

    echo  '************************************************************************************';
    // for($i=0;$i < count($fruits) ;$i++){
    //         switch($fruits){
    //         case "banana":
    //             echo 'is existed <br>';

    //             break;
    //        default:
    //        echo 'is not existed <br>';
    //        break;
    //     }
    //  }

     
?>