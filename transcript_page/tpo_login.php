<?php

include 'database_connection.php';

$message = '';
if (isset($_POST["login_button"])) {
    $formdata = array();
    if (empty($_POST["tpo_email"])) 
    {
        $message .= '<li>Email Address is required</li> ';
    } 
    else 
    {
        if (!filter_var($_POST["tpo_email"], FILTER_VALIDATE_EMAIL)) 
        {
            $message .= '<li>Invalid Email Address</li>';
        } 
        else 
        {
            $formdata['tpo_email'] = $_POST['tpo_email'];
        }

    }

    if (empty($_POST['tpo_password'])) {
        $message .= '<li>Password is required</li>';
    } else {
        $formdata['tpo_password'] = $_POST['tpo_password'];
    }

    if ($message == '') {
        $data = array(
            ':tpo_email'  => $formdata['tpo_email']
        );

        $query = "
        SELECT * FROM tpo_details
        WHERE tpo_email = :tpo_email
        ";

        $statement = $connect->prepare($query);

        $statement->execute($data);

        if ($statement->rowCount() > 0) {
            foreach ($statement->fetchAll() as $row) {
                if ($row['tpo_password'] == $formdata['tpo_password']) {
                    $_SESSION['tpo_id'] = $row['tpo_id'];
                    header('location:tpo/index.php');
                } else {
                    $message = '<li>Wrong Password</li>';
                }
            }
        } else {
            $message = '<li>Wrong Email</li>';
        }
    }
}

include 'header.php';
?>


<div class="d-flex align-items-center justify-content-center" style="min-height:700px;">

    <div class="col-md-6">
        <?php 
            if($message != '')
            {
                echo '<div class="alert alert-danger"><ul>'.$message.'</ul></div>';
            }
        ?>

        <div class="card">

            <div class="card-header">TPO Login</div>

            <div class="card-body">

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Email address</label>

                        <input type="text" name="tpo_email" id="tpo_email" class="form-control" />

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>

                        <input type="password" name="tpo_password" id="tpo_password" class="form-control" />

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