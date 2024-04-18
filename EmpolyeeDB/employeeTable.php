<?php
    require('database.php');

    $queryEmployee='SELECT EmpID, EmpLName, EmpFName, EmpDept, EmpDOB FROM Employee;';

    $statement=$db->prepare($queryEmployee);
    $statement->execute();
    $employees=$statement->fetchAll();
    $statement->closeCursor();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MartTech: Employee Table</title>
        <link rel="stylesheet" href="CSS/index.css"/>
        <link rel="stylesheet" href="CSS/table.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
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
            <?php echo $con_msg; ?>
        </div>
        <table id="employee">
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Department</th>
                <th>Date of Birth</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php foreach($employees as $employee): ?>
                <tr>
                    <td><?php echo $employee['EmpID']; ?></td>
                    <td><?php echo $employee['EmpLName']; ?></td>
                    <td><?php echo $employee['EmpFName']; ?></td>
                    <td><?php echo $employee['EmpDept']; ?></td>
                    <td><?php echo $employee['EmpDOB']; ?></td>
                    <td> <a href="preupdate.php?id=<?php echo $employee['EmpID'];?>"> <img src="Images/edit.png"> </a> </td>
                    <td> <a href="delete.php?id=<?php echo $employee['EmpID'];?>"> <img src="Images/delete.png"> </a> </td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
    <footer>
        <div class="footer">
            <p>Mart Technologies 2024</p>
        </div>
    </footer>
</html>