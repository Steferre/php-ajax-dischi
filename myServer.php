<?php 
include "db/discsList.php";

header("Content-Type: application/json");

echo json_encode($discs);

?>