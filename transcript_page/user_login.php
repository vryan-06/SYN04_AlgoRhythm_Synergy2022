<?php
//user_login.php
include 'database_connection.php';
include 'function.php';


$message = '';

if(isset($_POST["login_button"]))
{
	$formdata = array();

    if(empty($_POST["roll_no"]))
	{
		$message .= '<li>Roll Number is required</li>';
	}
    else{
        $formdata['roll_no'] = trim($_POST['roll_no']);
    }

    if(empty($_POST["student_password"]))
	{
		$message .= '<li>Password is required</li>';
	}
    else{
        $formdata['student_password'] = trim($_POST['student_password']);
    }

    if($message == '')
	{
		$data = array(
			':roll_no'		=>	$formdata['roll_no']
		);

		$query = "
		SELECT * FROM student_registration 
        WHERE roll_no = :roll_no
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

        if($statement->rowCount() > 0)
		{
			foreach($statement->fetchAll() as $row)
			{
                if($row['student_password'] == $formdata['student_password'])
				{
                    $_SESSION['roll_no'] = $row['user_unique_no'];
                    // header('location:issue_application.php');

					header('location:user_index.php');

                }
                else
                {
                    $message = '<li>Wrong Password</li>';
                }
            }
        }
        else
		{
			$message = '<li>Wrong Email Address</li>';
		}
    }
}

include 'header.php'; 
?>

<div class="d-flex align-items-center justify-content-center" style="height:700px;">
	<div class="col-md-6">
        <?php 
        if($message != '')
        {
            echo '<div class="alert alert-danger"><ul>'.$message.'</ul></div>';
        }
        ?>
		<div class="card">
			<div class="card-header">Student Login</div>
			<div class="card-body">
				<form method="POST">
					<div class="mb-3">
						<label class="form-label">Roll No.</label>
						<input type="text" name="roll_no" id="roll_no" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" name="student_password" id="student_password" class="form-control" />
					</div>
					<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
						<input type="submit" name="login_button" class="btn btn-primary" value="Login" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php'; 
?>