<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysql = new mysqli("localhost", "root", "", "student_db");

if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql->connect_error;
    exit();
}

$lastname = $mysql->real_escape_string($_POST['lastname_input']);
$firstname = $mysql->real_escape_string($_POST['firstname_input']); 
$middlename = $mysql->real_escape_string($_POST['middlename_input']);
$course = $mysql->real_escape_string($_POST['course_input']);
$yr = $mysql->real_escape_string($_POST['year_input']);
$campus = $mysql->real_escape_string($_POST['campus_input']);

if(($lastname != "" AND isset($_POST['lastname_input'])) AND
    ($firstname != "" AND isset($_POST['firstname_input'])) AND
    ($course != "" AND isset($_POST['course_input'])) AND
    ($yr != "" AND isset($_POST['year_input'])) AND
    ($campus != "" AND isset($_POST['campus_input']))) {  

    $mysql->query("INSERT INTO registration_tbl (lastname, firstname, middlename, course, yr, campus) VALUES 
    ('{$lastname}','{$firstname}','{$middlename}','{$course}','{$yr}','{$campus}');");

    $_SESSION['success'] = "Registration successful!";

    $mysql->close();

    header("Location: Registrationform.php");
    exit();
}
?>