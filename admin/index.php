<?php  session_start();
error_reporting(0);
include 'session.php';

$haberler = mysqli_query($db,"SELECT * FROM `haberler` ORDER BY tarih DESC");

include 'header.php';
?>

    <div class="container">
    <div class="sag haber_ekle" ><a href="ekle.php">Yeni Haber Ekle</a></div>
         <div class="main">
            
            <div class="h_satir basliklar">
            <div class="hid">ID</div>
                <div class="hresim">Resim</div>
                <div class="hbaslik">Başlık</div>
                <div class="hicerik">İçerik</div>
                <div class="hkategori">Kategori</div>
                <div class="htarih">Tarih</div>
                <div class="hduzenle">Düzenle</div>
                <div class="hsil">sil</div>  
            </div>
        <?php 
            while($satir= mysqli_fetch_array($haberler)){ ?>
            <div class="h_satir" id="<?php echo $satir["id"]; ?>">
                <div class="hid"><?php   echo $satir["id"]; ?></div>
                <div class="hresim"><img src="../images/demo/<?php   echo $satir["resim"]; ?>" alt=""></div>
                <div class="hbaslik"><?php   echo $satir["baslik"]; ?></div>
                <div class="hicerik"><?php   echo $satir["icerik"]; ?></div>
                <div class="hkategori"><?php   echo $satir["kategori"]; ?></div>
                <div class="htarih"><?php   echo $satir["tarih"]; ?></div>
                <div class="hduzenle"><a href="duzenle.php?hid=<?php   echo $satir["id"]; ?>">düzenle</a></div>
                <div class="hsil"  data-id="<?php   echo $satir["id"]; ?>" ><a href="javascript:void(0);" >sil</a></div>  
            </div>   




         <?php   }
        ?>
    </div>
    </div>
    <div class="silindi">Haber Silindi </div>
</body>
</html>

<script src="js/jquery-3.6.0.min.js"></script>
<script>

    $('.hsil').click(function(){   
        var id = $(this).data('id');
        console.log(id);
        $.ajax({

            type: "POST",
            url: "sil.php",
            data: {id:id}, 
        
            success: function (e) {
                if(e =='silindi'){ 
                     $('#'+id).hide();
                     $('.silindi').show();
                }
            }
            });
    })
    /*

*/
</script>