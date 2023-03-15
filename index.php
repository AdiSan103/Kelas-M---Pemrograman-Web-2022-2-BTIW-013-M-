<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .color {
            animation: color 5s infinite;
        }
        @keyframes color {
            0% {
                background-color: red;
            }
            20% {
                background-color: orange;
            }
            30% {
                background-color: yellow;
            }
            40% {
                background-color: green;
            }
            50% {
                background-color: blue;
            }
            70% {
                background-color: aquamarine;
            }
            90% {
                background-color: purple;
            }
        }
    </style>
</head>
<body>
    <div class="color" style="min-height:100vh;width:100%">

    </div>
    <div style="min-height:100vh;width:100%">
        <h3 class="scale">Latihan Web Programming</h3>
        <ul>
            <li>1. Html</li>
            <li>2. Css</li>
        </ul>     
    </div>
    
    <?php       
        echo "latihan aja mau?";
    ?>

</body>
</html>