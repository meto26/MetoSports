<?php
include 'inc/baglan.php';
include 'inc/header.php';
$haber = mysqli_query($db,"SELECT * FROM `haberler` where id = '".$_GET['id']."'");
$row = mysqli_fetch_array($haber,MYSQLI_ASSOC);
$sonhaberler = mysqli_query($db,"SELECT * FROM `haberler` ORDER BY tarih DESC LIMIT 10");
 ?>

<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">Şuan Buradasınız</li>
      <li>&#187;</li>
      <li><a href="index.php">ANASAYFA</a></li>
      <li>&#187;</li>
      <li><a href="kategori.php?kategori=<?php echo $row['kategori'];  ?>"><?php echo $row['kategori'];  ?></a></li>
      <li>&#187;</li>
      <li class="current"><a href="#"><?php echo $row['baslik'];  ?></a></li>
    </ul>
  </div>
</div>
<div class="wrapper">
  <div id="container">
    <div id="content">
      <h1><?php echo $row['baslik'];  ?></h1>
      <img class="resim100" src="images/demo/<?php echo $row['resim'];  ?>" alt=""  />
      <p><?php echo $row['icerik']; ?></p>
      <div style="    width: 100%; float: left;" class="submitdate"><a style="float:right;" href="#" ><?php echo  date("d-m-Y H:m", strtotime($row['tarih']));   ?></a></div>
      <div id="comments">
        <h2>Yorumlar</h2>
        <ul class="commentlist">
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
          <li class="comment_even">
            <div class="author"><img class="avatar" src="images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
            <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
          </li>
        </ul>
      </div>
      <h2>Yorum Yaz</h2>
      <div id="respond">
        <form action="#" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Son Haberler</h2>
     
      </div>
      <?php  while($satir= mysqli_fetch_array($sonhaberler)){ ?>
      <div class="holder son_haberler">
        <a href="detay.php?id=<?php echo $satir['id']; ?>"><h2 class="title"><img  src="images/demo/<?php echo $satir['resim']; ?>" alt="" /> <span> <?php echo $satir['baslik']  ?> </span> </h2></a>
      
      </div>
     <?php } ?>
    </div>
    <br class="clear" />
  </div>
</div>

<?php include 'inc/footer.php';  ?>