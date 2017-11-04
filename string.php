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


            $x = "PHP is nice";
            // echo strlen($x);
            // echo str_word_count($x);
            // echo strrev($x);
            // echo strpos($x, "nice");
            echo str_replace("PHP", "Java", $x); 
         ?>
       </div>
</body>
</html>

























