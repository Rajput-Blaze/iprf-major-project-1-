<!DOCTYPE html>
<html lang="english">

<head>
    
    <link rel="icon" href="img/logo.png">
    <meta charset="UTF-8">
    <title>major project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login_nav">
        <?php include 'header.php'?>
    </div>
    <div class="main my-5">
        <div class="container">
        <?php 
        if(isset($_SESSION)){ 

       echo $_SESSION['name'];} ?>

         <?php    if (isset($_GET['message'])){ ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Aww yeah</strong> ,<?php echo($_GET['message']) ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
             </button>
          </div>

          <?php } elseif(isset($_GET['found'])){ ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Aww noo...</strong><?php echo( $_GET['found'])?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <?php }?>
    
        

            <div class="login_main  row" id="login">

                <div class="login_data col-md-6">
                    <h2>sign in</h2>
                    <form action="db_login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>
                        <div class="form-group ">
                            <label class="form-label">
                                <span>new here ?</span> <span onclick="register()">Create an account </span>
                            </label>
                        </div>
                        <button type="submit" name="sumbmit1" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="login_img  col-md-6">
                    <div class="img "></div>
                </div>

            </div>

            <div class="login_main d-none row" id="register">

                <div class="login_data col-md-6">
                   <h2>sign up</h2>
                    <form action="db_register.php" method="post">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter first name" name="first_name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter last name" name="last_name">
                            </div>
                        </div>
                        <div class="form-row my-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter email" name="email">
                            </div>
                            <div class="col">
                                <input type="mobile" class="form-control" placeholder="Enter mobile number" name="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter password" name="password">
                        </div>
                        <div class="form-group ">
                            <label class="form-label-reg">
                                <span>have an account ?</span> <span onclick="login()"> click here</span>
                            </label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="login_img  col-md-6">
                    <div class="img "></div>
                </div>

            </div>
        
        </div>
    </div>

    <?php include_once 'footer.php';?>

    <script>
        function register() {
            document.getElementById('login').classList.add('d-none');
            document.getElementById('register').classList.remove('d-none')
        }

        function login() {
            document.getElementById('register').classList.add('d-none');
            document.getElementById('login').classList.remove('d-none')
        }

    </script>
</body>

</html>
