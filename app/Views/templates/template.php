<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="./app/public/styles/style.css">
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Lexend:wght@300&family=Open+Sans&display=swap" rel="stylesheet">
    <title>LibraGame - The Library for your next game. </title>
</head>

<body>
    
    <header>
            <!-- navbar -->
            <nav class="navbar">
                <span class="navbar_toggle" id="js-navbar-toggle"><i class='bx bx-menu'></i></span>
                <a href="index.php?action=homepage" class="brand_name">LibraGame</a>
                <ul class="main_nav" id="js-menu">
                    <li><a href="index.php?action=contact" class="nav_links">Contact</a></li>
                    <?php 
                        if(isset($_SESSION['id'])){
                            echo "<li><a href='index.php?action=profile' class='nav_links'>Profile</a></li>";
                            echo "<li><a href='index.php?action=logout' class='nav_links'>Logout</a></li>";
                        } else{
                            echo "<li><a href='index.php?action=login' class='nav_links'>Login</a></li>";
                        }
                    ?>
                </ul>
            </nav>
            
    </header>


        <!-- retrieving the whole content from other pages -->
        <div>
            <?= $content ?>
        </div>

        <footer>
            <a href='https://github.com/theo-hrd'>Théo Hérédia</a>
            <a href='https://rawg.io/apidocs'>RAWG API</a>
        </footer>



    <script src="app/public/js/menu.js"></script>
    <script src="app/public/js/featured.js"></script>
</body>
</html>