<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $tanggal = date("d-M-Y (H:i)"); $pesan = $_POST['pesan']; $fp = fopen('dekatutorial.txt', 'a'); fwrite($fp, '
<div class="card-pesan"><p><span>Pesan :</span><br />'.$pesan.'</p><h6>'.$tanggal.'</h6></div>'); echo json_encode(array("statusCode"=>200)); fclose($fp); die; } $fp_add = fopen('dekatutorial.txt', 'a'); $fp_read = fopen('dekatutorial.txt', 'r'); $ipp = preg_replace("/\s+/", "", fgets($fp_read)); if($ipp!=""){ $sbs = "false"; $tmpl = $ipp==getUserIpAddr() ? 'false' : 'true'; } else { $sbs = "true"; $tmpl = 'false'; if(isset($_GET["subscribe"])){ fwrite($fp_add, getUserIpAddr()); echo json_encode(array("statusCode"=>200)); die; } } fclose($fp_read); fclose($fp_add); function getUserIpAddr(){ if(!empty($_SERVER['HTTP_CLIENT_IP'])){ $ip = $_SERVER['HTTP_CLIENT_IP']; } else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }else{ $ip = $_SERVER['REMOTE_ADDR']; } return $ip; } ?><!DOCTYPE html> <html> <head> <meta charset="utf-8" /> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <title>Youtube : Deka Tutorial</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <script><?="var tampil=".$tmpl."; var sbs = ".$sbs.";"?></script> <script src="https://dekatutorial.github.io/slide/dekatutorialscript.js"></script> <link rel="stylesheet" href="https://dekatutorial.github.io/slide/dekatutorialstyle.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ ?> <div class="bg"></div> <div class="content"> <?php $fp = fopen('dekatutorial.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); ?> </div> </body> </html> <?php die; } ?> <div class="open"> <div class="left"></div> <div class="right"></div> <div class="content"> <div class="lock"> <div class="top"></div> <div class="bottom"></div> </div> </div> <div class="text"> <p>Klik Gemboknya</p> </div> </div> <div id="slider" class="slider"> <div class="wrapper"> <div id="items" class="items">

<!-- 
Code Made By Deka Tutorial
Youtube: Deka Tutorial
Tiktok: @deka_tutorial
Instagram: deka_tutorial
-->

  <div>
    <img src="stiker" />
    <p>Kalimat 1< Dear SELAMAT ULANG TAHUN CHRISYE PACARKU>
  </div>
  <div>
    <img src="stiker" />
    <p>Kalimat 2< Untukmu Semoga sehat selalu yaa dan juga panjang umur.
                  Ciee yang umurnya dah tua nih,semoga segala yang diinginkan terkabul yakk.
                  Aku selalu doain yang terbaik buat kamuu. I LOVE YOUU>
  </div>
  <div>
    <img src="stiker" />
    <p>Kalimat 3<NOTE: Maaf ya cuman ini yg bisa aku kasih buat kamu ultah kamu ny jauh sihh.
                  Bikin website gini pusingg sih tpi gpp hadiah buat kamu hhe
                  Pokoknya I love youu dan HBD sayanggg>
  </div>

<div></div></div></div></div><script>

musik = "";
idtelegram = "";

htmlscript(musik, idtelegram);
</script></body></html>
