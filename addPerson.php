<?php
require('DataProvider.class.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

    try{
        $db = new DataProvider();
       // $db->connect()->addPerson();

    }catch(Exception $e){
        echo $e->getMessage();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>ADD a Person</h1>
        <form action="" method="POST">
            <label for="name">Name:
                <input required id="name" name="name" type="text">
            </label>
            <label for="day_of_birth">Day of Birth:
                <input required type="date" id="day_of_birth" name="day_of_birth">
            </label>
            <label for="place_of_birth">Place of Birth:
                <input required type="text" id="place_of_birth" name="place_of_birth">
            </label>
            <label for="name_of_mother">Mother's name:
                <input required type="text" id="name_of_mother" name="name_of_mother">
            </label>
            <label for="name_of_father">Father's name:
                <input required type="text" id="name_of_father" name="name_of_father">
            </label>
            <label for="date_of_death">Date of death:
                <input type="date" id="date_of_death" name="date_of_death">
            </label>
            <label for="place of_death">Place of death:
                <input type="text" id="place_of_death" name="place_of_death">
            </label>
            <input type="submit" value="Submit">
        </form>
            <a class="backToHomeBtn" href="index.php">Back to Home</a>
    </div>
</body>
</html>