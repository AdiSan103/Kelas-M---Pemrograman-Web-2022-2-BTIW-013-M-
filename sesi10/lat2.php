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
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
<script>
    function checkForm(frm) {
        let F = frm.elements;
        let nim = F.namedItem('txNIM').value;
        console.log('NIM : '+nim);
        return false;
    }
</script>
</html>