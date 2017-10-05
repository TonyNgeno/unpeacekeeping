<?php
	if(isset($_POST['mailing_submit'])){
		$name = $_POST['name'];
		$email = $_POST['mailing_email'];

		//Check if empty
		if(empty($name)){
			?>
				<script type="text/javascript">
					window.alert("Ooops! You didn't fill in your name.");
				</script>
			<?php
			header("refresh:1;url=../index.html");
		}
		if(empty($email)){
			?>
				<script type="text/javascript">
					window.alert("Ooops! You didn't fill in your name.");
				</script>
			<?php
			header("refresh:1;url=../index.html");
		}

		//Check if email is valid
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

		if(!preg_match($email_exp,$email)) {
			?>
				<script type="text/javascript">
					window.alert("Ooops! The Email Address you entered does not appear to be valid.");
				</script>
			<?php
			header("refresh:1;url=../index.html");
  		}

  		//Database paramaters
  		$servername = "localhost";
  		$serveruser = "chiron";
  		$serverpass = "incorrect";
  		$dbname = "unpeacekeeping";

  		$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);
  		//Check connection
  		if($conn->connect_error){
  			die("Error while connecting to database".$conn->connect_error);
  		}

  		$sql = "INSERT INTO mailing (name, email) VALUES('$name', '$email')";
  		//Check if successful
  		if($conn->query($sql) === TRUE){
  			?>
				<script type="text/javascript">
					window.alert("Thank you");
				</script>
			<?php
			header("refresh:1;url=../index.html");
  		}else{
  			die("Sorry but we encountered an error: ".$conn->error);
  		}
	}
?>