<!DOCTYPE html>
<html>
    <head>
        <title>QUEZON CITY UNIVERSITY</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form">
            <?php
            session_start();
            if (isset($_SESSION['success'])) {
            echo "<div style='color: green; font-weight: bold; margin-bottom: 10px;'>"
                . $_SESSION['success'] .
                "</div>";
            unset($_SESSION['success']);
            }
            ?>
            <h1>QUEZON CITY UNIVERSITY</h1> 
            <h4>(Formerly Quezon City Polytechnic University)</h4>
            <h2>CERTIFICATE OF REGISTRATION</h2><br>
            <h3>AY:2020-2021 <br> <br>
            <h1>Registration Form</h1>
        </div>
        <div class="main">
            <form action="Sign_Up.php" method="POST">
                <div id="name">
                    <h2 class="name">Student<br>_____________________________________________________________________________________________________</h2><br><br>
                    <label class="name">Last name</label>
                    <input type="text" class="sname" name="lastname_input" placeholder="last name" value="" required/>
                    <label class="name">First name</label>
                    <input type="text" class="sname" name="firstname_input" placeholder="first name" value="" required/>                
                    <label class="name">Middle name</label>
                    <input type="text" class="sname" name="middlename_input" placeholder="middle name" value="" required/>
                </div>
                <h2 class="name">Course:</h2><br>
                <select class="option" name="course_input">
                    <option class="option" disabled="disabled" selected="selected" required>Course:</option>
                    <option class="option" value="BS ACCOUNTANCY">BACHELOR IN ACCOUNTANCY</option>
                    <option class="option" value="BS ENTERPRENUERSHIP">BACHELOR IN ENTREPRENEURSHIP</option>
                    <option class="option" value="BACHELOR IN ELECTRONICS ENGINEERING">BACHELOR IN ELECTRONICS ENGINEERING</option>
                    <option class="option" value="BACHELOR IN INDUSTRIAL ENGINEERING">BACHELOR IN INDUSTRIAL ENGINEERING</option>
                    <option class="option" value="BS INFROMATION TECHNOLOGY">BACHELOR IN INFORMATION TECHNOLOGY</option>
                </select>
                <h2 class="name">Year:</h2><br>
                <label></label>
                <input  type="radio" name="year_input" value="1st Year" class="radio" required>  1st Year</option>
                <input  type="radio" name="year_input" value="2nd Year" class="radio" required>  2nd Year</option>
                <input  type="radio" name="year_input" value="3rd Year" class="radio" required>  3rd Year</option>
                <input  type="radio" name="year_input" value="4th Year" class="radio" required>  4th Year</option>
                </label><br>
                <h2 class="name">Campus:</h2><br>
                <select class="option" name="campus_input" required>
                    <option class="option" disabled="disabled" selected="selected">Campus:</option>
                    <option class="option" value="Batasan Hills">Batasan Hills</option>
                    <option class="option" value="San Bartolome">San Bartolome</option>
                    <option class="option" value="San Francisco">San Francisco</option>
                </select>
                <br><br>
                <input name="Sign_Up" type="submit" class="SubmitButton" value="Submit"/>
            </form>
        </div>
    </body>
</html>