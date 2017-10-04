<?php
	if(isset($_POST['registration_submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$id_number = $_POST['id_number'];
		$county = $_POST['county'];
		$post_addr = $_POST['post_addr'];
		$dd = $_POST['dd'];
		$mm = $_POST['mm'];
		$yyyy = $_POST['yyyy'];
		$gender = $_POST['gender'];
		$KCSE_grade = $_POST['KCSE_grade'];
		$education_desc = $_POST['education_desc'];
		$mpesa = $_POST['mpesa'];
		$terms = $_POST['terms'];

		echo "Name: $name \nEmail: $email\n Phone: $phone \nID: $id_number \nCounty: $county \nPost: $post_addr \nDD: $dd $mm $yyyy\n Gender: $gender \nGrade: $KCSE_grade \nEdu: $education_desc\n MPESA: $mpesa \nTerms: $terms";

	}
?>