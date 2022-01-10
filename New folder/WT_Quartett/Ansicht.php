<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Karten Ansicht</title>
    <link rel="stylesheet" href="style/styleAnsicht.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="script/script.js">
        var Array: position;
        
        function nextF(params) {
            alert("next");
        }

        function backF(params) {
            alert("back");
        }
    </script>
</head>

<body>
<div class="UI_elemente">
    <div class="backB" onclick="backF()">
        <a>back</a>
    </div>
    <div class="ansicht">
        <a>ansicht</a>
        
    </div>
    <div class="nextB" onclick="nextF()">
        <a>next</a>
    </div>
</div>

</body>

</html>