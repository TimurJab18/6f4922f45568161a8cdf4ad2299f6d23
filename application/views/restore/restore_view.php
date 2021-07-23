<div>
<div style="max-width:230px;margin:0 auto;padding:145px 0 145px;">

<div style="margin-bottom:7px;text-align:center;font-size:27px;margin-bottom:21px;">Восстановление пароля</div>
	

	<div>
		



<?php
  if(isset($data['restore_messages'])) {
?>
<div class="form-message">
  <div class="form-message__title"><?php echo $data['restore_messages']['error']['error_message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['restore_messages']['error']['error_message']['description'];?></div>
</div>
<?php
} else echo '<div class="input_wrap restore-small__info">Ввведите Ваши данные в поле ниже</div>';
?>



<FORM action="" method="POST">

<div style="margin:4px 0 17px;">
<div><input type="text" name="restore_email" style="width:100%;" class="text_field" placeholder="Ваш email" autofocus=""></div>
</div>



<div style="margin:4px 0 17px;">
<div><input type="submit" name="restore_submit" class="button" style="width:100%;" value="Восстановить пароль"></div>
</div>





</FORM>






	</div>


</div>
</div>