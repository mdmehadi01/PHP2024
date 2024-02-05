<?php
//  session_start();

//   include('db.php');

//   if(isset($_POST['submit'])){ 
//     if($_POST['submit'] == 'Login') {
//       $UserName = $_POST['UserName'];
//       $Password = $_POST['Password'];

//       $Query = "SELECT * FROM users WHERE UserName = '$UserName' AND Password = '$Password'";
//       $Result = mysqli_query($connection, $Query);
//       $Rows = mysqli_num_rows($Result);

//       if($Rows == 0){
//         echo "username and password does't match";
//       }else{
//         $_SESSION['LoggedIn'] = TRUE;
//         header('Location:index.php');
//       }
//     }
//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto ">
                <h2 class="text-center pt-3">Login Now</h2>
                <!--form Start-->
                <form action="login.php" enctype="multipart/form-data" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="User Name" name="UserName">
                </div>
        
              <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="Password">
                </div>

                <div class="input-group mb-3">
                <p><a href="forget.php">Forget Password?</a></p>                  
                </div>

                <div class="d-grid">   
                    <button name="submit" value="Login" type="submit" class="btn btn-success">Login Now</button>
                   <p class="text-center">Don't have an Account? <a href="sign_up.php">Signup Now</a>
                </div>
                </form>
                <!--form End-->

            </div>
        </div>
    </div>

</body>
</html>