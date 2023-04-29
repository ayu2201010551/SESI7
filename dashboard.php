<?php
    session_start();
    if(isset($_SESSION["LOGIN"])){
        header("location: login.php");
    }
    if($_SESSION["login"]==""){
        header("location: login.php");
    }
    $konten = "<h3>Selamat Datang ".$_SESSION["nama"]."</h3>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>


<ul>
    <li> <a hreff="?aksi=dtmhs">DataMahasiswa</a></li>
    <li> <a hreff="?aksi=dtdsn">DataDosen</a></li>
    <li> <a hreff="?aksi=dtmk">DataMatakuliah</a></li>
    <li> <a hreff="?aksi=dtu">DataUser</a></li>
    <li> <a hreff="?aksi=dtmhs"><?=$_SESSION["user"]?>logout</a></li>
</ul>

<div>
    <?php
        echo $konten;
    ?>
    
</body>
</html>