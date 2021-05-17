<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $url = "request.txt";

    $myfile = fopen( $url, "a") or die("Unable to open file!");
    $txt = $name ."  ". $mail."  ". $subject."  ".$message."\n";
    fwrite($myfile, $txt);

    fclose($myfile);

    echo  'success';

}
?>
