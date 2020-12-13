<!DOCTYPE html>
<html lang="english">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="icon" href="img/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
        .login_img {
            background-image: url(img/undraw_mobile_login_ikmv.png);
            background-repeat: no-repeat !important;
            background-size: contain !important;
        }

    </style>
</head>

<body>
    <div class="login_nav">
        <?php include 'header.php'?>
    </div>
    <div class="main my-5">
        <div class="container">


            <?php   if (isset($_GET['message'])){ ?>

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
                    <h2 class="py-4">Login to Admin Panel</h2>
                    <form action="admin_login.php" method="post">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" id="password_id" class="form-control" placeholder="Enter password">
                            <div class="form-check">

                                <input type="checkbox" onclick='password_viewer()' class="form-check-input" value="">show password

                            </div>
                        </div>


                        <button type="submit" name="sumbmit1" class="btn btn-primary">Submit</button>
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
        function password_viewer() {
            var x = document.getElementById("password_id");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>
</body>

</html>
