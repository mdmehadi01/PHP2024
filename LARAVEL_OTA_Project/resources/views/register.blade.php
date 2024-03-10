<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto ">
                <h2 class="text-center pt-3">SignUp Now</h2>
                <p class="text-center text-muted lead">It's free & takes a minute</p>

                <!--form Start-->
                <form action="register" enctype="multipart/form-data" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="first name" name="FirstName">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="last name" name="LastName">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="email" name="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="user name" name="UserName">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="password" name="Password">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="confirm password" name="ConfirmPassword">
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" name="condition" id="">
                        <label for="condition">Agree to your Terms & Conditions</label>
                    </div>
                    <div class="d-grid">

                        <button type="submit" name="submit" value="Register" class="btn btn-success">Signup Now</button>
                        <p class="text-center">Already have an Account? <a href="login">Login Now</a></p>
                    </div>
                </form>
                <!--form End-->

            </div>
        </div>
    </div>

</body>

</html>