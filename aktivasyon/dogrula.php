<?php 

include '../baglan.php';


$kod = isset($_GET['kod'])?$_GET['kod']:NULL;
$email = isset($_GET['eposta'])?$_GET['eposta']:NULL;

$guncelle = $bag->guncelle(0,"n_users" , "onay","WHERE email=? AND verif_code=?", array(1,$email,$kod));

if ($guncelle) {
	echo "Aktivasyon İşleminiz Başarıyla Gerçekleşmiştir. Giriş Yapabilirsiniz..";
}

else{
echo "Ya aktivasyon yapmışsınız ya da kod zaman aşımına uğramış.";

}

 ?>