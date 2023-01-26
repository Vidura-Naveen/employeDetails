<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include_once 'db/dbconnection.php';
    $result = mysqli_query($conn, "SELECT * FROM tbl_employe");
    include 'nav.php';
    ?>
    <br>
    <div class="container">
        <h1 class="text-center">Select Employee</h1>
        <form action="#" method="post">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Employee Number</th>
                        <th>Name</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //records as in an array

                    foreach ($result as $data) : ?>

                        <tr>
                            <td><?php echo $data['emp_no'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td>
                                <input type="checkbox" name="selectedid[]" id="" value=<?php echo $data['id'] ?>>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
            <button type="submit" value="Submit" name="submit" class="btn btn-outline-primary">Submit</button>
        </form>

<br>

<br>



        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Employee Number</th>
                    <th> Name</th>
                    <th>Dob</th>
                    <th>Address</th>
                    <th>Age</th>

                </tr>
            </thead>
            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['selectedid'])) {
                    foreach ($_POST['selectedid'] as $value) {
                        $resulttwo = mysqli_query($conn, "SELECT * FROM tbl_employe where id= $value");
                        foreach ($resulttwo as $datatwo) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $datatwo['emp_no'] ?></td>
                                    <td><?php echo $datatwo['name'] ?></td>
                                    <td> <?php echo $datatwo['dob'] ?></td>
                                    <td> <?php echo $datatwo['address'] ?></td>
                                    <td> <?php $dateOfBirth = $datatwo['dob']; 
                                        $today = date("Y-m-d");
                                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                        echo ' <b>Age is</b> '.$diff->format('%y Years %m Months %d Days')." "?> 
                                    </td>

                                </tr>
                            </tbody>
                   <?php endforeach; ?>
       
<?php
                    }
                }
            }
?>
 </table>
    </div>


    <?php require_once('footer.php')?>
</body>

</html>