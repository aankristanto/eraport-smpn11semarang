<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Informasi Nilai PTS - SMP Negeri 11 Semarang</title>
    <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Chart.min.css">
    <style>
    html {
        background: url(assets/bg.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    /* fallback */
    @font-face {
        font-family: 'Material Icons';
        font-style: normal;
        font-weight: 400;
        src: url(assets/fonts/material-icons.woff2) format('woff2');
    }
    .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -webkit-font-feature-settings: 'liga';
        -webkit-font-smoothing: antialiased;
    }
	</style>
</head>
<body onload="document.addEventListener('contextmenu', event => event.preventDefault());">
    <div class="navbar-fixed">
        <nav class="white z-depth-2">
            <div class="nav-wrapper"><a href="index.php" class="brand-logo green-text">&nbsp; <img src="assets/logo.png" class="brand-logo" style="max-height:64px;" /></a>    
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col s12 m8 l8">
            <br/><br/>
            <h4 class="black-text" style="text-shadow: 2px 2px white;"><b>WEB E-RAPORT</b></h4>
            <h4 class="black-text" style="text-shadow: 2px 2px white;"><b>SMPN 11 SEMARANG</b></h4>
        </div>
        <div class="input-field col s12 m4 l4">
            <div>
                <br/><br/><br/>
            </div>
            <div class="white center z-depth-4 animate animated animate bounceInLeft" style="border-radius:20px;">
                <br/>
                <h5><b>CEK E-RAPORT</b></h5>
                <form action="" method="post">
                    <input placeholder="Nomor NISN" id="input_nisn" name="inputnisn" type="number" class="validate" style="max-width: 300px;" disabled><br/>
                    <button class="btn btn-large btn-submit wave-effect blue darken-4" id="tbl_periksa" name="tblperiksa" disabled><i class="material-icons left">search</i>CARI</button>
                </form>
                <p>
                Countdown Menuju Pengumuman Hasil Penilaian<br/>
                <a id="days"></a> <a id="hours"> </a> <a id="mins"></a> <a id="secs"></a></a></p>
                <h2 id="end"></h2>
                <script>
                    // The data/time we want to countdown to
                    var countDownDate = new Date("2020-12-10 10:00:00").getTime();

                    // Run myfunc every second
                    var myfunc = setInterval(function () {

                        var now = new Date().getTime();
                        var timeleft = countDownDate - now;

                        // Calculating the days, hours, minutes and seconds left
                        var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

                        // Result is output to the specific element
                        document.getElementById("days").innerHTML = days + " hari, "
                        document.getElementById("hours").innerHTML = hours + " jam, "
                        document.getElementById("mins").innerHTML = minutes + " menit, "
                        document.getElementById("secs").innerHTML = seconds + " detik, "

                        // Display the message when countdown is over
                        if (timeleft < 0) {
                            clearInterval(myfunc);
                            document.getElementById("days").innerHTML = ""
                            document.getElementById("hours").innerHTML = ""
                            document.getElementById("mins").innerHTML = ""
                            document.getElementById("secs").innerHTML = ""
                            document.getElementById("end").innerHTML = "";
                            document.getElementById("input_nisn").disabled = false;
                            document.getElementById("tbl_periksa").disabled = false;
                        }
                    }, 1000);
                </script>
                <br/>
            </div>
            <div>

            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m12 l12 ">
            
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m12 l12 ">
            
        </div>
    </div>
    <footer class="page-footer blue darken-4 z-depth-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">SMP Negeri 11 Semarang</h5>
                    <p class="grey-text text-lighten-4">
                    Jl. Karangrejo Tengah, Kec. Gajahmungkur, <br/>Kota Semarang, Jawa Tengah. 50231
                    
                    <br/>(024) 8311762</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    
                </div>
            </div>
        </div>
        <div class="footer-copyright blue darken-3">
            <div class="container white-text">
                © 2020 <a class="white-text" href="https://excellentcom.id/">PT DINARTECHSHARE-E</a>
                
            </div>
        </div>
    </footer>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>
</html>
<?php
if(isset($_POST['tblperiksa']))
{
$nisn   = $_POST['inputnisn'];
if (file_exists('assets/eraport/'.$nisn.'.pdf')) {   
    //header("Location:assets/eraport/'.$nisn.'.pdf");
    echo '<meta http-equiv="refresh" content="0; url=assets/eraport/'.$nisn.'.pdf">';
} else {
    echo "<script>alert('NISN Tidak Ditemukan!')</script>";
}
}

?>