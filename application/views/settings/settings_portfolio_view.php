<div id="settings-portfolio">

<style type="text/css">
.owner-photo__wrap{float:left;}
.owner-photo{width:148px;border-radius:5px;}
.owner-info__wrap{margin-left:161px;line-height:27px}
.owner-info{padding:14px 0;}
.nav-settings__portfolio{padding:14px 0 44px;}
</style>


  <div class="nav nav-settings__portfolio">
    <a href="/settings/info" class="nav-link">Информация</a>
    <a href="/settings/contacts" class="nav-link">Контакты</a>
    <a href="/settings/change_password" class="nav-link">Сменить пароль</a>
    <a href="/settings/portfolio" class="nav-link nav-link__active">Портфолио</a>
    <a href="/settings/black_list" class="nav-link">Черный список</a>
  </div>

  <div class="clear"></div>

<div class="settings-portfolio__wrap">
<?php
foreach($data['portfolio'] as $v) {
//var_dump($v);
?>
  <div class="owner-info">
  	<div class="owner-photo__wrap"><img class="owner-photo" src="/images/download.jpg"></div>
  	<div class="owner-info__wrap">
  		<div><a style="font-size:19px;" href="/"><?php echo $v['title'];?></a></div>
  		<div><?php echo $v['text'];?></div>
  		<div><span style="color:#a2a2a2;">Дата публикации</span>: <?php echo $v['ts_created'];?></div>
  		<div style="margin-top:11px;"><button class="button" style="width:auto;">Посмотреть работу</button></div>

  	</div>
  </div>

<div class="clear"></div>
<?php
}
?>



</div>


</div>
<div class="clear"></div>