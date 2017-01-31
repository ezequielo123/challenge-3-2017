<?php

    require_once('lib/data-functions.php');


    get_index($list_of_students);
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
        <?php foreach(get_index($list_of_students) as $student_id => $student_name) : ?>

            <ol>
                <?php echo '<li>' . $student_name . '</li>'; ?>
            </ol>

            <?php $data_to_pass = array(
               
                'id' => $student_id,

                );
            
            $query_string = http_build_query($data_to_pass);

            ?>
        <p><a href="details.php?<?php echo $query_string; ?>">More details...</a></p>

        <?php endforeach; ?>            
    
</body>
</html>

