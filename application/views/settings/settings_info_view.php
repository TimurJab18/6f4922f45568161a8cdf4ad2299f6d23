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
    <a href="/settings/info" class="nav-link nav-link__active">Информация</a>
    <a href="/settings/contacts" class="nav-link">Контакты</a>
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
		<span style="font-weight: bold;font-size:19px">Информация</span>
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

$user_first_name = !empty($data['user_info']['first_name']) ? $data['user_info']['first_name'] : 'Имя не уазано';
$user_last_name = !empty($data['user_info']['last_name']) ? $data['user_info']['last_name'] : 'Фамилия не указана';
?>


   <div class="input_wrap">
   	<div class="input_wrap_title">Имя:</div>
		<input type="text" name="settings_first_name" class="text_field settings-text_field" placeholder="<?php echo $user_first_name;?>">
  	  </div>
      
   <div class="input_wrap">
    <div class="input_wrap_title">Фамилия:</div>
    <input type="text" name="settings_last_name" class="text_field settings-text_field" placeholder="<?php echo $user_last_name;?>">
      </div>
      

   <div class="input_wrap">
   	<div class="input_wrap_title">Пол:</div>
    
    <input type="radio" id="settings_sex_0"
     name="settings_sex" value="1" checked="">
    <label for="settings_sex_1">Не выбрано</label>

    
    <input type="radio" id="settings_sex_1"
     name="settings_sex" value="1">
    <label for="settings_sex_1">Мужской</label>

    <input type="radio" id="settings_sex_2"
     name="settings_sex" value="2">
    <label for="settings_sex_2">Женский</label>
  	  </div>

<style type="text/css">
.fff{width: 33.3333333333%!important;}
</style>
  <div class="input_wrap">
    <div class="input_wrap_title">Дата рождения:</div>



    <div>




































<style type="text/css"></style>



<?php
$user_viber = !empty($data['user_info']['viber']) ? $data['user_info']['viber'] : 'Viber не указан';
$user_phone = !empty($data['user_info']['phone']) ? $data['user_info']['phone'] : 'Телефон не указан';
$user_site = !empty($data['user_info']['site']) ? $data['user_info']['site'] : 'Сайт не указан';
?>


<table class="filters-wrap" id="filters-wrap">
	<tr>

  <td style="width: 21%">
		<input type="text" name="settings_day_birth" class="text_field settings-text_field" placeholder="День">
  </td>

  <td>
    <div class="filter-wrap">
      <select name="settings_month_birth" class=" text_field settings-text_field">
        <option value="volvo">Январь</option>
        <option value="volvo">Февраь</option>
        <option value="volvo">Март</option>
        <option value="volvo">Апрель</option>
        <option value="volvo">Май</option>
        <option value="volvo">Июнь</option>
        <option value="volvo">Июль</option>
        <option value="volvo">Август</option>
        <option value="volvo">Сентябрь</option>
        <option value="volvo">Октябрь</option>
        <option value="volvo">Ноябрь</option>
        <option value="volvo">Декабрь</option>
      </select>
    </div>
  </td>

  <td style="width:31%">
    <div class="filter-wrap">
		<input type="text" name="settings_year_birth" class="text_field settings-text_field" placeholder="Год">
    </div>
  </td>



</tr>
</table>
























    </div>



  </div>



<?php
$user_quote = !empty($data['user_info']['quote']) ? $data['user_info']['quote'] : 'Цитата не указана';
$user_whatsapp = !empty($data['user_info']['whatsapp']) ? $data['user_info']['whatsapp'] : 'Whatsapp не указан';
$user_telegram = !empty($data['user_info']['telegram']) ? $data['user_info']['telegram'] : 'Telegram не указан';
?>


   <div class="input_wrap">
   	<div class="input_wrap_title">Цитата:</div>
		<TEXTAREA name="settings_quote" class="text_field" style="height:54px;padding:7px 11px;width:100%" placeholder="<?php echo $user_quote;?>"></TEXTAREA>
  	  </div>

   <div class="input_wrap">
    <div class="input_wrap_title">Ваша страна:</div>
<div>
  <div class="filter-wrap">
     <select class="select" name="settings_country" onChange="show('user_city');" style="padding:0 7px;height: 31px;line-height:31px">

       <option value="0">Не указано</option>
       <?php

       //var_dump($v);
foreach($data['user_info']['country_name'] as $q) {


       ?>
       <option value="<?php echo $q['id'];?>"><?php echo $q['text'];?></option>

       <?php

     }

     ?>
     </select>
   </div>
</div>

      </div>
   <div class="input_wrap" id="user_city" style="display: none;">
    <div class="input_wrap_title">Ваш город:</div>
<div>
  <div class="filter-wrap">
     <input type="text" class="text_field settings-text_field" style="width:100%;" placeholder="Город не выбран">
   </div>
</div>

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