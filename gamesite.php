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
<ul>
    <li><button onclick="showPopup()">Accept Quest</button></li>
        <div id="popup" class="popup">Quest Accepted</div>

    <li><button onclick="showPopupcomplete()">Complete Quest</button></li>
        <div id="popupcomplete" class="popup">Quest Completed</div>
</ul>

<ul>
    <li><button onclick="attackWolf()">Attack Wolf</button></li>
    <li><button onclick="wolfAttack()">Wolf Attack</button></li>
</ul>

<ul>
    <li><button>Level Up x1</button></li>
    <li><button>Level Up x5</button></li>
    <li><button>Inventory</button></li>
</ul>
<button>Priestess</button>


<script>
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

    }

    function wolfAttack(){

    }
</script>
</body>
</html>