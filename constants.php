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


            <?php 

            // define('value', 'I am learning PHP', true);
            // echo VALUE;


            define("VALUE", "I am learning PHP");
            
            function learnPHP(){

                echo VALUE;
            }

            learnPHP();
         ?>
         


       </div>
</body>
</html>

