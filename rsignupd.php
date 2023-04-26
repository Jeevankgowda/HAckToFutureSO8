<?php
include("connection.php");
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pnm=$_POST['Ophn'];
    $email=$_POST['oemail'];
    $rname=$_POST['Rname'];
    $ra=$_POST['Raddress'];
    $rl=$_POST['Rlocality'];
    $rp=$_POST['Rpin'];
    $rt=$_POST['Rtype'];
    $ro=$_POST['ROpen'];
    $rc=$_POST['Rclose'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    $sql1 ="INSERT INTO HOTEL  (FNAME,LNAME,OPHN,OEMAIL,RNAME,ADDRES,LOCALITY,PINCODE,RTYPE,ROPEN,RCLOSE,USERNAME,PASSWORD) VALUES ('$fname','$lname','$pnm','$email','$rname','$ra','$rl','$rp','$rt','$ro','$rc','$uname','$pass')";
    $result1=mysqli_query($conn,$sql1);
    echo $result1;
    if($result1){
        echo "<script>
        alert('register succesfully');
        window.location.href='rlogin.html';
        </script>";

    }
      
    
    else{
        echo "Error inserting into rowner table: " . mysqli_error($conn);
    }
    

}
?>
