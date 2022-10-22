<?php
 include 'header.php';
 ?>
 

<div class="d-flex align-items-center justify-content-center" style="min-height:700px;">

<div class="col-md-6">


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
