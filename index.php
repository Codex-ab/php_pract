<?php
    //if else conditions
    // $user = "rob";
    // $age = 22;

    // if ($user == "john") {
    //     echo "Hello John";
    // } else {
    //     echo "I don't know you";
    // }

    // echo "<br><br>";

    // if ($age >= 22) {
    //     echo "Here, Have you beer! <br>";
    // } else {
    //     echo "Here, have a Coca Cola <br>";
    // }

    // if ($age >= 21 && $user == "john") {
    //     echo "Welcome to the heaven of Love Hearted Peoples";
    // }else{
    //     echo "You are not invited to the party";
    // }

    // if($user == "rob" || $age >= 21){
    //     echo "Welcome<br>";
    // }else {
    //     echo "Sorry you have to be named Rob , or at least 21 to enter <br>";
    // }




    // // Challege solution 

    // if($user == "rob" || $user == "john" || $user == "ed"){
    //     echo "Welcome to the people of the awsome people! <br>";
    // }else{
    //     echo "Sorry, but you aren't allowed in this club. <br>";
    // }
?>

<?php

    $family = array("Abdullah", "Ibrahim", "Areej");

    foreach($family as $key => $value){
        $family[$key] = $value . " Zulfiqar";
        echo "Array item " . $key . " is " . $value . " <br>";
        echo "Update: $family[$key] <br>";
    }//end foreach

    echo "<br><br>";
    echo "Regular for loop: <br><br>";
    for($i = 0; $i < sizeof($family); $i++){
        echo $family[$i] . "<br>";
    } 
?>


