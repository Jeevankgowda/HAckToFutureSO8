<?PHP
include("connection.php");

if (isset($_POST['submit'])  && isset($_POST['username']) && isset($_POST['Password'])  ) {

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['Password'];

// Prepare a SQL query to check if the username and password are correct
$sql = "SELECT * FROM HOTEL WHERE USERNAME='$username' AND PASSWORD='$password'";
$result = mysqli_query($conn, $sql);

// Check if the query returned a row
if (mysqli_num_rows($result) == 1) {

    // Start a PHP session and store the username
    session_start();
    $_SESSION['username'] = $username;

    // Display a JavaScript alert and redirect to the ngointerface.html page
    echo "<script>alert('Logged in successfully!');

    window.location.href='hotel.html';
    </script>";
    exit();

} else {

    // Display an error message
    echo "<script>alert('Incorrect Password!');
    window.location.href='rlogin.html';
    </script>";


}

}

?>
