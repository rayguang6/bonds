<?php

if(isset($_POST['login_button'])) {

    // Get login type (resident / admin)
    $login_type = $_POST['login_type'];
    
    $ic = $_POST['login_ic']; //Get ic
	$password = $_POST['login_password']; //Get password
	// $password = md5($_POST['login_password']); //Get password
    // TODO: encrypt the password later


    // $check_database_query="";
    // if($login_type=='resident'){
        //     $check_database_query = mysqli_query($con, "SELECT * FROM resident WHERE ic='$ic' AND password='$password'");
        
        // }else{
    //     $check_database_query = mysqli_query($con, "SELECT * FROM admin WHERE ic='$ic' AND password='$password'");
    
    // }
    $check_database_query = mysqli_query($con, "SELECT * FROM $login_type WHERE ic='$ic' AND password='$password'");

	$check_login_query = mysqli_num_rows($check_database_query);//see how many result row

	// if the result has only 1 row
	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);// get result as an array
		$_SESSION['ic'] = $row['ic'];//get the username inside the array and assign to session
        $login_type=='admin'?
		    header("Location: admin-dashboard.php"):header("Location: dashboard.php");//redirect to index.php which is the main page or dashboard
		exit();
	}
	else {
		// array_push($error_array, "Email or password was incorrect<br>");
        // echo "<scipt>alert('Wrong Password or IC')</scipt>";
        $message = "Wrong Password";
        echo "<script>alert('$message');</script>";
	}


}

?>
