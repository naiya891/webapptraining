<?php
    ini_set('mbstring.internal_encoding' , 'UTF-8');
    if(isset($_POST['ID'])&isset($_POST['pass'])):
    {
        $id = $_POST['ID'];
        $pass = $_POST['pass'];
    }
    else:
    {
        header("location: main.php");
    }
    endif;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            ログイン完了
        </title>
    </head>
    <body>
            <h1>
                ログイン完了
            </h1>
            <h2>
                <?php
                    echo "ようこそ{$id}さん"
                ?>
            </h2>
            </p>
        </form>
    </body>
</html>