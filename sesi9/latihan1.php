<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="pesan">HALO</div>
    <div>Perulangan For <p>for(nAwal;range;counter){<br>area perulangan</br>}</p> </div>
    <script src="js01.js"></script>
    <script>
        for(let i = 0; i < 10; i++) {
            document.write("<br>Perulangan ke-"+i);
        }


        document.write("<br>menulis dgn js");
        // variabel pesan
        let pesan =  document.getElementById("pesan");
        // DOM untuk variabel pesan
        pesan.innerHTML = "mengganti tulisan pesan singkat";
        pesan.style.color = "red";
    </script>
</body>
</html>