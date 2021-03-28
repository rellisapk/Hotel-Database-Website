<?= $this->extend('data_temp') ?>

<?= $this->section('css') ?>
    * {box-sizing: border-box;}
    body {font-family: Verdana, sans-serif;}
    .mySlides {display: none;}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 600px;
    position: relative;
    margin: auto;
    }

    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
    }
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<span ><img src="images/logo.png" alt="logo" height=150px>Saturnus Hotels & Resorts</span>
<h1>Dashboard</h1>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="images/slide/1.jpg" style="width:100%">
            <div class="text">Saturnus Hotels & Resorts</div>
        </div>

        <div class="mySlides fade">
            <img src="images/slide/2.jpg" style="width:100%">
            <div class="text">Kamar</div>
        </div>

        <div class="mySlides fade">
            <img src="images/slide/3.jpg" style="width:100%">
            <div class="text">Cafe</div>
        </div>
        
        <div class="mySlides fade">
            <img src="images/slide/4.jpg" style="width:100%">
            <div class="text">Nature View</div>
        </div>
        
        <div class="mySlides fade">
            <img src="images/slide/5.jpg" style="width:100%">
            <div class="text">Swimming Pool</div>
        </div>

    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
        <span class="dot"></span> 
        <span class="dot"></span>
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2500); //Auto Slide 2 detik
    }
</script>
<?= $this->endSection() ?>