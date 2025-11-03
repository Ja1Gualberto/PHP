<?php 
$relaticePathTo = './M4/';
$absolutPath = realpath($relaticePathTo);

if (file_exists($absolutPath)) {
    echo'Arquivo existe';
}

echo $absolutPath;



?>