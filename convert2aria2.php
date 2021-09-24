<?php

function read_file($path) {
    if ($handle = fopen($path, 'r')) {
        while (! feof($handle)) {
            yield trim(fgets($handle));
        }
        fclose($handle);
    }
}
$glob = read_file('xxxx.myshopify.com.txt');
while ($glob->valid()) {
    $line = $glob->current();

    if(strstr($line,"https://")){
       $line=substr($line,0,strrpos($line,'?'));
       if($line){
         $str=$line.PHP_EOL." out=".str_replace("https://","xxxx.myshopify.com/",$line).PHP_EOL;
         echo $str;
         file_put_contents("download_list.txt",$str,FILE_APPEND);
       }

    }

    $glob->next();
}


 ?>
