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
         7 .Array operator
        <hr>

        <?php 
             
          // $x = array(
          //   "a" => "dhaka",
          //   "b" => "faridpur",
            
          // );
          // $y = array(
          //   "c" => "kushtia",
          //   "d" => "rajshahi"
          // );

          // var_dump($x+$y);

     
          // $x = array(
          //   "a" => "dhaka",
          //   "b" => "faridpur",
            
          // );
          // $y = array(
          //   "c" => "kushtia",
          //   "d" => "rajshahi"
          // );

          // var_dump($x != $y);


          $x = array(
            "a" => "dhaka",
            "b" => "faridpur",
            
          );
          $y = array(
            "c" => "kushtia",
            "d" => "rajshahi"
          );

          var_dump($x === $y);




        ?>


       </div>
</body>
</html>














