<!DOCTYPE html>
<html>
    <head>
        <title>QUEZON CITY UNIVERSITY</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form">
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
                    <input type="text" class="sname" name="lastname_input" placeholder="last name" value=""/>
                    <label class="name">First name</label>
                    <input type="text" class="sname" name="firstname_input" placeholder="first name" value=""/>                
                    <label class="name">Middle name</label>
                    <input type="text" class="sname" name="middlename_input" placeholder="middle name" value=""/>
                </div>
                <h2 class="name">Course:</h2><br>
                <select class="option" name="course_input">
                    <option class="option" disabled="disabled" selected="selected">Course:</option>
                    <option class="option" value="BS ACCOUNTANCY">BACHELOR IN ACCOUNTANCY</option>
                    <option class="option" value="BS ENTERPRENUERSHIP">BACHELOR IN ENTREPRENEURSHIP</option>
                    <option class="option" value="BACHELOR IN ELECTRONICS ENGINEERING">BACHELOR IN ELECTRONICS ENGINEERING</option>
                    <option class="option" value="BACHELOR IN INDUSTRIAL ENGINEERING">BACHELOR IN INDUSTRIAL ENGINEERING</option>
                    <option class="option" value="BS INFROMATION TECHNOLOGY">BACHELOR IN INFORMATION TECHNOLOGY</option>
                </select>
                <h2 class="name">Year:</h2><br>
                <label></label>
                <input  type="radio" name="year_input" value="1st Year" class="radio">  1st Year</option>
                <input  type="radio" name="year_input" value="2nd Year" class="radio">  2nd Year</option>
                <input  type="radio" name="year_input" value="3rd Year" class="radio">  3rd Year</option>
                <input  type="radio" name="year_input" value="4th Year" class="radio">  4th Year</option>
                </label><br>
                <h2 class="name">Campus:</h2><br>
                <select class="option" name="campus_input">
                    <option class="option" disabled="disabled" selected="selected">Campus:</option><br>
                    <option class="option" value="Batasan Hills">Batasan Hills</option>
                    <option class="option" value="San Bartolome">San Bartolome</option>
                    <option class="option" value="San Francisco">San Francisco</option>
                <a href = "Registration.php"><h2><input name="Sign_Up" type="submit" class="SubmitButton" value="Sign Up"/></h2></a>
            </form>
        </div>
    </body>
</html>