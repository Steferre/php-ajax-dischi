<?php 
include "db/discsList.php";

include "utilities/filter.php";

$fGenre = isset($_GET["fGenre"]) ? $_GET["fGenre"] : null;

$filters = [
    "genre" => $fGenre
];

//var_dump(filterData($discs, $filters));

header("Content-Type: application/json");

echo json_encode(filterData($discs, $filters));

?>