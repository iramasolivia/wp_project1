<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<body>
<form action="hitung.php" method="post">
    <h1>  Konversi Suhu</h1>
        Konversi: <br>
        <input type="radio" name="konversi" value="celcius ke fahrenhait" >Celcius ke Fahrenhait
        <input type="radio" name="konversi" value="fahrenhait ke celcius" >Fahrenhait ke Celcius<br>
        <br>
        Suhu<input type="text"  name="suhu"><br><br>
        <hr>
        <input type="submit" name="submit" value="Konversi" >
</form>

</body>
</html>
