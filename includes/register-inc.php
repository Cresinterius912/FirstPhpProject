<?php 

    //check if data posted
    if(!isset($_POST["submit"])){
        // user trying to access this file without submitting a form


    // redirect user back to registration page
    header("location: ../register.php");
    exit();
}
else{
    $username = $POST["username"];
    $password = $POST["password"];
    $firstName = $POST["name"];
    $lastName = $POST["surname"];
    $age = $POST["age"];

}

?>