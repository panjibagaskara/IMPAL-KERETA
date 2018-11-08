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
    .warna{
        color: black;
    }
    .margin1{
        margin-top:20px;
        margin-bottom:20px;
        padding:10px;
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
  <a class="w3-bar-item w3-button w3-teal" href="<?php echo base_url(); ?>Cdashboard/pesan">Pesan Tiket</a>
  <a class="w3-bar-item w3-button" href="#">Riwayat Pemesanan</a>
  <a class="w3-bar-item w3-button" href="#">Lihat Jadwal</a>
  <a class="w3-bar-item w3-button" href="#">LOGOUT</a>
</nav>
<div class="w3-overlay w3-hide-medium w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
<div id="myTop" class="w3-container w3-top w3-medium">
    <p><i class="fa fa-bars w3-button w3-hide-large w3-xlarge w3-white" onclick="w3_open()"></i>
    <span id="myIntro" class="w3-hide">Pesan Tiket</span></p>
</div>
<div class="w3-row">
        <div class="w3-col l2" style="background-color:white;margin-top:40px;"></div>
        <div class="w3-col l10">
            <div class="w3-container">
                <div class="w3-container">
                    <div class="w3-container">
                        <div class="w3-container">
                            <div class="w3-container">
                                <div class="w3-container margin1">
                                    <div class="row">
                                        <div class="w3-col l3 m3"></div>
                                        <div class="w3-col l6 m6">
                                            <form class="w3-card w3-round margin1" method="post" action="">
                                                <h2 class="w3-center w3-bold" style="padding-top:15px;">Pesan Tiket</h2>
                                                <hr>
                                                <div>
                                                    <label for="berangkat">Stasiun Keberangkatan</label>
                                                    <select class="w3-input w3-round" name="stab" id="berangkat">
                                                        <option value="bekasi">Bekasi</option>
                                                    </select>
                                                </div>
                                                <div class="margin2">
                                                    <label for="tujuan">Stasiun Tujuan</label>
                                                    <select class="w3-input w3-round" name="staj" id="tujuan">
                                                        <option value="bandung">Bandung</option>
                                                    </select>
                                                </div>
                                                <div class="margin2">
                                                    <label for="tanggal">Tanggal Keberangkatan</label>
                                                    <input type="date" class="w3-input w3-sand w3-round" name="tanggal" id="tanggal">
                                                </div>
                                                <div class="margin2">
                                                    <label for="orang">Jumlah Penumpang</label>
                                                    <select class="w3-input w3-round" name="orang" id="orang">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                                <div class="w3-row">
                                                    <div class="w3-col s8 margin2"></div>
                                                    <div class="w3-col s4 margin2">
                                                        <input type="submit" name="next" value="Next" id="next" class="w3-input w3-round">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="w3-col l3 m3"></div>
                                    </div>
                                </div>
                            </div>
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
