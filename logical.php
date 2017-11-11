<?php 
    $fonts = "arial";
    // $color = "#dc1d00";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello php</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body{
          font-family: <?php echo $fonts;?>;
         /* color: <?php echo $color; ?>*/
        }
    </style>


</head>
<body>
    <div class="php-style">
        <h2><?php echo "PHP Basic Class" ;?></h2>
        1 .Arithmetic operator
        2 .Assignment operator
        3 .Comparision operator
        4 .increment Decrement operator
        4 .Logical operator
        5 .Object
        6 .strings operator
        7 .Array operator
        <br>
        <hr>
         5 .Logical operator
        <hr>

        <?php 
             
        // $a = 40;
        // $b = 20;


        // if($a ==40 && $b == 20){
        //     echo 'hello world';    
        // }else{
        //     echo 'wrong';
        // }
        
        // if($a ==40 || $b == 20){  
        //     echo 'hello world';    
        // }else{
        //     echo 'wrong';
        // }
        

        // $a = 40;
        // $b = 20;

        // if($a ==40 xor $b ==20){
        //     echo 'hello world';
        // } else{
        //     echo 'wrong';
        // }


        $a = 40;
        $b = 20;

        if($a !==30){
            echo 'hello world';
        } else{
            echo 'wrong';
        }



        // if($a ==41 || $b == 20){
        //     echo 'Righ Code';
        // }else{
        //     echo 'nothing new';
        // }

  
        // if($a ==40 xor $b == 20){
        //     echo 'Righ Code';
        // }else{
        //     echo 'nothing new';
        // }









        ?>


       </div>
</body>
</html>














