<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];
	if ($menu == 'dashboard') {
		$data_menu = 'dashboard.php';
	} elseif ($menu == 'tambah_balita') {
		$data_menu = 'form_balita.php';
	} elseif ($menu == 'data_balita') {
		$data_menu = 'data_balita.php';
	} else {
		$data_menu = 'dashboard.php';
	}
} else {
	$data_menu = 'dashboard.php';
} ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<?php include 'nav.php' ?>
		<!--**********************************
            Nav header end
        ***********************************-->


		<!--**********************************
            Header start
        ***********************************-->
		<?php include 'header.php' ?>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<?php include 'sidebar.php' ?>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<?php include $data_menu; ?>
		<!--**********************************
            Content body end
        ***********************************-->

		<!--**********************************
            Footer start
        ***********************************-->
		<?php include 'footer.php' ?>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<?php include 'script.php' ?>
</body>

</html>