<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'?>
    <div class="background_service">
        <div class="text-center">Contact Us</div>
    </div>
    <div class="container PP my-5">
        <div class="row">
           
            <div class="col-md-6">
               <div class="text-center">Feed your Queries </div>
                <form>

                    <div class="form-group">
                        <label for="exampleInputname">Name</label>
                        <input type="text" class="form-control" id="example" placeholder="Your Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputname">subject</label>
                        <input type="text" class="form-control" id="example" placeholder="subject">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 ii">
               <div class="text-center"> For instant queries</div>
                <div class="email_main"><i class="fa fa-envelope"></i><span>sayvishwajeet566@gmail.com</span></div>
                <div class="mobile_main"><i class="fa fa-mobile"></i><span>9155087658</span></div>
                <div class="address_main"><i class="fa fa-map-marker"></i><span>Jail Rd, Jahangirabad, Bhopal, Madhya Pradesh 462004</span></div>
            </div>
        </div>
    </div><br><br><br><br><br><br>
    <?php include 'footer.php'?>
</body>

</html>
