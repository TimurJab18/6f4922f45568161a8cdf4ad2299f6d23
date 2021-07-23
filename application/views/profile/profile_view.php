<div id="profile">
<div class="profile-wrap">
  <div class="user-bar">
    <style type="text/css">
      .user-bar__photo_wrap{float:left;}
      .user-bar__wrap{margin-left:154px;}
      .user-bar{padding:17px 0;}
    </style>
    <div class="user-bar__photo_wrap">
      <div class="div-image__important" style="background-image: url('/images/download.jpg');width:140px;height:140px"></div>
    </div>
    <div class="user-bar__wrap" style="line-height:29px;">


      <?php

var_dump($data);
      ?>
      <div><a style="font-weight:bold;font-size:17px">Павел Дуров</a></div>
      <div>Приветики пистолетики</div>
    </div>
    <div class="clear"></div>
  </div>

<?php
//var_dump($data);
?>







  <div class="nav">
    <a href="/profile" class="nav-link nav-link__active">Информация</a>
    <a href="/profile/portfolio" class="nav-link">Портфолио</a>
    <a href="/profile/reviews" class="nav-link">Отзывы</a>
  </div>






<style type="text/css">
  .info-content{line-height:27px}
  .info-wrap{margin-top:7px;}
  .info-title{font-size:19px;font-weight: bold;margin:24px 0 21px}
</style>
    <div class="clear"></div>
  <div class="info-wrap">
    <div class="info-title">Информация</div>
    <div class="info-content">




      <?php
echo $data['tasks']['about_me'];
      ?>

    </div>
  </div>


<div class=""></div>


</div>
</div>
    <div class="clear"></div>