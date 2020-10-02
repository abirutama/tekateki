<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To E-masku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/5dbbe055c9.js" crossorigin="anonymous"></script>
</head>
            <?php 
            $notice = '';
            if(isset($_POST['member_id']) && isset($_POST['member_pass'])){
                if($_POST['member_id']=="990121297" && $_POST['member_pass']=="yogyakarta"){
                    echo "Selamat Kamu Berhasil! Secret Key: EMASKU-x7z7";
                    $notice = '';
                    die();
                }else{
                    $notice = 'Member ID atau Password Salah!';
                }
            }?>
<body>
    <section class="section">
        <div class="container">
            
            <div class="box has-background-grey-dark" style="max-width:400px;margin:auto;padding:64px">
                <h3 class="title has-text-warning">E-masku Login</h3>
                <span class="has-text-danger"><?= $notice; ?></span>
                <form action="" method="post">
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input name="member_id" class="input" type="text" placeholder="Nomor Member">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user-alt"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input name="member_pass" class="input" type="password" placeholder="Kata Sandi">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                    <button type="submit" class="button is-fullwidth is-warning"
                        style="margin-bottom:32px">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>