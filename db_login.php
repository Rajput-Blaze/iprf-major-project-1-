<?php 

  if(isset($_POST['sumbmit1'])){
    include("db_config.php");
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    
    $sql="SELECT  * FROM  user_data WHERE email='$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        
        $sql2="SELECT  * FROM  user_data WHERE email='$email' and password = '$password'";
        $result2 = mysqli_query($conn,$sql2);
        $data=mysqli_fetch_assoc($result2);
      session_start();
      $_SESSION['name'] = $data["first_name"];
        $_SESSION['email'] = $data["email"];
      header("Location:index.php?message=sucessfull login" );
   }else {
    header("Location:login_register.php?found=invalid credential ");
   }

  }

else{
     header("Location:index.php");
}

?>
