<div id="login">
  <div class="login-wrap">
  	<div class="login-title">Вход</div>




<?php


  if(isset($data['login_messages'])) {
?>
<div class="form-message">
  <div class="form-message__title"><?php echo $data['login_messages']['error']['error_message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['login_messages']['error']['error_message']['description'];?></div>
</div>
<?php
} else echo '<div class="input_wrap login-small__info"">Ввведите Ваши данные в поле ниже</div>';
?>
<FORM action="" method="POST">
      <div class="input_wrap">
    <input type="text" name="login_email" class="text_field login-text_field" placeholder="Ваш email">
      </div>
      <div class="input_wrap">
    <input type="text" name="login_password" class="text_field login-text_field" placeholder="Ваш пароль">
      </div>
      <div class="input_wrap">
    <input type="submit" name="login_submit" class="button" value="Войти" class="button">
      </div>
</FORM>


  	  <div class="restore-link__wrap" style="margin-top:14px;">
  	  	<a class="restore-link" href="/">Забыли пароль?</a>
  	  </div>
  	  <div class="login-more__block">
  	    <div class="login-more__wrap">
  	      <span class="login-more__text">или</span>
  	    </div>
  	    <div class="login-line"></div>
  	  </div>
      <a href="/reg">
  	  <div class="input_wrap">
		<button type="submit" name="" class="button gray-button" class="button">Регистрация</button>
  	  </div>
    </a>
  </div>
</div>
<script type="text/javascript">
setTimeout(function() {
  addClass('head-login', 'head-link__active');
}, 100);
</script>