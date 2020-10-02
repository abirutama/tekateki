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
    <title>Files</title>
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li class="is-active"><a href="file.php">Files</a></li>
                    </ul>
                </div>
                <nav class="panel">
                    <a href="kartu-member.jpeg" class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-image" aria-hidden="true"></i>
                        </span>
                        kartu-member.jpeg
                    </a>
                    <a href="DCIM0251.jpg" class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-image" aria-hidden="true"></i>
                        </span>
                        DCIM0251.jpg
                    </a>
                    <a href="DCIM0252.jpg" class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-image" aria-hidden="true"></i>
                        </span>
                        DCIM0252.jpg
                    </a>
                    <a href="DCIM0253.jpg" class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-image" aria-hidden="true"></i>
                        </span>
                        DCIM0253.jpg
                    </a>
                    <a href="DCIM0254.jpg" class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-image" aria-hidden="true"></i>
                        </span>
                        DCIM0254.jpg
                    </a>
                    <a href="malioboro.jpg" class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-image" aria-hidden="true"></i>
                        </span>
                        malioboro.jpg
                    </a>
                    <a href="polis-asuransi.pdf" class="panel-block">
                        <span class="panel-icon">
                        <i class="fas fa-file-pdf" aria-hidden="true"></i></i>
                        </span>
                        polis-asuransi.pdf
                    </a>
                    <a href="untitled.txt"class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-file-alt" aria-hidden="true"></i>
                        </span>
                        untitled.txt
                    </a>
                    
                </nav>
            </div>
        </div>
    </section>
</body>

</html>