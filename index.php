<?php

    require_once('lib/data-functions.php');

    $list_of_students = array(
        'name' => $_POST['names'],
        'surname' => $_POST['surnames'],
        'gender' => $_POST['genders'],
        'age' => $_POST['ages']
    );


    insert_data($list_of_students);
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="hola">
        <form name="form" action="" method="post">
            <p>Name: <input type="text" name="names"></p>
            <p>Surmane: <input type="text" name="surnames"></p>
            <p><input type="radio" name="genders" value="male" checked> Male
            <input type="radio" name="genders" value="female"> Female</p>
            <p><input type="checkbox" name="ages" value="more18">More than 18</p>
            <input type="submit" value="Submit">
        </form>
    </div>
    
</body>
</html>

