<?php
include "./config/const.php";

function getImages ($dir) {
	$bigImages;
	$smallImages;

	$list = scandir($dir);

	if (!$list){
		return;}
	unset($list[0], $list[1]);

	foreach ($list as $file) {
		if (stristr($file, 'big') && (stristr($file, 'jpg') || stristr($file, 'png'))){
		$bigImages[]=$file;
    }
	elseif (stristr($file, 'small') && (stristr($file, 'jpg') || stristr($file, 'png'))){
		$smallImages[]=$file;
}
}
	return	array_combine($bigImages, $smallImages);
}

$images= getImages (IMG_ROOT);

//print_r(getImages (IMG_ROOT))  ;

?>


<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/css/style.css">
    </head> 
  <body>

<?php  foreach ($images as $simg => $bimg): ?>
	<a href="<?= "public/img/".$simg?>" target="_blank">
	<img class="small-img" src="<?= "public/img/".$bimg?>" alt="">
	</a>
<?php endforeach;?>

  </body>
</html>


