<?php 

if(isset($_POST['submit']) ){
        include("db_config.php");
        
        $first_name = mysqli_real_escape_string($conn,$_POST["first_name"]);
		$last_name = mysqli_real_escape_string($conn,$_POST["last_name"]);
		$email = mysqli_real_escape_string($conn,$_POST["email"]);
		$number = mysqli_real_escape_string($conn,$_POST["number"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        
        $sql="SELECT  * FROM  user_data WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
    
        if($count == 1) {
            header("Location:login_register.php?found=email already exists login your self");
       }else {
        
        $sql2 = "INSERT INTO user_data (first_name, last_name, email, mobile, password) VALUES ('$first_name', '$last_name', '$email','$number','$password')";
         $result2 = mysqli_query($conn,$sql2);
         if($result2){

             header("Location:login_register.php?message=You are registered successfully login your self");
                }
            else{
                 header("Location:login_register.php?found=" . mysqli_error($conn));
//                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }

       }    









        // $check="SELECT  * FROM  user_data WHERE email='$email' or number='$number'";
        // $check_result = mysqli_query($conn,$check);
        // $rows = mysqli_num_rows($check_result);

        // if($rows==1){
        //     
        //     
        // }
        // else{
        //     header("Location:login_register.php?error=Email or mobile number already exit in databases");
        // }

       
    }
    else{
  header("Location:login_register.php");
}


?>
