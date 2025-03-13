
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = $_POST['choice'] ?? '';
    $response = "";

    switch ($choice) {
        case "1":
            $response = "NPC: Byen ligger mod øst, følg vejen!";
            break;
        case "2":
            $response = "NPC: Jeg har mistet min kat. Kan du finde den?";
            break;
        case "3":
            $response = "NPC: Farvel, rejsende!";
            break;
        default:
            $response = "NPC: Jeg forstår ikke...";
    }
}
?>


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


    <li><button onclick="showPopupcomplete()">Complete Quest</button></li>
        <div id="popupcomplete" class="popup" style="background-color: darkorange">Quest Completed</div>
</ul>

<ul>
    <li><button onclick="attackWolf()">Attack Wolf</button></li>
    <p id="wolfHealth">Wolf Health: 20</p>
    <div id="popupwolfdeath" class="popup" style="background-color: dodgerblue">
        <p>You have killed a wolf</p>
        <p>You gained 15 gold</p>
        <p>You have gain 10 experience</p>
    </div>
    <li><button onclick="wolfAttack()">Wolf Attack</button></li>
</ul>

<ul>
    <li><button>Level Up x1</button></li>
    <li><button>Level Up x5</button></li>

</ul>

    <div id="npcDialog" class="dialog">
        <div class="dialog-content">
            <h2>Guard Merril</h2>
            <p>Ah, en ny rejsende! Velkommen til Leafino, en perle midt i vildmarken. Du ser ud som en eventyrer – leder du efter arbejde, handel, eller blot en god historie?</p>
            <ul class="npcdialogul">
                <li onclick="acceptQuest()">1. Jeg søger eventyr!</li>
                <li onclick="askAboutTown()">2. Fortæl mig mere om Leafino</li>
                <li onclick="closeDialog()">3. Jeg er bare på gennemrejse</li>
            </ul>
        </div>
    </div>

    <div id="popup" class="popup" style="background-color: darkorange">Quest Accepted</div>

</div>

</div>
<script>
    let wolfHealth = 20;


    function showPopup() {
        let popup = document.getElementById("popup");
        popup.style.display = "block";
        popup.style.opacity = "1";


        setTimeout(() => {
        popup.style.opacity = "0";
        setTimeout(() => {
            popup.style.display = "none";
        }, 1000);
        }, 4000);
    }
    function showPopupcomplete() {
        let popup = document.getElementById("popupcomplete");
        popup.style.display = "block";
        popup.style.opacity = "1";

        setTimeout(() => {
            popup.style.opacity = "0";
            setTimeout(() => {
                popup.style.display = "none";
            }, 1000);
        }, 4000);
    }
    function attackWolf(){
        let damage = Math.floor(Math.random() * 5) + 1;
        wolfHealth -= damage;
        if (wolfHealth < 0) wolfHealth = 0;
        document.getElementById("wolfHealth").innerText = "Wolf Health: " + wolfHealth;

        if (wolfHealth === 0) {
            let popup = document.getElementById("popupwolfdeath");
            popup.style.display = "block";
            popup.style.opacity = "1";

            setTimeout(() => {
                popup.style.opacity = "0";
                setTimeout(() => {
                    popup.style.display = "none";
                }, 1000);
            }, 8000);

        }
    }

    function wolfAttack(){

    }


    function showDialog() {
        document.getElementById("npcDialog").style.display = "block";
    }

    function closeDialog() {
        document.getElementById("npcDialog").style.display = "none";
    }

    function acceptQuest() {
        let popup = document.getElementById("popup");
        popup.style.display = "block";
        popup.style.opacity = "1";


        setTimeout(() => {
            popup.style.opacity = "0";
            setTimeout(() => {
                popup.style.display = "none";
            }, 1000);
        }, 4000);
        closeDialog();
    }

    function askAboutTown() {

    }
</script>
</body>
</html>