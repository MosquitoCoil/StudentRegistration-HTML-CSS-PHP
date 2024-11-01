<?php 
    ini_set('display_errors', 0); 
    ini_set('display_startup_errors', 0); 
    error_reporting(E_ALL);
    $mysql = new mysqli("localhost", "root", "", "qc_registration_form_data");

        if ($mysql->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysql->connect_error;
            exit();
        }

    $lastname = $mysql->real_escape_string($_POST['lastname_input']);
    $firstname = $mysql->real_escape_string($_POST['firstname_input']); 
    $middlename = $mysql->real_escape_string($_POST['middlename_input']);
    $course = $mysql->real_escape_string($_POST['course_input']);
    $year = $mysql->real_escape_string($_POST['year_input']);
    $campus = $mysql->real_escape_string($_POST['campus_input']);

    if(($lastname != "" AND isset($_POST['lastname_input'])) AND
        ($firstname != "" AND isset($_POST['firstname_input'])) AND
        ($course != "" AND isset($_POST['course_input'])) AND
        ($year != "" AND isset($_POST['year_input'])) AND
        ($campus != "" AND isset($_POST['campus_input']))) {  

        $mysql->query("INSERT INTO registration_table (last_name, first_name, middle_name, course, years, campus) VALUES ('{$lastname}','{$firstname}','{$middlename}','{$course}','{$year}','{$campus}');");
        $mysql->close();
    }
?>
