<?= $this->extend('data_temp') ?>

<?= $this->section('css') ?>
    .mid {
        padding: 0px;
    }
    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }
    .panel-default > .panel-heading {
        color: #333333;
        background-color: #f5f5f5;
        border-color: #ddd;
        padding: 20px;
    }
    .timeline {
        list-style: none;
        padding: 20px 0 20px;
        position: relative;
    }

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

    .timeline > li:before,
    .timeline > li:after {
        content: " ";
        display: table;
    }

    .timeline > li:after {
        clear: both;
    }

    .timeline > li:before,
    .timeline > li:after {
        content: " ";
        display: table;
    }

    .timeline > li:after {
        clear: both;
    }

    .timeline > li > .timeline-panel {
        width: 44%;
        float: left;
        border: 1px solid #d4d4d4;
        border-radius: 2px;
        padding: 20px;
        position: relative;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        margin-right: 30px;
        margin-left: 30px;
    }

    .timeline > li > .timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -15px;
        display: inline-block;
        border-top: 15px solid transparent;
        border-left: 15px solid #ccc;
        border-right: 0 solid #ccc;
        border-bottom: 15px solid transparent;
        content: " ";
    }

    .timeline > li > .timeline-panel:after {
        position: absolute;
        top: 27px;
        right: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-left: 14px solid #fff;
        border-right: 0 solid #fff;
        border-bottom: 14px solid transparent;
        content: " ";
    }

    .timeline > li > .timeline-badge {
        color: #fff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        font-size: 1.4em;
        text-align: center;
        position: absolute;
        top: 16px;
        left: 50%;
        margin-left: -25px;
        background-color: #999999;
        z-index: 100;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }

    .timeline > li.timeline-inverted > .timeline-panel {
        float: right;
    }

    .timeline > li.timeline-inverted > .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 15px;
        left: -15px;
        right: auto;
    }

    .timeline > li.timeline-inverted > .timeline-panel:after {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }

    .timeline-badge.primary {
        background-color: #2e6da4 !important;
    }

    .timeline-badge.success {
        background-color: #3f903f !important;
    }

    .timeline-badge.warning {
        background-color: #f0ad4e !important;
    }

    .timeline-badge.danger {
    background-color: #d9534f !important;
    }

    .timeline-badge.info {
    background-color: #5bc0de !important;
    }

    .timeline-title {
    margin-top: 0;
    color: inherit;
    }

    .timeline-body > p,
    .timeline-body > ul {
    margin-bottom: 0;
    }

    .timeline-body > p + p {
    margin-top: 5px;
    }
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Responsive Timeline</h2>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <ul class="timeline">
            <li>
                <div class="timeline-badge"><i class="fa fa-check"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">The Company Facts</h4>
                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                        </p>
                    </div>
                    <div class="timeline-body">
                        <p>Saturnus Hotels & Resorts, under the management of PT Bimasakti, was established in 2013. It was begun with; the company bought, build, and renovate hotels into chains of Saturnus Hotels. As owner and or operator of Saturnus Hotels, PT Bimasakti offers international business and leisure travelers seeking alternatives that meet their needs and budgets.

Saturnus Hotels & Resorts provides uniquely Indonesian hospitality in each city. Experience local tradition and personal touch in every detail of rooms, pools, and lounges. Pamper yourself in complete indulgence while focusing on your business with our exclusive Wi-Fi internet connection in your room.

The Business Center in Saturnus Hotels also provides a distinctively high-tech board room that has a personal living room. With a lounge-like vibe, befully comfortable with our latest technology while achieving your greates goals.

With ISO 9001/2008 standard, Saturnus Hotel & Resorts gives you all the best in convenience, comforts, service, and security.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">The Philosophy</h4>
                    </div>
                    <div class="timeline-body">
                        <p>A touch of Indonesian Hospitality with briliance of highest standards in hotel services

As a trendsetter in a highly competitive hotel industry, Saturnus Hotel & Resorts provides top-class facilities and services combined with easy access to airports, commercial centers, and cultural areas of interests, government offices, and recreational retreats.

All this luxury can be found not only in Jakarta or Bali, but lesser-known yet equally important destination all over Indonesia.

With our vision to become the preferred choice for Indonesia's middle and upper market segments, we constantly seek to create more value for all our stakeholders by combining quality with professionalism and service by heart.

We offer a value-for-money accommodation and uncompromising hospitality in well appointed facilities. By offering tradition themes in design and traditional standards of hospitality, we aim to bring the touch of Indonesia to all our Saturnus Hotels & Resorts and The Royal Collection.</p>
                        
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">The Brand</h4>
                    </div>
                    <div class="timeline-body">
                        <p>We value our tradition and natural touch and serve you with the best of Indonesian home.

The brand values of Saturnus Hotels are'Indonesian Home', a home that portrays the true Indonesian hospitality. With our distinctive facilities and services, we pamper our guests with unique local tradition, natural touch enviroment, perfect family values and freshness in every aspect of the hotel.

Experience the traditional details, uncanny taste of our mouthwatering gourmet, resort feeling at the pool side in Bali, and our exclusive meeting rooms with state of the art technology. Expect nothing but the best in both worlds, here at Saturnus Hotels & Resorts and The Royal Collection.

Saturnus Hotel & Resorts
Two, three and four-star rated hotels to upscale mid-price market, both business, and leisure travelers.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <center>
        <a href=<?= base_url("dev"); ?> class="btn">Meet the Dev!</a>
    </center>
<?= $this->endSection() ?>