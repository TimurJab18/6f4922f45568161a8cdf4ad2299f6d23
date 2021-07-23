<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Login extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    if(User::isAuth()) {
      header('Location: /tasks');
    }
    $this->view = new View;
    $this->model = new Model_Login;
}

  public function action_index() {
    $data = array();
    $param = array();
    $param['css'] = 'login.css';
    $param['page_title'] = 'Вход | '.SITE_NAME;
    if(isset($_POST['login_submit'])) {
      $data['login_messages'] = $this->model->login($_POST['login_email'], $_POST['login_password']);
    }
    $this->view->generate('login_view.php', 'template_view.php', $param, $data, null);
  }


  public function action_ajax_get_login() {
    usleep(2000000);
    $html = '<div class="login-wrap" style="
    padding: 51px 0 63px;">
    <div class="login-title">Вход</div>
      <div class="input_wrap login-small__info">
        Ввведите Ваши данные в поле ниже
      </div>
      <div class="input_wrap">
    <input type="text" name="" class="text_field login-text_field" placeholder="Ваш email">
      </div>
      <div class="input_wrap">
    <input type="text" name="" class="text_field login-text_field" placeholder="Ваш пароль">
      </div>
      <div class="input_wrap">
    <input type="submit" name="" class="button" value="Войти">
      </div>
      <div class="restore-link__wrap">
        <a class="restore-link" href="/" onClick="hidePopupBox();getPopupBoxRestoreForm();event.preventDefault();">Забыли пароль?</a>
      </div>
      <div class="login-more__block">
        <div class="login-more__wrap">
          <span class="login-more__text">или</span>
        </div>
        <div class="login-line"></div>
      </div>
      <a href="/reg">
      <div class="input_wrap">
    <button type="submit" name="" class="button gray-button" onClick="hidePopupBox();getPopupBoxRegForm();event.preventDefault();">Регистрация</button>
      </div>
    </a>
  </div>';
    echo json_encode(array('is_error' => false, 'title' => 'Вход', 'content' => $html));
  }

}