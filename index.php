<?php
include 'inc/baglan.php';
include 'inc/header.php';
$sonhaberler = mysqli_query($db,"SELECT * FROM `haberler` ORDER BY tarih DESC LIMIT 4");
$haberler = [];
while($satir= mysqli_fetch_array($sonhaberler)){ 
  $haberler[] = $satir;
}

?>
<div class="wrapper">
  <div id="latest">
    <div class="fl_left"><a href="detay.php?id=<?php echo $haberler[0]['id']; ?>"><img style="width:100%" src="images/demo/<?php echo $haberler[0]['resim']; ?>" alt="" /></a></div>   
    <div class="fl_right">
      <h2><?php echo $haberler[0]['baslik']; ?></h2>
      <?php $uzunluk = strlen($haberler[0]["icerik"]);
            $detay = $haberler[0]["icerik"];
            ?>
     <p><?php     
          if ($uzunluk > 300) {
            $detay = substr($detay,0,300) . " ...";
            } 
            echo $detay;
            ?>
      </p>
   
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="intro">
    <ul>
    <?php foreach($haberler as $key => $haber){ 
     if($key !=0){
      ?>
      <li>
        <h2><?php echo $haber['baslik']; ?></h2>
        <div class="imgholder "><a href="detay.php?id=<?php echo $haber['id']; ?>"><img class="resim100" src="images/demo/<?php echo $haber['resim']; ?>" alt="" /></a></div>
        <?php $uzunluk = strlen($haber["icerik"]);
            $detay = $haber["icerik"];
            ?>
            <p><?php     
                if ($uzunluk > 100) {
                  $detay = substr($detay,0,100) . " ...";
                  } 
                  echo $detay;
                  ?>
            </p>
        <p class="readmore"><a href="detay.php?id=<?php echo $haber['id']; ?>">Devamını Oku &raquo;</a></p>
      </li>
     <?php } } ?>
    </ul>
    <br class="clear" />
  </div>
</div>

<?php
include "inc/footer.php";
?>