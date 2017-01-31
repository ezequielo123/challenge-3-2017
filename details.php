<?php

    require_once('lib/data-functions.php');


    if(isset($_GET['id'])) 
    { 

        $unique_id = $_GET['id'];

    }
    $all_the_names = get_data();
    $student_id = $_GET['id'];
    var_dump($student_id);
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div>
            
    </div>       
    
</body>
</html>

