<?php 
// Load config.php
$CFG = new stdClass();
$CFG->docroot = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
if (!is_readable($CFG->docroot . 'config.php')) {
    // If it is not readable then exit.
    exit;
}
require($CFG->docroot . 'config.php');
$CFG = (object)array_merge((array)$cfg, (array)$CFG);
$wwwroot = $CFG->wwwroot;

$dbhost = $CFG->dbhost;
$dbname = $CFG->dbname;
$dbuser = $CFG->dbuser;
$dbpassword = $CFG->dbpasswd;

function notifyProjectPoster($to, $heading){
	$from = 'noreply@praktika.ut.ee';
    $subject = 'Praktikaportaali projekt';
    $message = 'Tere!<br><br>Teie projekt “'.$heading.'” on heaks kiidetud. Vaata kindlasti projektipraktika ajakava <a href="https://docs.google.com/document/d/e/2PACX-1vT7B16RNai2EJQrSf8PDTHWFiGHwrQB_MF1jhhZwo61Ox9HWJDBlL_IEFBOkHnNzvczU7R1jAy1xOc4/pub?embedded=true">siit</a>.<br><br>Heade soovidega<br>praktika.ut.ee';
    $headers = "From: ".$from."\r\n";
	$headers .= "Content-type: text/html; charset=utf-8"."\r\n";
    mail($to, $subject, $message, $headers) || print_r(error_get_last());
}

$response = "";
if(!empty($_POST) && $_POST["edit_key"] && $_POST["activateProject"]){
    $conn = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser , $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare('UPDATE ProjectPosts SET isactivated = ? WHERE edit_key = ?');
    $query->execute(array(1, $_POST["edit_key"]));
    
    notifyProjectPoster($_POST["email"],$_POST["title"]);
    
    http_response_code(200);
    echo $response;
}else if(!empty($_POST) && $_POST["edit_key"]){
    $conn = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser , $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare('SELECT * FROM editkeys WHERE keyname = ?');
    $query->execute(array($_POST["edit_key"]));
    $data = $query -> fetchAll();
	foreach($data as $row){
        $response .= $row["hashCode"];
        break;
    }
    
    http_response_code(200);
    echo $response;
}else if(!empty($_POST) && $_POST["edit_text_id"]){
    
}else{
    http_response_code(403);
    echo "Vigane päring!";
}
?>