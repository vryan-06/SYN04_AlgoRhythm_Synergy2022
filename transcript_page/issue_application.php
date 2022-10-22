<?php
    include 'database_connection.php';

    $message = '';

    $success = '';


    if(isset($_POST["register_button"]))
    {
        $formdata = array();

        if(empty($_POST["roll_no"]))
        {
            $message .= '<li>Roll Number is required</li>';
        }
        else
        {
            $formdata['roll_no'] = trim($_POST['roll_no']);
        }

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

        if(empty($_POST['branch']))
        {
            $message .= '<li>Branch is required</li>';
        }
        else
        {
            $formdata['branch'] = trim($_POST['branch']);
        }

        if(empty($_POST['semester']))
        {
            $message .= '<li>Semester No is required</li>';
        }
        else
        {
            $formdata['semester'] = trim($_POST['semester']);
        }

        if(empty($_POST['cgpa']))
        {
            $message .= '<li>CGPA is required</li>';
        }
        else
        {
            $formdata['cgpa'] = trim($_POST['cgpa']);
        }

        if(empty($_POST['sgpa']))
        {
            $message .= '<li>SGPA is required</li>';
        }
        else
        {
            $formdata['sgpa'] = trim($_POST['sgpa']);
        }

        if($message == '')
        {
            $data = array(
				':roll_no'	   	=>	$formdata['roll_no'],
				':f_name'		=>	$formdata['f_name'],
				':l_name'		=>	$formdata['l_name'],
				':branch'		=>	$formdata['branch'],
                ':semester'		=>	$formdata['semester'],
                ':cgpa'		    =>	$formdata['cgpa'],
                ':sgpa'		    =>	$formdata['sgpa'],
            );

            $query = "
			INSERT INTO application_form 
            (roll_no, f_name, l_name, branch, semester, cgpa, sgpa) 
            VALUES (:roll_no, :f_name, :l_name, :branch, :semester, :cgpa, :sgpa)
			";

            $statement = $connect->prepare($query);

			$statement->execute($data);

            $success = 'You have successfully registered!!';
            header('location:user_index.php');

        }
    }


    include 'header.php';    
?>

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
            <div class="card-header">Transcript Details</div>
			<div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label class="form-label">Student Roll No </label>
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
                            <label class="form-label">Branch</label>
                            <input type="text" name="branch" id="branch" class="form-control" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Semester</label>
                            <input type="text" name="semester" id="semester" class="form-control" />
                        </div>
                        <div class="mb-5">
                            <label class="form-label">CGPA</label>
                            <input type="text" name="cgpa" id="cgpa" class="form-control" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label">SGPA</label>
                            <input type="SGPA" name="sgpa" id="sgpa" class="form-control" />
                        </div>

                        <div class="text-center mt-4 mb-2">
						<input type="submit" name="register_button" class="btn btn-primary" value="Apply for Transcript" />
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