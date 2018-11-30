<!DOCTYPE html>
<html>
<title>Sistem Informasi PT.CAHKERETA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    body {font-family: "Roboto", sans-serif}
    .w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
    .margin1{
        margin-top: 30px;
        margin-bottom:30px;
        padding: 10px;
    }
    .margin2{
        margin-top:5px;
    }
    .panel{
        height:550px;
    }
    .panel1{
        height:380px;
        overflow-y:scroll;
    }
    .center{
        height:380px;
        width:300px;
        margin:auto;
    }
    .kotak{
        height:20px;
        width:40px;
        margin:auto;
        background-color: blue;
    }
</style>
<body>
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
        <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="<?php echo base_url(); ?>Cdashboard"><img src="<?php echo base_url(); ?>/img/LOGO.png" style="width:100%;"></a>
        <a class="w3-bar-item w3-button" href="<?php echo base_url(); ?>Cdashboard">Home</a>
        <a class="w3-bar-item w3-button w3-teal" href="<?php echo base_url(); ?>Cdashboard/pesan">Pesan Tiket</a>
        <a class="w3-bar-item w3-button" href="#">Riwayat Pemesanan</a>
        <a class="w3-bar-item w3-button" href="#">LOGOUT</a>
    </nav>
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
    <div id="myTop" class="w3-container w3-top w3-large">
        <p style="margin-top:5px;"><i class="fa fa-bars w3-button w3-hide-large w3-xlarge" onclick="w3_open()"></i>
        <span id="myIntro" class="w3-hide">Cah Kereta</span></p>
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
                                        <div class="w3-col l1 m1"></div>
                                        <div class="w3-col l10 m10 w3-card" style="">
                                            <div class="w3-container panel w3-round">
                                                <h2 class="w3-center w3-bold" style="padding-top:15px;">Pilih Kursi</h2>
                                                <hr>
                                                <div>
                                                    <form encype="multipart/form-data" method="get" action="">
                                                        <label for="gerbong">Pilih Gerbong : </label>
                                                        <select name="gerbong" id="gerbong" class="w3-round w3-large">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                        <span style="margin-left:5px;"><input type="submit" class="w3-round" value="Pilih"></span>
                                                    </form>
                                                </div>
                                                <hr>
                                                <div class="w3-container">
                                                    <div class="w3-row">
                                                        <div class="w3-col l6 m6 s6 w3-border w3-round">
                                                            <div class="panel1">
                                                                <h5 class="w3-center margin2">Klik pada kursi</h5>
                                                                <div class="w3-row">
                                                                    <div class="w3-col l1 m1 s1 w3-center">No</div>
                                                                    <div class="w3-col l2 m2 s2 w3-center">A</div>
                                                                    <div class="w3-col l2 m2 s2 w3-center">B</div>
                                                                    <div class="w3-col l3 m3 s3 w3-center">tengah</div>
                                                                    <div class="w3-col l2 m2 s2 w3-center">C</div>
                                                                    <div class="w3-col l2 m2 s2 w3-center">D</div>
                                                                </div>
                                                                <?php 
                                                                    for ($i=0;$i<20;$i++){ ?>
                                                                        <div class="w3-row">
                                                                            <div class="w3-col l1 m1 s1 w3-center"><?php echo $i+1; ?></div>
                                                                            <div class="w3-col l2 m2 s2 w3-center"><div class="kotak w3-round" id="<?php echo 'A'.($i+1) ?>"  onclick=""></div></div>
                                                                            <div class="w3-col l2 m2 s2 w3-center"><div class="kotak w3-round" id="<?php echo 'B'.($i+1) ?>" onclick=""></div></div>
                                                                            <div class="w3-col l3 m3 s3 w3-center">||</div>
                                                                            <div class="w3-col l2 m2 s2 w3-center"><div class="kotak w3-round" id="<?php echo 'C'.($i+1) ?>" onclick=""></div></div>
                                                                            <div class="w3-col l2 m2 s2 w3-center"><div class="kotak w3-round" id="<?php echo 'D'.($i+1) ?>" onclick=""></div></div>
                                                                        </div>
                                                                    <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="w3-col l6 m6 s6">
                                                            <div class="w3-container" style="overflow-y:scroll;">
                                                                <form class="w3-card w3-border w3-round" style="padding:10px;" method="post" encype="multipart/form-data" action="<?php echo base_url(); ?>Ckursi/apply">
                                                                    <h6><b>Data Penumpang</b></h6><hr>
                                                                    <div class="margin2">
                                                                        <label for="noktp">Nomor Identitas : </label>
                                                                        <input class="w3-input w3-sand w3-round" type="text" name="noktp" id="noktp">
                                                                    </div>
                                                                    <div class="margin2">
                                                                        <label for="nama">Nama Penumpang : </label>
                                                                        <input class="w3-input w3-sand w3-round" type="text" name="nama" id="nama">
                                                                    </div>
                                                                    <div class="margin2">
                                                                        <label for="jk">Jenis Kelamin :</label>
                                                                        <select class="w3-input w3-round" name="jk" id="jk">
                                                                            <option value="pria">PRIA</option>
                                                                            <option value="wanita">WANITA</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="margin2">
                                                                        <label for="kursi">Kursi Anda :</label>
                                                                        <input type="text" class="w3-input w3-sand w3-round" disabled>
                                                                    </div>
                                                                    <div class="w3-row">
                                                                        <div class="w3-col s8 margin2"></div>
                                                                        <div class="w3-col s4 margin2">
                                                                            <input type="submit" name="apply" value="Apply" id="apply" class="w3-input w3-round">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w3-col l1 m1"></div>
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
            document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity","w3-theme");
            document.getElementById("myIntro").classList.add("w3-show-inline-block");
        } else {
            document.getElementById("myIntro").classList.remove("w3-show-inline-block");
            document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity","w3-theme");
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
