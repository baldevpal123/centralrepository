<?php
if(isset($_POST['fullname'])){
    $server = "localhost";
    $database="fitness";
    $username = "root";
    $password = "";
    
   
    $con=mysqli_connect($server,$username, $password,$database);
   
    if(!$con){
             die("connection to this database failed due to" . mysqli_connect_error());
      }
      //echo "success connecting to the database";
      $fullname = $_POST['fullname'];
      $address = $_POST['address'];
      $phonenumber = $_POST['phonenumber'];
      $email = $_POST['email'];
      $weight = $_POST['weight'];
      $myGender = $_POST['myGender'];
      $sql = "insert into fetness (fullname,address,phonenumber,email,weight,gender) 
      values ('$fullname','$address','$phonenumber','$email','$weight','$myGender')"; 
    if($con->query($sql)==true){
        echo "successfully regitration";
    }
    else{
        echo "error: $sql<br> $con->error";
    }
    $con->close();
}
?>

