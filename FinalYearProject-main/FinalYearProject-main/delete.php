<?php

if(isset($_POST["id"]))

{
    $connect = new PDO('mysqli:host=localhost;dbname=hindiusmcalender2023', 'root', '');

    $query="
    DELETE from hindufestivals WHERE id=:id";
    $statement = $connect->prepare($query);
    $statement->execute(array(':id' => $_POST['id']));
  
}
?>