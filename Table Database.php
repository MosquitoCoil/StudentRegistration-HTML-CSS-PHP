<!DOCTYPE html>
<html>
    <head>
        <title>Table Database</title>
        <link rel="stylesheet" href="table.css">
    </head>
    <body>
        <div class="main">
            <div class="form">
            <form action="Table Database.php" method="post">
                <input class="search" type="text" name="valuetosearch" placeholder="Search"><br><br>
                <input class="filter" type="submit" name="search" value="Filter"><br><br>
            </from>
            </div>
            <h1>TABLE DATABASE</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>MIDDLE NAME</th>
                <th>COURSE</th>
                <th>YEAR</th>
                <th>CAMPUS</th>
            </tr>
            <?php
            $conn = new mysqli ('localhost', 'root', '', 'student_db');
            if ($conn->connect_error) {
                die("Connection failed:" .$conn-> connect_error);
            }
            $result = null;
            if (isset($_POST['search']) AND $_POST['valuetosearch'] != "") {
                $valuetosearch = $_POST['valuetosearch'];
                $searchsql = "SELECT * FROM `registration_table` WHERE CONCAT (`studentID`, `lastname`, `firstname`, `middlename`, `course`, `years`, `campus`)  LIKE '%".$valuetosearch."%'";
                $result = $conn-> query($searchsql);
            }

            else{
                $displaysql = "SELECT  lastname, firstname, middlename, course, years, campus from registration_tbl limit 10 ";
                $result = $conn-> query($displaysql);
            }

            if($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>"  ."</td><td>" .$row["lastname"] ."</td><td>" .$row["firstname"] ."</td><td>" .$row["middlename"] ."</td><td>"
                        .$row["course"] ."</td><td>" .$row["years"] ."</td><td>" .$row["campus"] ."</td></tr>";
                }
                echo "</table>";
            }

            else{
                echo "0 result";
            }

            $conn-> close();
            ?>
        </table>
        </div>
    </body>
</html>