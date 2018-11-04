<!DOCTYPE html>
<html>
<title>Sistem Informasi PT.CAHKERETA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {font-family: "Roboto", sans-serif}
    .w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
    .gambar{
        background-image: url('http://localhost/IMPAL-KERETA/impal/img/back.jpg');
        background-size: cover;
        opacity:0.8;
    }
    .margin1{
        margin-top:114px;
        margin-bottom:129px;
        padding:10px;
        background-color:white;
    }
    .margin2{
        margin-top:5px;
        padding:5px;
    }
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="<?php echo base_url(); ?>Cdashboard"><img src="<?php echo base_url(); ?>img/LOGO.png" style="width:100%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Kembali <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="<?php echo base_url(); ?>Cdashboard">Home</a>
  <a class="w3-bar-item w3-button w3-teal" href="#">Pesan Tiket</a>
  <a class="w3-bar-item w3-button" href="#">Riwayat Pemesanan</a>
  <a class="w3-bar-item w3-button" href="#">Lihat Jadwal</a>
  <a class="w3-bar-item w3-button" href="#">LOGOUT</a>
</nav>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
<div id="myTop" class="w3-container w3-top w3-large">
    <p><i class="fa fa-bars w3-button w3-hide-large w3-xlarge w3-black" onclick="w3_open()"></i>
    <span id="myIntro" class="w3-hide">Pesan Tiket</span></p>
</div>
<div class="w3-main gambar" style="margin-left:250px;">
    <!--<header class="w3-container w3-theme" style="padding:10px">
        <h1 class="w3-large w3-center">Cah Kereta</h1>
    </header> -->
    <div class="w3-container">
        <div class="w3-container">
            <div class="w3-container">
                <div class="w3-container">
                    <div class="w3-row">
                        <div class="w3-col w3-container"></div>
                        <div class="w3-col w3-container w3-animate-zoom">
                            <form class="w3-container w3-card-4 margin1 w3-round" action="">
                                <h2 class="w3-center">Pesan Tiket</h2>
                                <hr>
                                <div class="margin2">
                                    <label for="stab">Pilih Stasiun Keberangkatan</label>
                                    <select name="stab" id="stab" class="w3-input w3-round">
                                        <option value="">BEKASI</option>
                                        <option value="">BANDUNG</option>
                                    </select>
                                </div>
                                <div class="margin2">
                                    <label for="stab">Pilih Stasiun Tujuan</label>
                                    <select name="stab" id="stab" class="w3-input w3-round">
                                        <option value="">BEKASI</option>
                                        <option value="">BANDUNG</option>
                                    </select>
                                </div>
                                <div class="margin2">
                                    <label for="stab">Pilih Tanggal Berangkat</label>
                                    <input type="date" class="w3-input w3-sand" name="tanggal">
                                </div>
                                <input type="hidden" name="hidden">
                                <div class="margin2">
                                    <input type="submit" value="Next" class="w3-input">
                                </div>
                            </form>
                        </div>
                        <div class="w3-col w3-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 
