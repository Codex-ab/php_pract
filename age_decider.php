<?php
// Function to greet the user based on their name and age
function greetUser($user, $age) {
    if ($user == "john") {
        echo "Hello John";
    } else {
        echo "I don't know you";
    }

    echo "<br><br>";

    if ($age >= 22) {
        echo "Here, Have you beer! <br>";
    } else {
        echo "Here, have a Coca Cola <br>";
    }

    if ($age >= 21 && $user == "john") {
        echo "Welcome to the heaven of Love Hearted Peoples";
    }
}

// Taking user input from a web form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $age = $_POST['age'];

    // Calling the function with user input
    greetUser($user, $age);
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="user">
  Age: <input type="text" name="age">
  <input type="submit">
</form>

</body>
</html>


