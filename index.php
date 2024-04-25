<?php 
  $openfile = fopen('file.txt', 'r');
  while(!feof($openfile)){
    echo fgets($openfile);
  };
  
  fclose($openfile);
?>