<?php 
include 'session.php';
    if($_POST){
        $ekle = mysqli_query( $db,"INSERT `haberler` SET baslik =  '".$_POST['baslik']."', icerik = '".$_POST['icerik']."', resim = '".$_POST['resim']."', kategori = '".$_POST['kategori']."'");
        if($ekle){
            echo '<b style="color:#04AA6D" > Haber Eklendi!</b>';
            header("location:index.php");
        }
    }
  

    include 'header.php';
   
    ?>
        <div class="container">
            <form action="" method="post">
                <div class="form_satir">
                    <label for="">Başlık</label>
                    <input type="text" name="baslik" value="">
                </div>
                <div class="form_satir">
                    <label for="">İçerik</label>
                    <textarea name="icerik" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form_satir">
                    <label for="">Resim</label>
                    <input type="text" name="resim" value="">
                </div>

                <div class="form_satir">
                    <label for="">Kategori</label>
                    <select name="kategori" id="">
                        <option value="Futbol">Futbol</option>
                        <option value="Basketbol">Basketbol</option>
                        <option value="Voleybol">Voleybol</option>
                    </select>
                </div>
                <div class="form_satir">
                        <button type="submit" > Ekle </button>
                </div>
            </form>
        </div>
    </body>
</html>