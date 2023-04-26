<?php
include("connection.php");
if(isset($_POST['submit'])){
    $Rname=$_POST['Rname'];
    $des=$_POST['descript'];
    $count=$_POST['count'];
    $edible=$_POST['edible'];
    $close=$_POST['time'];

    $sql = "SELECT RID FROM HOTEL WHERE Rname='$Rname'";
    $result=mysqli_query($conn,$sql);
    // check if the query returned a result
    if (mysqli_num_rows($result) > 0) {
        // fetch the ID from the result
        $row = mysqli_fetch_assoc($result);
        $rid= $row['RID'];
    } else {
        // handle the case where the restaurant name is not found
        echo "<script> alert('restaurant name not found');
       
        window.location.href='donation.html'; </script>";

    }
    $sql1 ="INSERT INTO DONATE (RID,DESCPT,SERVECOUNT,TCLOSE,TDATE,STATUS) VALUES('$rid','$des','$count','$edible','$close','request')";
    $result2 =mysqli_query($conn,$sql1);
    if($result2){
        echo "<script>
        alert('Thanks for the donation ');
        window.location.href='hotel.html';</script>";

    } else{
        echo "Error inserting into donate table: " . mysqli_error($conn);
    }
}
?>
