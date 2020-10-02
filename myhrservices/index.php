<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To MNC Group</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/5dbbe055c9.js" crossorigin="anonymous"></script>
</head>
<?php 
            $notice = '';
            if(isset($_POST['email']) && isset($_POST['pass'])){
                if($_POST['email']=="demas.prayogo@mncgroup.com" && $_POST['pass']=="mncku127"){
                    //echo "Selamat Kamu Berhasil! Secret Key: EMASKU-x7z";
                    $notice = '';
                    header('home.php')
                    die();
                }else{
                    $notice = 'Email atau Password Salah!';
                }
            }?>
<body>
    <section class="section">
        <div class="container">
            <div class="box" style="max-width:400px;margin:auto;padding:64px">
                <img src="myhr.png" alt="" width="200px" style="margin-bottom:32px">
                <span class="has-text-danger"><?= $notice; ?></span>
                <form action="" method="post">
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input name="email" class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input name="pass" class="input" type="password" placeholder="Password">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                    <button class="button is-fullwidth is-primary" style="margin-bottom:32px">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>