<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="container">
            <div class="sol"> <b>Kullanıcı Adı : </b> <?php echo $_SESSION['login_user']; ?> </div>
            <div class="sag"><a href="logout.php">Çıkış yap</a></div>

            <div class="home"><a href="index.php">ANASAYFA</a></div>
        </div>
    </header>