<?php include_once 'db/dbconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>



<script type="text/javascript" src="script/getData.js"></script>

    <?php include_once 'nav.php'; ?>
    <br>
   

    <?php
    if(isset($_POST['submit'])){
        
        $id = $_POST['upnameselect'];
        $name = $_POST['empnamename'];
        $dob = $_POST['empdobname'];
        $address = $_POST['empaddressname'];

        $sql = "UPDATE tbl_employe SET name='$name',dob='$dob',address='$address' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Records updated: ".$name."-".$name."-".$dob."-".$address;
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }


    ?>
	
	<form action="updateEmpdetails.php" method="post">
        <div class="container">
           

        <h1 class="text-center">Update Employee Details</h1>
        <h3>
			<select name="upnameselect" id="employee" class="form-control" >
				<option value="" selected="selected">Select Employee Number</option>
				<?php
				$sql = "SELECT id, name,dob , emp_no, address FROM tbl_employe";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["id"]; ?>"><?php echo $rows["emp_no"]; ?></option>
				<?php }	?>
			</select>
        </h3>	



            <div>
                <label for="">Name</label>
                <input type="text" name="empnamename" id="empName" class="form-control" placeholder="Enter Name" required>
            </div>

            <div>
                <label for="">Date of birth</label>
                <input type="date" name="empdobname" id="empDob" class="form-control" placeholder="Enter Date of birth" required>
            </div>

            <div>
                <label for="">Address</label>
                <input type="text" name="empaddressname" id="empAddress" class="form-control" required>
                <p id="p"></p>
            </div>

            <br>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
        </div>
    </form>

</div>
  



<?php require_once('footer.php')?>

</body>

</html>