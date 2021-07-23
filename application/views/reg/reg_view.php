<div id="reg">
  <div class="reg-wrap">
  	<div class="reg-title">Регистрация</div>







<?php
  if(isset($data['reg_messages'])) {
?>
<div class="form-message">
  <div class="form-message__title"><?php echo $data['reg_messages']['error']['error_message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['reg_messages']['error']['error_message']['description'];?></div>
</div>
<?php
} else echo '<div class="input_wrap reg-small__info">Ввведите Ваши данные в поле ниже</div>';
?>


<FORM action="" method="POST">
  

      <div class="input_wrap">
    <input type="text" name="reg_first_name" class="text_field reg-text_field" placeholder="Ваше имя">
      </div>
      <div class="input_wrap">
    <input type="text" name="reg_last_name" class="text_field reg-text_field" placeholder="Ваша фамилия">
      </div>
      <div class="input_wrap">
    <input type="text" name="reg_email" class="text_field reg-text_field" placeholder="Ваш email">
      </div>
      <div class="input_wrap">
    <input type="text" name="reg_password" class="text_field reg-text_field" placeholder="Ваш пароль">
      </div>
      <div class="input_wrap">
    <input type="submit" name="reg_submit" class="button" value="Зарегистрироваться" class="button">
      </div>






</FORM>




  	  <div class="reg-more__block">
  	    <div class="reg-more__wrap">
  	      <span class="reg-more__text">или</span>
  	    </div>
  	    <div class="reg-line"></div>
  	  </div>
      <a href="/reg">
  	  <div class="input_wrap">
		<button type="submit" name="" class="button gray-button" class="button">Вход</button>
  	  </div>
    </a>
  </div>
</div>





</div>
<script type="text/javascript">
setTimeout(function() {
  addClass('head-reg', 'head-link__active');
}, 100);
</script>
