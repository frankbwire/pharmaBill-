
<!--===COMMENT FEATURE===-->
<!--===(c)frankline bwire====-->

<?php
include 'config.php';
//Declare variables
$commentor='';
  $comment='';
  $comail='';
  $subject='';
  $errors=array();
$success='';
//Get values from form form
if(isset($_POST['send_message'])){
$commentor=mysqli_real_escape_string($conn,$_POST['commentor']);
  $comment=mysqli_real_escape_string($conn,$_POST['comment']);
  $comail=mysqli_real_escape_string($conn,$_POST['comail']);
  $subject=mysqli_real_escape_string($conn,$_POST['subject']);
//form validation
if(empty($commentor)){array_push($errors,"* Your name is required");}
if(empty($comail)){array_push($errors,"* Your email address is required");}
  //no errors found
  if(count($errors) == 0){
    $sql="insert into user_comment(message,name,email,subject) VALUES('$comment','$commentor','$comail','$subject')";
    $query=mysqli_query($conn,$sql) or die ("could not send query" . mysqli_error());
      $success="<div style='color: #20c997;
       font-weight: bold;
      font-family: monospace; font-size: 15px'>posted successfully</div>";
  }
}


?>