<!DOCTYPE html>
<html>
    <head>
        <title>Database Connection Error</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" href="CSS/database_error.css">
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
        <div id="err_msg">
            <h1 id="err_title">Database Connection Error</h1>
            <p>Error Message: <?php echo $error_message ?></p>
        </div>
    </body>
    <footer>
        <div class="footer">
            <p>Mart Technologies 2024</p>
        </div>
    </footer>
</html>