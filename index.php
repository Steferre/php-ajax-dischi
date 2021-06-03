<?php 
include "db/discsList.php";

$discsCards = $discs['response']; 
/*
foreach($discsCards as $discCard) {
    echo $discCard['poster'];
}
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-AJAX-DISCHI</title>

    <link rel="stylesheet" href="dist/style.css">
</head>
<body>
    <main>
        <div class="container">
        <?php
            foreach($discsCards as $discCard) {
        ?>
            <div class="discBox">
                <img src="<?php echo $discCard['poster']; ?>" alt="immagine disco">
                <h4><?php echo $discCard['title']; ?></h4>
                <span><?php echo $discCard['author']; ?> </span>
                <span><?php echo $discCard['year']; ?></span>
                <p><small><?php echo $discCard['genre']; ?></small></p>
            </div>
        <?php
            }
        ?>
        </div>
    </main>
</body>
</html>