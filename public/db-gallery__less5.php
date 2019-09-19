
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="public/css/style.css">
    </head> 
  <body>

<?php  foreach ($pictures as $key => $picture): ?>


	<a href="<?= "public\img\big\\".$picture['name'];?>" target="_blank">

	<img class="small-img" src=<?="public\img\small\\".$picture['name'];?> alt="">
	</a>
	
<?php endforeach;?>

  </body>
</html>

