<?php
echo "<h1>Encriptação sha</h1>";

$str = "Teste de Encriptação SHA";

echo "Original:".$str."<br>";

$str_sha=sha1($str);

echo "Encriptado:".$str_sha."<br>";


echo "<h1>Encriptação base64</h1>";
  
echo "Original:".$str."<br>";

$str_encript=base64_encode($str);

echo "Encriptado:".$str_encript."<br>";

$str_decript=base64_decode($str_encript);

echo "Desencriptado:".$str_decript."<br>";

?> 