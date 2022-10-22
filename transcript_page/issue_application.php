<?php
    include 'header.php';
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
                            <input type="text" name="Branch_name" id="Branch_id" class="form-control" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Semester</label>
                            <input type="text" name="Semester_name" id="semester_id" class="form-control" />
                        </div>
                        <div class="mb-5">
                            <label class="form-label">CGPA</label>
                            <input type="text" name="Cgpa_name" id="cgpa_id" class="form-control" />
                        </div>
                        <div class="mb-6">
                            <label class="form-label">SGPA</label>
                            <input type="SGPA" name="SGPA_name" id="SGPA_id" class="form-control" />
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