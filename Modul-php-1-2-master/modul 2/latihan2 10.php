<?php
 $arrnilai = array ("ani"=>80,"rimba"=>100,"ana"=>90,"budi"=>75);

 echo "<br>menampilkan isi array dengan foreach :<br>";
foreach ($arrnilai as $nama => $nilai){
echo "Nilai $nama = $nilai</br>";
}
reset ($arrnilai);
echo "<br> menampilkan isi array dengan while dan list ; <br>"
while (list($nama , $nilai ) = each ($arrnilai)){
    echo "nilai $nama =$nilai<br>"
}

?>