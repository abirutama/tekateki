<?php session_start(); ?>
<?php
    if(!isset($_SESSION["email"])){
        header('location: index.php');
            die();
    }else{
        if($_SESSION["email"]!=="demas.prayogo@mncgroup.com"){
            header('location: index.php');
            die();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/5dbbe055c9.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="box" style="max-width:1024px;margin:auto;">
                <img src="myhr.png" alt="" width="200px" style="margin-bottom:32px">
                <div class="tabs">
                    <ul>
                        <li class="is-active"><a href="home.php">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="file.php">Files</a></li>
                    </ul>
                </div>
                <div class="notification is-warning">
                YEY! kamu sudah 1 langkah berhasil menjawab teka-teki ini, selamat menyelesaikan dan meraih hadiah!
                </div>
                <div class="columns">
                <div class="column">
                    <img src="trump_biden.jpg" alt="" style="margin-bottom:32px">
                </div>
                <div class="column">
                    <img src="gowes.jpg" alt="" style="margin-bottom:32px">
                </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>