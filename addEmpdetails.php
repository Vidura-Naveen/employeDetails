<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'nav.php';?>
<br>


        <?php


require('db/dbconnection.php');



                if(isset($_POST['btnsavename']))
                {
                    $emp_no = $_POST['emp_noname'];
                    $name = $_POST['empnamename'];
                    $dob = $_POST['empdobname'];
                    $address = $_POST['empaddressname'];


                $sql_query = "INSERT INTO tbl_employe(emp_no,name,dob,address) VALUES('$emp_no','$name','$dob','$address')";
                if(mysqli_query($conn, $sql_query)){
                    echo "Records inserted successfully.";
                } else{ 
                    echo "ERROR: Could not able to execute $sql_query. " . mysqli_error($conn);
                }

                }

        mysqli_close($conn);
        ?>


<form action="addEmpdetails.php" method="post">

    <div class="container">
        <h1 class="text-center">Employee Details</h1>

        <div class="col-xs-2">
            <label for="">Employee Number</label>
            <input type="number" name="emp_noname" id="empnumid" class="form-control" placeholder="Enter Number" required>
        </div>

        <div>
            <label for="">Name</label>
            <input type="text" name="empnamename" id="empnameid" class="form-control" placeholder="Enter Name" required>
        </div>

        <div>
            <label for="">Date of birth</label>
            <input type="date" name="empdobname" id="empdobid" class="form-control" placeholder="Enter Date of birth" required>
        </div>

        <div>
            <label for="">Address</label>
            <input type="text" name="empaddressname" id="empaddressid" class="form-control" placeholder="Enter Address" required>
        </div>


        <br>
        

        <input type="submit" value="Submit" name="btnsavename" class="btn btn-primary">
        <button type="reset" class="btn btn-secondary">Clear</button>
        

    </div>

</form>

    

<?php require_once('footer.php')?>
</body>
</html>