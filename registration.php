<?php
$link = mysqli_connect("localhost","root","admin")  or die("failed to connect to server !!");
mysqli_select_db($link,"users");
if(isset($_REQUEST['submit']))
{
    $errorMessage = "";
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $robofeedid=$_POST['robofeedid'];
    $robofeedname=$_POST['robofeedname'];
    $email=$_POST['email'];
    $password=$_POST['password'];


// Validation will be added here

    if ($errorMessage != "" ) {


        echo "<p class='message'>" .$errorMessage. "</p>" ;

    }
    else{

//Inserting record in table using INSERT query
        $insqDbtb="INSERT INTO `users`.`members`
(`firstname`, `lastname`, `gender`, `dob`, `robofeedid`,
`robofeedname`, `email`, `password`) VALUES ('$firstname', '$lastname',
'$gender', '$dob', '$robofeedid', '$robofeedname', '$email', '$password')";
        mysqli_query($link,$insqDbtb) or die(mysqli_error($link));

        session_start();
        $_SESSION["user"]=$_POST["email"];
        header("location:user.php");




    }


}


?>


