<?php 
include 'session.php';
$sil = mysqli_query( $db,"DELETE FROM `haberler`  WHERE id = '".$_POST['id']."'");
if($sil){
    echo 'silindi';
}

?>