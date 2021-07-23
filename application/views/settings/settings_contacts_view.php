<div id="settings">
	<style type="text/css">
.settings-wrap{padding:14px 0;}
.input_wrap{text-align: left;}
.input_wrap_title{padding-bottom:7px;display: block;float: left;
    margin: 5px -124px;text-align:right; }


    .settings-text_field{    height: 31px;line-height:31px;padding:0 11px;}
	</style>

<?php

//var_dump($data);
?>


<div class="settings-wrap">


  <div class="nav">
    <a href="/settings/info" class="nav-link">Информация</a>
    <a href="/settings/contacts" class="nav-link nav-link__active">Контакты</a>
    <a href="/settings/change_password" class="nav-link">Сменить пароль</a>
    <a href="/settings/portfolio" class="nav-link">Портфолио</a>
    <a href="/settings/black_list" class="nav-link">Черный список</a>
  </div>



<style type="text/css">
.settings-text_field{width:100%}
</style>

<div class="clear"></div>
 <div class="settings-info__container" style="width:340px;margin:0 auto;padding:35px 0 35px">

   <div class="input_wrap" style="margin-bottom:21px;">
		<span style="font-weight: bold;font-size:19px">Контакты</span>
  	  </div>


<FORM action="" method="POST">




<?php
  if(isset($data['settings_messages'])) {
?>
<div class="form-messages">
  <div class="form-message__title"><?php echo $data['settings_messages']['error']['error_message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['settings_messages']['error']['error_message']['description'];?></div>
</div>
<?php
} else echo '<div class="input_wrap reg-small__info">Ввведите Ваши данные в поле ниже</div>';

?>













































































   <div class="input_wrap">
   	<div class="input_wrap_title">Skype:</div>
		<input type="text" name="" class="text_field settings-text_field" placeholder="Skype не указан">
  	  </div>
   <div class="input_wrap">
   	<div class="input_wrap_title">Whatsapp:</div>
		<input type="text" name="" class="text_field settings-text_field" placeholder="Whatsapp не указан">
  	  </div>
   <div class="input_wrap">
   	<div class="input_wrap_title">Telegram:</div>
		<input type="text" name="" class="text_field settings-text_field" placeholder="Telegram не указан">
  	  </div>
   <div class="input_wrap">
   	<div class="input_wrap_title">Viber:</div>
		<input type="text" name="" class="text_field settings-text_field" placeholder="Viber не указан">
  	  </div>
  	  
   <div class="input_wrap">
   	<div class="input_wrap_title">Телефон:</div>
		<input type="text" name="" class="text_field settings-text_field" placeholder="Телефон не указан">
  	  </div>
  	  
  	 
  	  
   <div class="input_wrap">
   	<div class="input_wrap_title">Сайт:</div>
		<input type="text" name="" class="text_field settings-text_field" placeholder="Сайт не указан">
  	  </div>
  	  

  	  <style type="text/css">
  	  .select{    border: 1px solid #BBB;
    height: 24px;
    padding: 0 7px;
    border-radius: 5px;
    width: 100%;
    cursor: pointer;
    transition: all 0.34s ease;}
  	  </style>
















































   <div class="input_wrap">
		<input type="submit" name="settings_submit" class="button" value="Сохранить" style="width: auto;">
  	  </div>


    </FORM>
 </div>

<div class="clear"></div>
</div>
</div>






<script type="text/javascript">
setTimeout(function() {
  addClass('head-settings', 'head-link__active');
}, 100);
</script>