<?php
header('Content-type: text/html; charset=utf-8');
require_once ("talesdb.php");
$query = "SELECT*FROM tales where ganre='tales'";
$select_tales = mysqli_query($link, $query);
while ($tales = mysqli_fetch_array($select_tales)){
    $id = $tales['id'];
    $name = $tales['name'];
    $author = $tales['author'];
    $ganre = $tales['ganre'];
    echo "<tr><td>$id</td><td>$name</td><td>$author</td><td>$ganre</td></tr>";
};
?>
