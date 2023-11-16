<?php 
  $connect = mysqli_connect('localhost','root','','tictactoedbs');
if (!$connect) {
	// code...
	echo mysqli_error($connect);
}
  $success = 0;
  $unsuccess = 0;
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    // code...
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $mysql = "SELECT * FROM registration_list WHERE email='$email'";
    $myresult = mysqli_query($connect,$mysql);
    if ($myresult) {
      $recordnumber = mysqli_num_rows($myresult);
      if($recordnumber>0){
        $unsuccess = 1;
      } else{
        $sql = "INSERT INTO registration_list(email,password,username) VALUES('$email', '$password' , '$username')";
      $result = mysqli_query($connect, $sql);
      if ($result) {
          $success = 1;   
          echo "successful sign";
      } else{
        die(mysqli_error($connect));
      }
      }
    }

    
  }

  

?>