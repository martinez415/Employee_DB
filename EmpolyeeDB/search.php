<!DOCTYPE html>
<html>
    <head>
        <title>MartTech: Employee Database Application</title>
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
        <?php if (!empty($found_msg)) : ?>
            <div class="db_con_msg">
                <?php echo $found_msg; ?>
            </div>
        <?php endif; ?>
        <form action="preupdate.php" method="get" id="insert_form">
            <fieldset>
                <legend>Employee Database</legend>
                <div class="input_group">
                    <h1 class="form_title">Search Employee</h1>
                </div>
                <div class="input_group">
                    <label>Enter Employee ID:</label>
                    <input type="text" name="id">
                </div>
                <div class="input_group">
                    <input type="button" value="Clear" class="input_btn" id="clear">
                    <input type="submit" value="Enter" class="input_btn" id="enter">
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