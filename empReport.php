
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php
include_once 'db/dbconnection.php';


$result = mysqli_query($conn,"SELECT * FROM tbl_employe");



    
?>


<?php 

    if(isset($_GET['delid'])){

        $id = $_GET['delid'];

        $sql = "DELETE FROM  tbl_employe WHERE id='$id'";

        if(mysqli_query($conn,$sql)){

        }
        else{

        }

        mysqli_close(($conn));
    }

?>


<?php include 'nav.php';?>


    <div class="container">

    <h1 class="text-center">Employee Report</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Employee Number</th>
                <th>Name</th>
                <th>Age</th>
                <th>Delete</th>

            </tr>
        </thead>

        <tbody>


        <?php 
            //records as in an array

            foreach( $result as $data ) // using foreach  to display each element of array
            {
                ?> <tr>
                        <?php $newdata = $data['id']?>
                        
                          <td><?php echo $data['emp_no']?></td>
                          <td><?php echo $data['name']?></td>
                          <td><b> DOB : </b><?php echo $dateOfBirth = $data['dob'];
                          $today = date("Y-m-d");
                          $diff = date_diff(date_create($dateOfBirth), date_create($today));
                          echo ' <b>Age is</b> '.$diff->format('%y Years %m Months %d Days') ?></td>


                            <td><a href="empReport.php?delid=<?php echo $data['id']?>" class="btn btn-danger">Delete </a></td>

                        </tr>

                        <?php
            }
       ?>
        </tbody>
        
    </table>
    </div>
   

    <?php require_once('footer.php')?>
</body>
</html>