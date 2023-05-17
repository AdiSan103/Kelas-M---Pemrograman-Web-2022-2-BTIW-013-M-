<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lat1.php" method="POST" onsubmit="return checkForm(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" name="txNAMA">
        </div>
        <div>
            TANGGAL LAHIR
            <input type="date" name="txTANGGALLAHIR">
        </div>
        <div>

        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
<script>
    function checkForm(frm) {
        let F = frm.elements;

        // function
        function show(item,message) {

            let value2 = F.namedItem(item).value;
            
            console.log(message+value2);
        }

        // main
        show('txNIM', 'NIM : ');
        show('txNAMA', 'NAMA : ');
        show('txTANGGALLAHIR', 'TANGGAL LAHIR : ');
        
        return false;
    }
</script>
</html>