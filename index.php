<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Main Menu</title>
</head>
<body>
    <div id="container">

            <div id="mainMenu" style="display: block" >
                <div class="menu-content">


                    <ul id="gameMenuList">
                        <li class="menuItem" onclick="closeDialog()">New Game</li>
                        <li class="menuItem" onclick="location.reload();">Load Game</li>
                        <li class="menuItem" onclick="gameSettings()">Settings</li>
                        <li class="menuItem" onload="quitGame()">Credits</li>
                        <li class="menuItem" onload="quitGame()">Quit Game</li>

                    </ul>

                </div>
            </div>



        <?php include 'components/gameSettings.php';
        include 'components/popup.php';
        ?>



    </div>

    <script src="main.js"></script>
</body>

</html>