<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
        <div>
            Alas
            <input type="text" id="txAlas" value="">
        </div>
        <br>
        <div>
            Tinggi
            <input type="text" id="txTinggi" value="">
        </div>
        <br>
        <div>
            <button onclick="checkName()">Check Nama</button>
        </div>
    </form>

    <script>
        function checkName() {
            let txAlas = document.querySelector('#txAlas').value;
            let txTinggi = document.querySelector('#txTinggi').value;
            document.write('<br>alas : ' + txAlas);
            document.write('<br>tinggi : ' +  txTinggi);
            document.write('<br>rumus : alas x tinggi / 2');
            document.write('<br>rumus : ' + txAlas + ' x ' + txTinggi +  ' / ' + 2)
            document.write('<br>rumus : ' + txAlas * txTinggi +  ' / ' + 2)
            document.write('<br>Luas : '+ txAlas * txTinggi / 2);
        }
    </script>
</body>
</html>