<?php
include("connection.php");
$rid = $_POST['rid'];
// Start the session
session_start();


// Get the ID of the currently logged-in user
$user_id = $_SESSION['username'];

// Fetch the details of the currently logged-in user from the database
$sql = "SELECT NID FROM NGO WHERE USERNAME = '$user_id'";
$result = mysqli_query($conn, $sql);

// Check if there is a result
if (mysqli_num_rows($result) > 0) {
  // Fetch the result as an associative array
  $row = mysqli_fetch_assoc($result);
  
  // Output the user's details
  $nid = $row["NID"];

  // Insert the request into the database
  $sql1 = "INSERT INTO REQUEST (NID,RID) VALUES ('$nid','$rid')";
  $result1 = mysqli_query($conn, $sql1);

  if ($result1) {
    echo "Request sent successfully";
  } else {
    echo "Error inserting request: " . mysqli_error($conn);
  }
} else {
  echo "Error: User not found";
}

$sql3="UPDATE DONATE SET STATUS='requested' WHERE RID='$rid'";
$result1 = mysqli_query($conn, $sql3);

?>
