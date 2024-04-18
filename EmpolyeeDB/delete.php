<?php
    require('database.php');

    $id=$_GET['id'];

    $select_query = 'SELECT * FROM Employee WHERE EmpID = :id;';
    $statement = $db->prepare($select_query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $employee = $statement->fetch();
    $statement->closeCursor();

    if ($employee) {
        $delete_code = 'DELETE FROM Employee WHERE EmpID=:id;';
        $statement=$db->prepare($delete_code);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } else {
        $found_msg="No employee found with ID: $id";
        include('searchDelete.php');
        exit();
    }
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
            alert("Employee deleted. Thank you.")
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