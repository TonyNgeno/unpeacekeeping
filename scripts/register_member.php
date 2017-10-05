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
		$MPESA_code = $_POST['mpesa'];
		$terms = $_POST['terms'];

		//Check empty
		if(empty($name)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your name");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($email)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your email");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($email)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your email");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($phone)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your mobile number");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($id_number)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your ID number");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($county)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your county");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($dd)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your day of birth");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($mm)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your month of birth");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($yyyy)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your Year of Birth");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($gender)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your Gender");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($KCSE_grade)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your KCSE Grade");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($MPESA_code)){
			?>
				<script type="text/javascript">
					window.alert("Oopps! You didn't fill in your M-Pesa Confirmation Code");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}
		if(empty($terms)){
			?>
				<script type="text/javascript">
					window.alert("Kindly accept the terms of service");
				</script>
			<?php
			header("refresh:1;url=../register.php");
		}

		//Check if email is valid
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

		if(!preg_match($email_exp, $email)) {
			?>
				<script type="text/javascript">
					window.alert("Ooops! The Email Address you entered does not appear to be valid.");
				</script>
			<?php
			header("refresh:10;url=../index.html");
  		}

  		//Database parameters
  		$servername = "localhost";
  		$serveruser = "chiron";
  		$serverpass = "incorrect";
  		$dbname = "unpeacekeeping";

  		//Connect to database
  		$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

  		if($conn->connect_error){
  			die("Error while connecting to databse: ".$conn->connect_error);
  		}

  		$sql = "INSERT INTO member(name, email, phone_Number, id_Number, county, b_day, b_month, b_year, gender, KCSE_grade, education_desc, MPESA_code, terms) VALUES ('$name', '$email', '$phone', '$id_number', '$county', '$dd', '$mm', '$yyyy', '$gender', '$KCSE_grade', '$education_desc', '$MPESA_code', '$terms')";

  		if($conn->query($sql) === TRUE){
  			?>
  				<script type="text/javascript">
  					window.alert("Thank you young Ambassador. One of our representatives will contact you soon.");
  				</script>
  			<?php

  			//Sending an email
  			$email_to = "brianokinyi.bo@gmail.com";
  			$subject = "Someone requests to be an Ambassador";

  			$email_message = "<h2>You received a new request</h2>";
  			$email_message .= "Kindly, confirm the following MPESA CODE: \n";
  			$email_message .= "<center>$MPESA_code</center>";
  			$email_message .= "Also, respond to the following client: \n";
  			$email_message .= "	Name: $name\n
  								Mobile-Number: $phone\n
  								E-Mail: $email\n
  								ID-Number: $id_number\n
  								County: $county\n
  								Postal Address: $post_addr\n
  								Birthday: $dd/$mm/$yyyy\n
  								";

  			//Calculate age of client
  			function calculate_age($birthday){
  				$today = new DateTime();
  				$diff = $today->diff(new DateTime($birthday));

  				if($diff->y){
  					return '$diff->y'.' Years'.'$diff->m'.' Months';
  				}elseif($diff->m){
  					return '$diff->m'.' Months'.'$diff->d'." Months";
  				}else{
  					return '$diff->d'.' Days old';
  				}
  			}

  			//Type cast ages
  			$yyyy = (int)$yyyy;
  			$mm = (int)$mm;
  			$dd = (int)$dd;

  			//Change their age to format
  			$birthday = (new DateTime)->createFromFormat('Y-m-d','$yyyy-$mm-$dd');
  			//Call Function
  			$age = calculate_age($birthday);

  			echo "$age";

  			$email_message .= "	Age: $age\n
  								Gender: $gender\n
  								KCSE Grade: $KCSE_grade\n
  								Education Description: $education_desc\n
  								\n\n\n
  								";
  			$email_message .= "Kind regards!";

  			$headers = "MIME-Version: 1.0"."\r\n".
  						"Content-type:text/html;charset=UTF-8"."\r\n".
  						"From: ".$email."\r\n".
  						"Reply-To: ".$email."\r\n".
  						"X-Mailer: PHP/".phpversion()
  				;
  			mail($email_to, $subject, $email_message, $headers);

  			//End sending mail

  			header("refresh:10;url=../index.html");
  		}else{
  			 ?>
  				<script type="text/javascript">
  					window.alert("Sorry! We encounterd an error while processing your request. Please try again.");
  				</script>
  			<?php
  			header("refresh:10;url=../register.php");
  		}
	}
?>