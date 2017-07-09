<!DOCTYPE html>
<html>
<head>
	<title>
		
		СЕРТИФИКАТ
	</title>

	<link href="https://fonts.googleapis.com/css?family=Droid+Serif&effect=fire-animation" rel="stylesheet">
		
              <style>
     body, div {
        font-family: 'Droid Serif', serif;
        font-size: 36px;
        text-align: center
        
      }
    </style>
        <div class="font-effect-fire-animation">Ваш сертификат ! <div>

</head>
<body>

<?php
$source = "Certificate.png" ;
$image = imagecreatefrompng ($source);



 $output = "Certificate1.png" ;

// colors to use

//$white = imagecolorallocate ($image, 255, 255, 255);
//$black = imagecolorallocate ($image, 0, 0, 0);
$blue = imagecolorallocate ($image, 255, 2, 2);



// изменяем параметры:
     $fon_size = 40;
     $rotation = 0 ;
     $origin_x = 185;
     $origin_y = 200;
     $font = "droid-serif.ttf" ;
     $text = $_GET['name'];

     $text1 = imagettftext ($image, $fon_size, $rotation, $origin_x, $origin_y, $blue, $font, $text) ;




imagejpeg ($image, $output);


?>

<img src="<?php echo $output;?>" </p>
<br>
<a href="/session/index.php">Вернуться в начало</a>
</body>
</html>