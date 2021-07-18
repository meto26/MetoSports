<?php
// $conn = mysqli_connect("sunucu","k_adi","sifre","db_adi");
$db = mysqli_connect("localhost","root","","webproje");

if ( mysqli_connect_errno() ) {
	/* Baglantı Başarısız ise     */
	echo "Bağlantı Başarısız. Hata : ".mysqli_connect_error();
}
else {
	/* Baglantı başarılı ise     */
	//echo "Baglantı başarılı";	
}
//mysqli_close($conn);    // Veri tabanını kapatmak için kullanılır. Zorunlu değil.
// Türkçe karakter problemlerine bir çözüm olarak aşağıdaki komut kullanılır.
mysqli_query($db,"SET NAMES 'utf8'");

?>