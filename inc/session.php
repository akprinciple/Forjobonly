<?php 

  include('inc/config.php');
    session_start();
    if (isset($_SESSION['id'])) {
    $user_check = $_SESSION['id'];

    $ses_sql = mysqli_query($connect, "SELECT * FROM users WHERE id = '$user_check'");
    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
    $login_session = $row['id'];

    
      #header("location:login.php");

    
    $_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['phone'] = $row['phone'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['nationality'] = $row['nationality'];
		$_SESSION['date'] = $row['date'];
}

?>