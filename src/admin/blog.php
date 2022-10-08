<?php
include "../config.php";

$query = 'SELECT * FROM blog';
$result = mysqli_query($con, $query);

echo '<h1>Contenu de la base de donnée : </h1>';

while($record = mysqli_fetch_assoc($result)){
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p>'.$record['content'].'</p>';
    echo 'Posted: '.$record['content'];
    echo'<hr>';
};
?>