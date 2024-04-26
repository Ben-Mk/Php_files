<?php 
  $openfile = fopen('file.txt', 'r');
  while(!feof($openfile)){
    echo fgets($openfile);
  };
  
  fclose($openfile);

  $newfile = fopen('file3.txt', 'a') or die('Unable to open');
  $name = 'and I will append some text to it';
  $content = fwrite($newfile, $name);
  fclose($newfile);

?>