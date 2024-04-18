<?php
    require('database.php');

    $id=$_GET['id'];
    $queryEmployee='SELECT * FROM Employee WHERE EmpID = :id';

    $statement=$db->prepare($queryEmployee);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $employee=$statement->fetch();
    $statement->closeCursor();

    $found_msg='';
    if ($employee) {
        $EmpID = $employee[0];
        $EmpLName = $employee[1];
        $EmpFName = $employee[2];
        $EmpAddress1 = $employee[3];
        $EmpAddress2 = $employee[4];
        $EmpCity = $employee[5];
        $EmpState = $employee[6];
        $EmpZipCode = $employee[7];
        $EmpDepartment = $employee[8];
        $EmpDOB = $employee[9];

        $found_msg='Employee Found.';
    } else {
        $found_msg="No employee found with ID: $id";
        include('search.php');
        exit();
    }
    
    $departments=['ADM', 'CIS', 'IT', 'ENG'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MartDev Employee Database Application</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="CSS/form.css">
        <link rel="stylesheet" href="CSS/search.css">
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
                        <a href="index.html">Home</a>
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
        <div class="db_con_msg">
            <?php echo $found_msg; ?>
        </div>
        <form action="updated.php" method="get" id="insert_form">
            <fieldset>
                <legend>Employee Database</legend>
                <div class="input_group">
                    <h1 class="form_title">Update Employee</h1>
                </div>
                <div>
                    <label>Employee ID:</label>
                    <input type="text" name="id" value='<?php echo $EmpID?>' readonly>
                </div>
                <div class="input_group">
                    <label>Last Name:</label>
                    <input type="text" name="last_name" value='<?php echo $EmpLName?>'>
                </div>
                <div class="input_group">
                    <label>First Name:</label>
                    <input type="text" name="first_name" value='<?php echo $EmpFName?>'>
                </div>
                <div class="input_group">
                    <label>Address 1:</label>
                    <input type="text" name="address_line_1" value='<?php echo $EmpAddress1?>'>
                </div>
                <div class="input_group">
                    <label>Address 2:</label>
                    <input type="text" name="address_line_2" value='<?php echo $EmpAddress2?>'>
                </div>
                <div class="input_group">
                    <label>City:</label>
                    <input type="text" name="city" value='<?php echo $EmpCity?>'>
                </div>
                <div class="input_group">
                    <label>State:</label>
                    <input type="text" name="state" value='<?php echo $EmpState?>'>
                </div>
                <div class="input_group">
                    <label>Zip Code:</label>
                    <input type="text" name="zip_code" value='<?php echo $EmpZipCode?>'>
                </div>
                <div class="input_group">
                    <label for="department">Department:</label>
                    <select name="department">
                        <?php foreach ($departments as $dept) :  ?>
                            <option value="<?php echo $EmpDepartment?>"><?php echo $dept ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="input_group">
                    <label>Birthdate:</label>
                    <input type="date" name="dob" value='<?php echo $EmpDOB?>'>
                </div>
                <div class="input_group">
                    <input type="submit" value="Update" class="input_btn" id="insert">
                </div>
            </fieldset>
        </form>
    </body>
    <footer>
        <div class="footer">
            <p>Mart Technologies 2024</p>
        </div>
    </footer>
</html>