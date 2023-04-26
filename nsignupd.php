<?php
include("connection.php");
if(isset($_POST['submit'])){
    $Nname=$_POST['name'];
    $Address=$_POST['address'];
    $locality=$_POST['locality'];
    $pincode=$_POST['pincode'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phn=$_POST['phone'];
    $total=$_POST['total'];
    $web=$_POST['websit'];
    $mail=$_POST['mail'];
    $uname=$_POST['username'];
    $pass=$_POST['pass'];

    $sql ="INSERT INTO NGO  (NNAME,ADDRES,LOCALITY,PINCODE,FNAME,LNAME,DEMAIL,DPHN,TOTAL,WEBSITE,EMAIL,USERNAME,PASSWORD) VALUES ('$Nname','$Address','$locality','$pincode','$fname','$lname','$email','$phn','$total','$web','$mail','$uname','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>
        alert('Registered successfullu');
        window.location.href='nlogin.html';
        </script>";
        
    }
    else{
        echo "Error inserting into rowner table: " . mysqli_error($conn);
    }
    

}
?>
