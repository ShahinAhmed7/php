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
         6 .strings operator
        <hr>

        <?php 
             
        
            // $x = "hello";
            // $y = " world";
            // $z = $x . $y;

            // echo $z;


            $x = "hello";
            $y = " world";
            $x .= $y;

            echo $x;



        ?>


       </div>
</body>
</html>














