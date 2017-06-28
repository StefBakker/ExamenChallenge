<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Stef Bakker">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kapper Snoek</title>

    <!-- Bootstrap CSS -->
    <link href="<?= URL ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?= URL ?>public/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?= URL ?>public/img/favicon.ico" type="image/x-icon">

</head>

<body>

<div class="navbar">
    <a href="<?= URL ?>home/index"><img class="scissor-img" src="<?= URL ?>public/img/scissor.png"></a>


    <div class="buttons-nav">
        <button class="btn btn-default"><a href="<?= URL ?>home/index">HOME</a></button>
        <button class="btn btn-default"><a href="<?= URL ?>home/price">PRIJZEN</a></button>
        <button class="btn btn-default"><a href="<?= URL ?>contact/index">CONTACT</a></button>
        <?php
        if (!isset($_SESSION['username']))
        {
            ?>
            <button class="btn btn-default"><a href="<?= URL ?>login/login">LOGIN</a></button>
            <button class="btn btn-default"><a href="<?= URL ?>register/register">REGISTREREN</a></button>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['username'])){
            ?>
            <button class="btn btn-default"><a href="<?= URL ?>login/logout">LOG OUT</a></button>
                        <?php
                        }
                        ?>

    </div>
</div>
    </body>