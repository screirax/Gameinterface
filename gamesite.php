<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>GameWindow</title>
</head>
<body>
<div id="container">


<div id="playercontainer">
    <div class="playerpicture"></div>
    <div class="playerinfo">
        <div class="playername">
            <b>McNimselot</b>
            <span class="playerlevel" id="playerlevel">1</span>
        </div>
        <div class="playerhealthbar">
            <div class="playerhealth" style="width: 80%;"></div>
        </div>
        <div class="playermanabar">
            <div class="playermana" style="width: 60%;"></div>
        </div>
    </div>
</div>

    <div id="minimap">
        <div id="player-dot"></div>
    </div>

<div class="containerlist">
<ul>

    <li><button onclick="showDialog()">Gurad Merril</button></li>
    <li><button onclick="completeQuestDialog()">Complete Quest</button></li>

</ul>

<ul>
    <p id="wolfHealth">Wolf Health: 20</p>
    <li><button onclick="attackWolf()">Attack Wolf</button></li>
    <div id="popupwolfdeath" class="popup" style="background-color: dodgerblue">
        <p>You have killed a wolf</p>
        <p>You gained 15 gold</p>
        <p>You have gain 10 experience</p>
    </div>
    <li><button onclick="wolfAttack()">Wolf Attack</button></li>
</ul>

<ul>
    <li><button onclick="levelUpx1()">Level Up x1</button></li>
    <li><button onclick="levelUpx5()">Level Up x5</button></li>

</ul>
    <ul>
        <li><button onclick="gameMenu()">Menu</button></li>
    </ul>

    <?php include 'components/gameMenu.php';   ?>

    <div id="npcDialog" class="dialog">
        <div class="dialogContent">
            <h2>Guard Merril</h2>
            <p>Ah, en ny rejsende! Velkommen til Leafino, en perle midt i vildmarken. Du ser ud som en eventyrer – leder du efter arbejde, handel, eller blot en god historie?</p>
            <ul class="npcdialogul">
                <li onclick="infoAboutQuest()">1. Jeg søger eventyr!</li>
                <li onclick="askAboutTown()">2. Fortæl mig mere om Leafino</li>
                <li onclick="closeDialog()">3. Jeg er bare på gennemrejse</li>
            </ul>
        </div>
    </div>

    <div id="townDialog" class="dialog">
        <div class="dialogContent">
            <h2>Guard Merril</h2>
            <p>Leafino er en fredelig by, beliggende i den frodige dal. Byen er kendt for sine rige skove og venlige indbyggere, men også for de mystiske ruiner, der ligger øst for byen.</p>
            <ul class="npcdialogul">
                <li onclick="showDialog()">1. Kan jeg spørge om noget andet?</li>
                <li onclick="closeDialog()">2. Farvel</li>
            </ul>
        </div>
    </div>

    <div id="questDialog" class="dialog">
        <div class="dialogContent">
            <h2>Guard Merril</h2>
            <p>Vi har desværre lidt under ulveangreb, som har taget livet af flere af vores får. Vore forsvar er svage, og vi er alt for få til at beskytte os selv ordentligt her i barrakken. Hvis du kunne hjælpe os ved at dræbe disse ulve og bringe en af deres fortænder som bevis, ville det være en kæmpe hjælp. Som tak for din indsats vil vi sørge for en passende belønning. Kan vi regne med din hjælp?</p>
            <ul class="npcdialogul">
                <li onclick="acceptQuest()">1. Accept Quest</li>
                <li onclick="closeDialog()">2. Decline Quest</li>
            </ul>
        </div>
    </div>

    <div id="questDoneDialog" class="dialog">
        <div class="dialogContent">
            <h2>Guard Merril</h2>
            <p>Ah, du er tilbage! Og du har virkelig bragt en af deres fortænder som bevis. Jeg kan se, at du har været igennem en hård kamp. Vi er dybt taknemmelige for din hjælp. Du har reddet vores får og sikret vores fremtid her i barrakken. Som lovet, her er din belønning – vi håber, den vil hjælpe dig på din rejse. Tak igen, og vær forsigtig derude!</p>
            <ul class="npcdialogul">
                <li onclick="completeQuest()">1. Complete Quest</li>
                <li onclick="closeDialog()">2. Farvel</li>
            </ul>
        </div>
    </div>


    <?php include 'components/gameSettings.php';
        include 'components/popup.php';
        ?>


</div>

</div>
<script src="main.js"></script>
</body>
</html>