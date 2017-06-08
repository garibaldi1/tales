<?php
header('Content-type: text/html; charset=utf-8');
require_once ("talesdb.php");
$query = "SELECT*FROM authors";
$select_tales = mysqli_query($link, $query);
while($author = mysqli_fetch_array($select_tales)){
    $id = $author['id'];
    $name = $author['name'];
    $author1 = $author['author'];
    $ganre = $author['ganre'];
    echo "<tr><td>$id</td><td>$name</td><td>$author1</td><td>$ganre</td></tr>";
}
?>
