<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title); ?></title>
    <link rel="stylesheet" href="<?= base_url("bootstrap-grid.css") ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            margin:0; padding:0;
        }

        body {
            background-image: url("https://i.ibb.co/1vX81MQ/wallpaperflare-com-wallpaper.jpg");
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
        }

        input, select, textarea, button {
            font-family: inherit;
        }

        a {
            text-decoration: none;
            display: inline-block;
            color: black;
        }

        nav {
            margin:auto;
            text-align: center;
            width: 100%;
        } 

        nav ul ul {
            display: none;
        }

        nav ul li:hover > ul {
            display: block;
            width: 150px;
        }

        nav ul {
            background: white;
            padding: 0 20px;
            list-style: none;
            position: relative;
            display: inline-table;
            width: 100%;
        }

        nav ul:after {
            content: ""; 
            clear:both; 
            display: block;
        }

        nav ul li {
            float:left;
        }

        nav ul li:hover {
            background:#666;
        }

        nav ul li:hover a {
            color:black;
        }

        nav ul li a {
            display: block;
            padding: 25px;
            color: black;
            text-decoration: none;
        }

        nav ul ul {
            background: #53bd84;
            border-radius: 0px;
            padding: 0;
            position: absolute;
            top:100%;
        }

        nav ul ul li {
            float:none;
            border-top: 1px soild #53bd84;
            border-bottom: 1px solid #53bd84;
            position: relative;
        }

        nav ul ul li a {
            padding: 15px 40px;
            color: #fff;
        }

        nav ul ul li a:hover {
            background-color: #666;
        }

        nav ul ul ul {
            position: absolute;
            left: 100%;
            top: 0;
        }
        
        .box {
            width: 800px;
            padding: 30px;
            border: 5px solid white;
            margin-top: 250px;
            background: white;
        }
        
        .mid {
            background-color: white;
            margin: auto;
            margin-top: 70px;
            margin-bottom: 70px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px 0 rgb(0 0 0);
        }

        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
            padding: 8px;
        }

        .btn {
            margin: 15px;
            background: #ac7f00;
            text-align: center;
            border: 0;
            padding: 10px 20px;
            outline: none;
            color: white;
            border-radius: 10px;
        }
        .btn:hover {
            background: #533d00;
        }
    <?= $this->renderSection('css') ?>
    </style>
</head>
<body>
    <nav class="navbar navbar-light navbar-fixed-top">
        <ul class="nav navbar-nav">
            <li><a href="<?= base_url('dashboard') ?>" style="padding: 5px"><img src="images/logo.png" alt="logo" height=55px></a></li>
            <li><a href="<?= base_url('booking') ?>">Book</a></li>
            <li><a href="<?= base_url('customer') ?>">Customers</a></li>
            <li><a href="<?= base_url('room') ?>">Room</a></li>
            <li><a href="<?= base_url('employee') ?>">Employee</a></li>
            <li><a href="<?= base_url('about') ?>">About</a></li>
            <li><a href="<?= base_url('logout') ?>" onClick="return confirm ('Are you sure?')">Log Out</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mid">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
    <?= $this->renderSection('script') ?>
</body>
</html>