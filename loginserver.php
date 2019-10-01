<!--==(c)frankline_bwire==-->
<?php
session_start();
include 'pharmabill/config.php';
//REGISTER_USER
$errors=array();
$title='';
$first_name='';
$last_name='';
$email='';
$mobile='';
$pass1='';
$pass2='';
$password='';

//get values
if(isset($_POST['signup'])){
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
$pass1=mysqli_real_escape_string($conn,$_POST['password1']);
$pass2=mysqli_real_escape_string($conn,$_POST['password2']);
    
    //// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "* Email is required");}
    if(empty($mobile)){
        array_push($errors,"* Mobile is required");
    }
    if(empty($pass1)){
        array_push($errors,"* Please enter password");}
    
if($pass1 != $pass2){
    //die("The two passwords do not match" . mysqli_error($conn));
    array_push($errors,"* The two paswords do not match");
}
    //check if user already exist
    $check_sql="select * from users where user_email='$email' OR phone_number='$mobile' ";
    $check_query=mysqli_query($conn,$check_sql);
    $result=mysqli_fetch_assoc($check_query);
    if($result){ //if user already exists
        if($result['email'] === $email){
          array_push($errors,"User with that email already exixsts");  
        }
        if($result['phone_number'] === $mobile){
            array_push($errors,"* Mobile already exist");
        }
    }
    //If no errors are found
    if (count($errors) == 0){
            //submit data
    $sql="insert into users (title,first_name,last_name,user_email,phone_number,password) values ('$title','$first_name','$last_name','$email','$mobile','$pass1')  ";
    $query=mysqli_query($conn,$sql);
    if(!$query){
        echo 'query failed' .  mysqli_error($conn);
    }
    echo 'registration successfull';
        
        //SESSION
        $_SESSION['user_email'] = $email;
        $_SESSION['success'] = "You are now logged in: ";
       header('location: indexuser.php ');
    }
}
//LOGIN User

$usermail='';
$userpass='';

if(isset($_POST['userlogin'])){
    $usermail=mysqli_real_escape_string($conn,$_POST['usermail']);
    $userpass=mysqli_real_escape_string($conn,$_POST['userpass']);
    //Validate and check if fields are empty
    if (empty($usermail)) {
  	array_push($errors, "Email is required");
  }
  if (empty($userpass)) {
  	array_push($errors, "Password is required");
  }
    if(count($errors) == 0){
    $sql="select * from users where user_email='$usermail' AND password='$userpass'";
    $query=mysqli_query($conn,$sql);
    if (mysqli_num_rows($query) == 1) {
  	  $_SESSION['user_email'] = $usermail;
  	  $_SESSION['success'] = "You are now logged in: ";
  	  header('location: pharmabill/home_user.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
    }
}

//LOGIN Pharmaciscts;

$phar_email='';
$phar_password='';

if(isset($_POST['plogin'])){
    $phar_email=mysqli_real_escape_string($conn,$_POST['phar_email']);
    $phar_password=mysqli_real_escape_string($conn,$_POST['phar_password']);
    //Validate and check if fields are empty
    if (empty($phar_email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($phar_password)) {
  	array_push($errors, "Password is required");
  }
    if(count($errors) == 0){
    $sql="select * from pharmacists where email='$phar_email' AND password='$phar_password'";
    $query=mysqli_query($conn,$sql);
    if (mysqli_num_rows($query) == 1) {
  	  $_SESSION['email'] = $phar_email;
  	  $_SESSION['success'] = "Welcome Pharmacist: ";
  	  header('location: pharmabill/home_pharmacist.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
    }
}

//LOGIN Administrator;

$username='';
$password='';

if(isset($_POST['adminlogin'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    //Validate and check if fields are empty
    if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
    if(count($errors) == 0){
    $sql="select * from admin where username='$username' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    if (mysqli_num_rows($query) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Administrator: ";
  	  header('location: pharmabill/home_admin.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
    }
}
?>
