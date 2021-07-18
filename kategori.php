<?php
include 'inc/baglan.php';
include 'inc/header.php';
$haberler = mysqli_query($db,"SELECT * FROM `haberler` where kategori = '".$_GET['kategori']."'");

 ?>

   
<div class="wrapper haberler">
  <div id="intro">
    <h2> <?php echo $_GET['kategori']; ?> Haberleri</h2>
    <ul>
      <?php  while($satir= mysqli_fetch_array($haberler)){ ?>
          <li>
            <h2><?php   echo $satir["baslik"]; ?></h2>
            <div class="imgholder"><a href="detay.php?id=<?php   echo $satir["id"]; ?>"><img src="images/demo/<?php   echo $satir["resim"]; ?>" alt="" /></a></div>
            
            <?php $uzunluk = strlen($satir["icerik"]);
            $detay = $satir["icerik"];
            ?>
            <p><?php     
                if ($uzunluk > 100) {
                  $detay = substr($detay,0,100) . " ...";
                  } 
                  echo $detay;
                  ?>
            </p>
            <p class="readmore"><a href="detay.php?id=<?php echo $satir["id"]; ?>">Devamını Oku &raquo;</a></p>
          </li>
      <?php } ?>
    
    </ul>
    <br class="clear" />
  </div>
</div>

<?php include 'inc/footer.php';  ?>