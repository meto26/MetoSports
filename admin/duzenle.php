<?php 
include 'session.php';
    if($_POST){
        $guncelle = mysqli_query( $db,"UPDATE `haberler` SET baslik =  '".$_POST['baslik']."', icerik = '".$_POST['icerik']."', resim = '".$_POST['resim']."' , kategori = '".$_POST['kategori']."' WHERE id = '".$_POST['id']."'");
        if($guncelle){
            echo '<b style="color:#04AA6D" > Haber Güncellendi!</b>';
        }
    }
    $haber = mysqli_query($db,"SELECT * FROM `haberler` where id = ".$_GET['hid']."");
    $row = mysqli_fetch_array($haber,MYSQLI_ASSOC);

    include 'header.php';
   
    ?>
    <div class="container">
    <form action="" method="post">
                <input type="hidden" name="id" value="<?php  echo $row['id']; ?>">
                <div class="form_satir">
                    <label for="">Başlık</label>
                    <input type="text" name="baslik" value="<?php  echo $row['baslik']; ?>">
                </div>
                <div class="form_satir">
                    <label for="">İçerik</label>
                    <textarea name="icerik" id="" cols="30" rows="10"><?php  echo $row['icerik']; ?></textarea>
                </div>
                <div class="form_satir">
                    <label for="">Resim</label>
                    <input type="text" name="resim" value="<?php  echo $row['resim']; ?>">
                </div>
               
                <div class="form_satir">
                    <label for="">Kategori</label>
                    <select name="kategori" id="">
                        <option <?php if($row['kategori'] == 'Futbol') { echo 'selected'; } ?> value="Futbol">Futbol</option>
                        <option  <?php if($row['kategori'] == 'Basketbol') { echo 'selected'; } ?> value="Basketbol">Basketbol</option>
                        <option  <?php if($row['kategori'] == 'Voleybol') { echo 'selected'; } ?> value="Voleybol">Voleybol</option>
                    </select>
                </div>
                <div class="form_satir">
                        <button type="submit" > Düzenle </button>
                </div>
            </form>
    </div>
       
    </body>
</html>