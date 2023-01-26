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