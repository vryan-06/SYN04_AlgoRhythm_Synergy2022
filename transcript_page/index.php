<?php
    include 'header.php';
?>

<div class="p-5 mb-4 bg-light rounded-3">

	<div class="container-fluid py-5">

		<h1 class="display-5 fw-bold">AntiGrafo - The Transcript Portal of FrCRCE</h1>

		<p class="fs-4">AntiGrafo is a transcription portal for the students of Fr.CRCE.<br>
                        Students can apply for the transcript on this portal and once the application is approved by the TPO, they will receive their University Transcript.<br>
                        Training and Placement Officer(TPO) can check and verify the transcript applications through this portal. 
        </p>

	</div>

</div>

<div class="row align-items-md-stretch">

	<div class="col-md-6">

		<div class="h-100 p-5 text-white bg-dark rounded-3">

			<h2>TPO Login</h2>
			<p></p>
			<a href="tpo_login.php" class="btn btn-outline-light">TPO Login</a>

		</div>

	</div>

	<div class="col-md-6">

		<div class="h-100 p-5 bg-light border rounded-3">

			<h2>Student Login</h2>

			<p></p>

			<a href="user_login.php" class="btn btn-outline-secondary">Student Login</a>

			<a href="user_registration.php" class="btn btn-outline-primary">Student Sign Up</a>

		</div>

	</div>

</div>

<?php
    include 'footer.php';
?>