<div>
<div style="max-width:230px;margin:0 auto;padding:145px 0 145px;">

<div style="margin-bottom:7px;text-align:center;font-size:27px;margin-bottom:21px;">Изменение пароля</div>
	

	<div>
		



<?php
  if(isset($data['restore_messages'])) {
?>
<div class="form-message">
  <div class="form-message__title"><?php echo $data['restore_messages']['error']['error_message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['restore_messages']['error']['error_message']['description'];?></div>
</div>
<?php
} else echo '<div class="input_wrap restore-small__info">Пожалуйста, введите новый пароль в поле ниже</div>';
?>



<FORM action="" method="POST">

<div style="margin:4px 0 17px;">
	<?php

var_dump($data);
	?>
<div><input type="text" id="lolko" name="restore_new_password" style="width:100%;" class="text_field" placeholder="Новый пароль" autofocus=""></div><?php $w = substr(sha1(time()), 0, 7);?>
<div style="
    margin-top: 7px;
    color: #808080;
    font-size: 13px;cursor: pointer;" onClick="ge('lolko').value='<?php echo $w;?>'">Например, <b><?php echo $w;?></b></div>
</div>



<div style="margin:4px 0 17px;">
<div><input type="submit" name="restore_submit" class="button" style="width:100%;" value="Сохранить"></div>
</div>





</FORM>






	</div>


</div>
</div>