<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-menu.css">
</head>
<body>
    


<header class="header">
    
    <a class="img"> <img src="http://e2ssolucoes.com/img/log.png"/> </a>
    <!-- http://localhost/dashboard/MY_SITE -->
    <!-- http://e2ssolucoes.com/ -->

    <nav id="navegacao">

        <button id="btn-mobile" class = "btn-mobile">MENU

            <span id="hamburger"></span>
        </button>
    
    
    

    <ul class="menu">
        <li class="<?php echo ($_SERVER['PHP_SELF'] == "/includes/solar.php" ? "active" : "");?>">
            <a href="includes/solar.php">Start</a>
            </li>
        <li><a href="includes/solar.php">SOLAR</a></li>
        <li><a href="includes/SPDA.php">SPDA</a></li>
        <li><a href="#">SUBESTAÇÃO</a></li>
        <li><a href="#">LAUDO</a></li>
        
        
    
    </ul>

</nav>
</header>

</body>
</html>