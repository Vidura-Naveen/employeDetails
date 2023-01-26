<?php 

// session_start(); 

include_once 'db/dbconnection.php';

// if (isset($_POST['usernamelogin']) && isset($_POST['passwordlogin'])) {

//     function validate($data){

//        $data = trim($data);

//        $data = stripslashes($data);

//        $data = htmlspecialchars($data);

//        return $data;

//     }

//     $uname = validate($_POST['usernamelogin']);

//     $pass = validate($_POST['passwordlogin']);

//     if (empty($uname)) {

//         header("Location: login.php");

//         exit();

//     }else if(empty($pass)){

//         header("Location: login.php");

//         exit();

//     }else{

//         $sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

//         $result = mysqli_query($conn, $sql);

//         if (mysqli_num_rows($result) === 1) {

//             $row = mysqli_fetch_assoc($result);

//             if ($row['username'] === $uname && $row['password'] === $pass) {

//                 echo "Logged in!";

//                 $_SESSION['username'] = $row['username'];

//                 $_SESSION['id'] = $row['id'];

//                 header("Location: addEmpdetails.php");

//                 exit();

//             }else{

//                 header("Location: login.php");

//                 exit();

//             }

//         }else{

//             header("Location: login.php");

//             exit();

//         }

//     }

// }else{

//     header("Location: login.php");

//     exit();

// }

if (isset($_POST['usernamelogin']) && isset($_POST['passwordlogin'])) {

  $uname = ($_POST['usernamelogin']);
  $pass = ($_POST['passwordlogin']);

  $sql = "SELECT * FROM admin WHERE username='".$uname."' AND password='".$pass."'";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)==1){
    header("Location: addEmpdetails.php");
      exit();
  }
  else{
    header("Location: login.php");
    exit();
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eceeee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <form action="login.php" method="post">
                      <h3 class="mb-5">Sign in</h3>

                      <div class="form-outline mb-4">
                        <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="usernamelogin" />
                        <label class="form-label" for="typeEmailX-2">User Name</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="passwordlogin"/>
                        <label class="form-label" for="typePasswordX-2">Password</label>
                      </div>

                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-start mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                      </div>

                      <button class="btn btn-primary btn-lg btn-block" type="submit" name="submitbtn">Login</button>

                      <hr class="my-4">

                      <a href="register.php" class="btn btn-primary btn-lg btn-block">Register Now</a>
                     


            </form>  

          </div>
        </div>
      </div>
    </div>
  </div>
</section>          
</body>
</html>