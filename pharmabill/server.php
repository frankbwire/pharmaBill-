<!--==(c)frankline_bwire==-->

<!--=====REGISTER PATIENT=====-->
<?php
include 'config.php';
include '../loginserver.php';

//variable declaration
$pid='';
$fname='';
$mname='';
$lname='';
$dob='';
$email='';
$phone='';
$age='';
$address='';
$city='';
$idno='';
$gender='';

    //get values
if(isset($_POST['register'])){
$pid=mysqli_real_escape_string($conn,$_POST['pid']);    
$fname=mysqli_real_escape_string($conn,$_POST['fname']); 
$mname=mysqli_real_escape_string($conn,$_POST['mname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$age=mysqli_real_escape_string($conn,$_POST['age']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$idno=mysqli_real_escape_string($conn,$_POST['idno']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
    //emergency contacts
$ename=mysqli_real_escape_string($conn,$_POST['ename']);
$rel=mysqli_real_escape_string($conn,$_POST['rel']);
$ephone=mysqli_real_escape_string($conn,$_POST['ephone']);
$eidno=mysqli_real_escape_string($conn,$_POST['eidno']);
$egender=mysqli_real_escape_string($conn,$_POST['egender']);
    //post to database
$sql="INSERT into patients (patient_id,first_name,middle_name,last_name,patient_dob,patient_email,patient_phone,patient_age,patient_address,patient_city,id_number,patient_gender) VALUES('$pid','$fname','$mname','$lname','$dob','$email','$phone','$age','$address','$city','$idno','$gender')";
$query=mysqli_query($conn,$sql);
    if(!$query){
        echo "query failed" . mysqli_error($conn);
    }
$sql2="insert into emergency_contacts (patient_id,kin_name,relationship,kin_phone,kin_id,kin_gender) values('$pid','$ename','$rel','$ephone','$eidno','$egender') ";
    $query2=mysqli_query($conn,$sql2);
    if(!$query2){
        echo "query 2 failed" . mysqli_error($conn);
    }
}


//<----=====BILL PATIENT=====-->
  
//declare variables
$bpid='';
$bnumber='';

$cdate='';
$comment='';
$medcat='';
$medname='';
$medqty='';
$medprice='';
$total= 0;
$total2= 0;
$ttl="";
$errors=array();

//bill patient
if(isset($_POST['bsubmit'])){
$bpid=mysqli_real_escape_string($conn,$_POST['bpid']);
$bnumber=mysqli_real_escape_string($conn,$_POST['bnumber']);
$cdate=mysqli_real_escape_string($conn,$_POST['cdate']);
$comment=mysqli_real_escape_string($conn,$_POST['comm']);
$medcat=mysqli_real_escape_string($conn,$_POST['medcat']);
$medname=mysqli_real_escape_string($conn,$_POST['medname']);
$medqty=mysqli_real_escape_string($conn,$_POST['medqty']);
$medprice=mysqli_real_escape_string($conn,$_POST['medprice']);
//med 2
$medcat2=mysqli_real_escape_string($conn,$_POST['medcat2']);
$medname2=mysqli_real_escape_string($conn,$_POST['medname2']);
$medqty2=mysqli_real_escape_string($conn,$_POST['medqty2']);
$medprice2=mysqli_real_escape_string($conn,$_POST['medprice2']);

  $total=$medqty * $medprice;
  if(empty($medqty2)){
    null;
  }
  else{
    $total2=$medqty2 * $medprice2;
   
  }
  $ttl=$total + $total2;
//check if user exists in patients table
//$check="select * from patients where patient_id = '$bpid' LIMIT = '1'";
   // $qcheck=mysqli_query($conn,$check);
   // if(!$qcheck){
        //array_push($errors,"A user with that patient_id does not exist: "); }
  //insert billing details if patient exists
$sql="insert into patient_billing (patient_id,bill_number,checkup_date,comments) values ('$bpid','$bnumber','$cdate','$comment')"; 
$result=mysqli_query($conn,$sql);
  if(!$result){
    echo 'query failed to execute' . mysqli_error($conn);
  }

  
  //inset billing details in drug purchase table
  $sql2="insert into drug_purchase (patient_id,bill_number,med_category,med_name,med_quantity,med_price,total) values ('$bpid','$bnumber','$medcat','$medname','$medqty','$medprice','$ttl') ";
  $result2=mysqli_query($conn,$sql2);
  if(!$result2){
    echo "query 2 failed to execute" . mysqli_error($conn);
  }

  //Medine 2
  
  //inset billing details in drug purchase table
  if(empty($medname2)){
    null;
  }
  else{
    $sq2="insert into drug_purchase (patient_id,bill_number,med_category,med_name,med_quantity,med_price,total) values ('$bpid','$bnumber','$medcat2','$medname2','$medqty2','$medprice','$ttl') ";
    $rs2=mysqli_query($conn,$sq2);
    if(!$rs2){
      echo "query 2 failed to execute" . mysqli_error($conn);
    }

  }

  
}
?>
