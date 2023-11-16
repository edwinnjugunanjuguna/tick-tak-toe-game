 <?php

    $connect = mysqli_connect('localhost','root','','tictactoedbs');
if (!$connect) {
	// code...
	echo mysqli_error($connect);
}

echo "Hello, this is my first PHP file!";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tictactoedbs"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if ($_SERVER['REQUEST_METHOD']=='POST') {
    // code...
  $email = $_POST['email'];

  $password = $_POST['password'];

    $sql = "SELECT * FROM registration_list WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($connect,$sql);
    if ($result) {
      $recordnumber = mysqli_num_rows($result);
      if ($recordnumber>0) {
        // code...
        $row = mysqli_fetch_assoc($result);
      
        $email = $row['email'];
      
        header("location:index.html");
       }else {
       echo "Not Successful";}
    }
      
    } 
  






$conn->close();

?>