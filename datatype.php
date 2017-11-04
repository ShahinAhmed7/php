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
        1 .String
        2 .Integer
        3 .Float
        4 .Boolen
        4 .Array
        5 .Object
        6 .Null
        7 .Resource
        <br>
        <hr>
         5 .Object
        <hr>

            <?php 
            class student{
              function department(){
                return "physics";
              }

              function details(){
                echo $this->department();
              }
            }
            $st = new student();
            $st->details();
         ?>
       </div>
</body>
</html>














