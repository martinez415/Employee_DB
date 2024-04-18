<?php
    require('database.php');

    $id=$_GET['id'];
    $last_name=$_GET['last_name'];
    $first_name=$_GET['first_name'];
    $address_line_1=$_GET['address_line_1'];
    $address_line_2=$_GET['address_line_2'];
    $city=$_GET['city'];
    $emp_state=$_GET['state'];
    $zip_code=$_GET['zip_code'];
    $department=$_GET['department'];
    $dob=$_GET['dob'];

    $update_code = 'UPDATE Employee SET EmpLName=:last_name, EmpFName=:first_name, EmpAddress1=:address_line_1, 
                    EmpAddress2=:address_line_2, EmpCity=:city, EmpState=:emp_state, EmpZipCode=:zip_code, 
                    EmpDept=:department, EmpDOB=:dob WHERE EmpID=:id';

    $statement=$db->prepare($update_code);

    $statement->bindValue(':id', $id);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':address_line_1', $address_line_1);
    $statement->bindValue(':address_line_2', $address_line_2);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':emp_state', $emp_state);
    $statement->bindValue(':zip_code', $zip_code);
    $statement->bindValue(':department', $department);
    $statement->bindValue(':dob', $dob);

    $statement->execute();
    $statement->closeCursor();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MartDev Employee Database Application</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="JS/clearfunction.js"></script>
    </head>
    <header>
        <nav class="nav_group">
            <img src="Images/cloud-network.png" alt="Cloud computing logo" class="logo">
            <h1 id="company_name">Mart Technologies</h1>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">About Us</a>
                    </li>
                    <li>
                        <a href="">Projects</a>
                    </li>
                    <li>
                        <a href="">Employee Portal</a>
                    </li>
                </ul>
        </nav>
    </header>
    <body>
        <script>
            alert("Employee updated. Thank you.")
        </script>
        <div class="ops">
            <a href="index.html">Click here to return to main menu.</a>
        </div>
    </body>
    <footer>
        <div class="footer">
            <p>Mart Technologies 2024</p>
        </div>
    </footer>
</html>