<?php
header('Content-type: text/html; charset=utf-8');
require_once ("talesdb.php");
$query = "SELECT*FROM authors";
$select_tales = mysqli_query($link, $query);
while($author = mysqli_fetch_array($select_tales)){
    $img = $author['img_path'];
    $suname = $author['suname'];
    $book = $author['book'];
    $audio_patch = $author['audio_path'];
    $ganre = $author['ganre'];
    echo "<tr><td>$img</td><td>$name</td><td>$suname</td><td>$book</td><td>$audio_patch</td><td>$ganre</td></tr>";
}
?>
