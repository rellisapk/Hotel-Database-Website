<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title); ?></title>
    <link rel="stylesheet" href="bootstrap-grid.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("https://i.ibb.co/1vX81MQ/wallpaperflare-com-wallpaper.jpg");
            font-family: 'Roboto', sans-serif;
        }

        input, select, textarea, button {
            font-family: inherit;
        }
        
        .form {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            padding: 20px;
            width: 500px;
            background-color: white;
            box-shadow: 0 0 20px 0 rgb(0 0 0);
        }

        a {
            text-decoration: none;
            display: inline-block;
            color: black;
        }
        a:hover {
            text-decoration: underline;
        }

        input, select {
            margin: 10px;
            background: #e5e5e5;
            text-align: center;
            border: 0;
            padding: 10px 20px;
            outline: none;
            color: black;
            border-radius: 10px;
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

        .errors {
            color: red;
            font-size: 14px;
        }
        .errors ul {
            padding: 0;
            list-style-type: none;
        }

        .popup {
            background-color: #e7e6cc;
            color: black;
            width: 350px;
            padding: 10px;
            border-radius: 10px;
        }
    <?= $this->renderSection('css') ?>
    </style>
</head>
<body>
    <div class="row justify-content-md-center">
        <div class="col-4 form">
            <center>
                <?= $this->renderSection('content') ?>
            </center>
        </div>
    </div>
</body>
</html>