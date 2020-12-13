<nav class="navbar navbar-expand-lg  navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand"><img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php"><i class="fa   fa-window-restore"></i>Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fa fa-address-card"></i>About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php"><i class="fa fa-phone"></i>Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php"><i class="fa fa-user"></i>Admin</a>
                </li>

                <?php  session_start(); if(isset($_SESSION['name'])) {?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php  echo $_SESSION['name']?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Dashbord</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>

                <?php  } else {?>
                <li class="nav-item">
                    <a class="nav-link" href="login_register.php"><i class="fa fa-sign-in"></i>Login/Register</a>
                </li>

                <?php  }?>

            </ul>
        </div>
    </div>
</nav>
