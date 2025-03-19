let wolfHealth = 20;
let playerlevel = 1;


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



function levelUpx1(){
    playerlevel += 1;


    document.getElementById("playerlevel").innerText = playerlevel;
    let popup = document.getElementById("levelup");
    popup.style.display = "block";
    popup.style.opacity = "1";


    setTimeout(() => {
        popup.style.opacity = "0";
        setTimeout(() => {
            popup.style.display = "none";
        }, 1000);
    }, 4000);

}

function levelUpx5(){
    playerlevel += 5;
    document.getElementById("playerlevel").innerText = playerlevel;
    let popup = document.getElementById("levelupxFive");
    popup.style.display = "block";
    popup.style.opacity = "1";

    setTimeout(() => {
        popup.style.opacity = "0";
        setTimeout(() => {
            popup.style.display = "none";
        }, 1000);
    }, 4000);

}

function gameSaved(){
    let popup = document.getElementById("saveGame");
    popup.style.display = "block";
    popup.style.opacity = "1";

    setTimeout(() => {
        popup.style.opacity = "0";
        setTimeout(() => {
            popup.style.display = "none";
        }, 1000);
    }, 4000);

}
function saveSettings () {
    let popup = document.getElementById("saveSettings");
    popup.style.display = "block";
    popup.style.opacity = "1";

    setTimeout(() => {
        popup.style.opacity = "0";
        setTimeout(() => {
            popup.style.display = "none";
        }, 1000);
    }, 4000);
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

function completeQuest() {
    playerlevel += 1;


    document.getElementById("playerlevel").innerText = playerlevel;

    let popup = document.getElementById("popupcomplete");
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
function gameMenu() {
    document.getElementById("gameMenu").style.display = "block";
}


function gameSettings() {
    document.getElementById("gameSettings").style.display = "block";
    document.getElementById("gameMenu").style.display = "none";

}

function quitGame() {
    if (confirm("Are you sure you want to quit the game?")){

    window.location.href = "index.php";
    }

}

function newGame() {
    window.location.href = "gamesite.php";

}


function showDialog() {
    document.getElementById("townDialog").style.display = "none";
    document.getElementById("npcDialog").style.display = "block";
}

function closeDialog() {
    document.getElementById("npcDialog").style.display = "none";
    document.getElementById("townDialog").style.display = "none";
    document.getElementById("questDialog").style.display = "none";
    document.getElementById("questDoneDialog").style.display = "none";
    document.getElementById("gameMenu").style.display = "none";
    document.getElementById("gameSettings").style.display = "none";
}
function closeDialogSettings(){
    document.getElementById("gameSettings").style.display = "none";
    document.getElementById("gameMenu").style.display = "block";
}


function askAboutTown() {
    closeDialog();

    document.getElementById("townDialog").style.display = "block";
}

function infoAboutQuest() {
    closeDialog();

    document.getElementById("questDialog").style.display = "block";
}

function completeQuestDialog () {
    document.getElementById("questDoneDialog").style.display= "block";
}
