<?php
    
    $data = array();
    $data[] = array( 
        'name'     => $_POST['name'],
        'email'    => $_POST['email'],
        'password' =>  $_POST['password']
        );
                               
    $input = file_get_contents('employee_data.json');

    $tempArray = json_decode($input);
    array_push($tempArray, $data);

    $jsonData = json_encode($tempArray);
    file_put_contents('employee_data.json', $jsonData);
       
    echo '<h2 style="color : green ">data passed to JSON file successfully :)</h2>';
       
?>
