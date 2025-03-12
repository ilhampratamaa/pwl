<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA DIRI</title>
</head>
<body style="font-family:arial, sans-serif">
    <h1>FORM DATA DIRI</h1>
    <form action="" method="POST">
            <label for="name">Nama  :</label>
            <br>
            <input type="text" name="name" id="name">
        <br>
            <label for="nim">NIM :</label> 
            <br>
            <input type="text" name="nim" id="nim">
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $nim = $_POST['nim'];
            $name = $_POST['name'];
            echo "<h3>Hallo, $name $nim</h3>";
        }
    ?>
</body>
</html>
