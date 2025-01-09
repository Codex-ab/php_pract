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

// $family = array("Abdullah", "Ibrahim", "Areej");

// foreach ($family as $key => $value) {
//     $family[$key] = $value . " Zulfiqar";
//     echo "Array item " . $key . " is " . $value . " <br>";
//     echo "Update: $family[$key] <br>";
// } //end foreach

// echo "<br><br>";
// echo "Regular for loop: <br><br>";
// for ($i = 0; $i < sizeof($family); $i++) {
//     echo $family[$i] . "<br>";
// }


// $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// for ($i = 0; $i < sizeof($numbers); $i++) {
//     echo $numbers[$i] . "<br>";
// }

// echo "<br><br>";
// //Write a for loop to count down from 100 to 0
// for ($i = 100; $i >= 0; $i--) {
//     echo $i . "<br>";
// }
?>


<?php
//while loopp started here

// $family = array("Abdullah", "Ibrahim", "Areej", "Ali");

// $i = 0;
// while ($i < sizeof($family)) {
//     echo $family[$i] . "<br>";
//     $i++;
// } //end while loop


// echo "<br><br>";

// //5 multiplied by 1 to 10 table of 5
// $i = 1;
// while ($i <= 10) {
//     $j = $i * 5;
//     echo $j . "<br>";
//     $i++;
// } //end while loop

// echo "<br><br>";
// // Write a while loop to count from 0 to 20 (inclusive)
// // Let the loop count by 2 instead of by 1 each iteration
// // Print out the counter value each time
// $i = 0;
// while ($i <= 20) {
//     echo $i . "<br>";
//     $i += 2;
// } //end while loop


?>

<?php

// Get Method started here

if ($_GET) {
    echo $_GET['number'];
}


?>

<p>Please Enter the whole number</p>

<form method="$_GET">
    <input type="text" name="number">
    <input type="submit" value="Go!">
</form>