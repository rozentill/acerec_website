
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Index | Academic Paper Recommendation</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <link rel="stylesheet" href="../../css/amazeui.min.css">
    <!--    <link rel="stylesheet" href="css/AceMap.css">-->
    <link rel="stylesheet" href="../../css/register_test.css">
</head>

<form name="Register-form" class="login-form" action="" method="post">

    <!--HEADER-->
    <div class="header" style="text-align: center">
        <?php


        if(isset($_SESSION['log_status'])){

    if($_SESSION['log_status']==2){
        ?>
                <h1>Thank you!</h1>
                <h1>You have been successfully logged out!</h1>
    </div>
    <!--END HEADER-->

    <!--FOOTER-->
    <div class="footer">
        <a href="<?php echo ROOT_FILE?>/">
            <input type="button" name="submit" value="Go back to the main page."  class="button2" />
        </a>
    </div>
                <?php

    }
        session_destroy();
    }
    ?>
    <!--END FOOTER-->

</form>