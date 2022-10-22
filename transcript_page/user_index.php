<?php
//user_registration.php

include 'database_connection.php';
include 'function.php';

include 'header.php';


?>
<h3>Apply</h3>
<div>
    <form action="issue_application.php" method="POST">
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <input type="submit" name="login_button" class="btn btn-primary" value="Apply for Transcript" />
        </div>
    </form>
</div>
<br><br>
<h3> Current Applications </h3>
<table class="table table-dark">
    <tr>
        <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Branch</th>
        <th>Semester</th>
        <th>CGPA</th>
        <th>SGPA</th>
        <th colspan="2">Status</th>
    </tr>

    <?php
    $rn = '';

    $_SESSSION['roll_no'] = $rn;

    $query = "
    SELECT roll_no, f_name, l_name, branch, semester, cgpa, sgpa FROM application_form WHERE roll_no=$rn";
    

    $result = $connect->query($query);

    if($result-> rowCount()>0)
    {
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>".$row["roll_no"]."</td><td>".$row["f_name"]."</td><td>".$row["l_name"]."</td><td>".$row["branch"]."</td><td>".$row["semester"]."</td><td>".$row["cgpa"]."</td><td>".$row["sgpa"]."</td><td> <input type=radio> Approve <input type=radio> Disapprove </td></tr>";
        }

        echo "</table>";
    }
    else{
        echo "No Applications Remaining";
    }

    ?>
    
</table>

    

<?php
include 'footer.php';
?>