<?php
include 'database_connection.php';
include 'header.php';
?>

<h2>Pending Applications</h2>

<table class="table table-dark">
    <tr>
        <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Branch</th>
        <th>Semester</th>
        <th>CGPA</th>
        <th>SGPA</th>
        <th colspan="2">Decision</th>
    </tr>

    <?php
    $query = "
    SELECT roll_no, f_name, l_name, branch, semester, cgpa, sgpa
    FROM application_form";
    

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