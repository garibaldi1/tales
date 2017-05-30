<?php
require_once ("talesdb.php");
$query = "SELECT*FROM tales";
$select_tales = mysqli_query($link, $query);
while ($tales = mysqli_fetch_array($select_tales)){
    echo $tales['id'],"<br>";
    echo $tales['name'],"<br>";
    echo $tales['author'],"<br>";
    echo $tales['ganre'],"<br>";
};
?>
