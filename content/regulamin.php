<?php
$buf = file_get_contents("http://regulamin.aqua.net.pl/elektrozawory-pl"); 
$buf = str_replace('<h2 style="text-align:center">REGULAMIN SKLEPU INTERNETOWEGO - <em style="color:red">www.elektrozawory.pl</em></h2>', '<h1 style="text-align:center; font-size: 2rem">Regulamin sklepu internetowego - <em style="color:red">www.elektrozawory.pl</em></h1>', $buf);
echo $buf;