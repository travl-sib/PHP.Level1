
<?php

$search = $_GET["search"] ?? NULL;


function getSearch( $search) {

	if (empty($search)) { return null; echo "Выбирети товар"; }
	

		return "SELECT * FROM goods WHERE id_good = ".$search." ;";
}


$search_query = getSearch($search);

