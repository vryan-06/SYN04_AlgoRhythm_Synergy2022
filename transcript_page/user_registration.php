<?php
//user_registration.php

include 'database_connection.php';
include 'function.php';

include 'header.php';

$message = '';

$success = '';

if(isset($_POST["register_button"]))
{
	$formdata = array();


    //Roll number validation
	if(empty($_POST["roll_no"]))
	{
		$message .= '<li>Roll Number is required</li>';
	}
    else
    {
        $formdata['roll_no'] = trim($_POST['roll_no']);
    }
	
    //Name validation
    if(empty($_POST['f_name']))
	{
		$message .= '<li>First Name is required</li>';
	}
	else
	{
		$formdata['f_name'] = trim($_POST['f_name']);
	}

    if(empty($_POST['l_name']))
	{
		$message .= '<li>Last Name is required</li>';
	}
	else
	{
		$formdata['l_name'] = trim($_POST['l_name']);
	}

    //Password number validation
    if(empty($_POST["student_password"]))
	{
		$message .= '<li>Password is required</li>';
	}
	else
	{
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
			$message = '<li>Roll No Already Registered</li>';
		}
        else
        {

            $data = array(
				':roll_no'	    	=>	$formdata['roll_no'],
				':f_name'			=>	$formdata['f_name'],
				':l_name'		    =>	$formdata['l_name'],
				':student_password'	=>	$formdata['student_password'],
            );

            $query = "
			INSERT INTO student_registration 
            (roll_no, f_name, l_name, student_password) 
            VALUES (:roll_no, :f_name, :l_name, :student_password)
			";

            $statement = $connect->prepare($query);

			$statement->execute($data);

            $success = 'You have successfully registered!!';
        }
    }
}

?>

<div class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:700px;">
	<div class="col-md-6">

    <?php
    if($message!='')
    {
        echo '<div class="alert alert-danger"><ul>'.$message.'</ul></div>';
    }

    if($success!='')
    {
        echo '<div class="alert alert-success">'.$success.'</div>';
    }
    ?>

        <div class="card">
            <div class="card-header">New Student Registration</div>
			<div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label class="form-label">Student Roll No. </label>
                            <input type="text" name="roll_no" id="roll_no" class="form-control" />
                        </div>
                       
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="f_name" class="form-control" id="f_name" value="" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="l_name" id="l_name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="student_password" id="student_password" class="form-control" />
                        </div>
                        <div class="text-center mt-4 mb-2">
						<input type="submit" name="register_button" class="btn btn-primary" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>