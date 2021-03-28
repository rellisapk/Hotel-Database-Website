<?= $this->extend('data_temp') ?>

<?= $this->section('css') ?>
        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 15px;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        .foto {
            height: 300px;
        }
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container-fluid" style="text-align: center;">
        <h1>Meet the Dev!</h1><br>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="<?= base_url('images/dev/saddam.jpg') ?>" class="foto" alt="Saddam">
                    <div class="container">
                        <h3>Saddam Habibi</h3>
                        <p class="title">140810190017</p>
                        <p>saddamsevena48@gmail.com</p>
                        <p><a href="mailto:saddamsevena48@gmail.com"><button class="button">Contact</button></a></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="<?= base_url('images/dev/rellisa.jpg') ?>" class="foto" alt="Rellisa">
                <div class="container">
                    <h3>Rellisa Puspa K</h3>
                    <p class="title">140810190029</p>
                    <p>rllskusuma@gmail.com</p>
                    <p><a href="mailto:rllskusuma@gmail.com"><button class="button">Contact</button></a></p>
                </div>
                </div>
            </div>
        
            <div class="column">
                <div class="card">
                <img src="<?= base_url('images/dev/tasia.jpg') ?>" class="foto" alt="Tasia">
                <div class="container">
                    <h3>Anastasia Victoria Y</h3>
                    <p class="title">140810190049</p>
                    <p>victoriatasia@gmail.com</p>
                    <p><a href="mailto:victoriatasia@gmail.com"><button class="button">Contact</button></a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>