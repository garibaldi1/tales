<?php
header('Content-type: text/html; charset=utf-8');
require_once ("talesdb.php");
$query = "SELECT*FROM authors";
$select_tales = mysqli_query($link, $query);
while ($tales = mysqli_fetch_array($select_tales)){
    $img = $tales['img_path'];
    $suname = $tales['suname'];
    $book = $tales['book'];
    $audio_patch = $tales['audio_path'];
    $ganre = $tales['ganre'];
    echo "<tr><td>$img</td><td>$name</td><td>$suname</td><td>$book</td><td>$audio_patch</td><td>$ganre</td></tr>";
};
?>
