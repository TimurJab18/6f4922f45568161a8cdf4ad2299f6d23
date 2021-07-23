<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Restore extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    if(User::isAuth()) {
    //  header('Location: /tasks');
    }
    $this->view = new View;
    $this->model = new Model_Restore;
}

  public function action_index() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';
    if(isset($_POST['restore_submit'])) {
      $data['restore_messages'] = $this->model->restore($_POST['restore_email']);
    }
    $this->view->generate('restore_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_run() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';
    if(isset($_POST['restore_submit'])) {
      $data['restore_messages'] = $this->model->setNewPassword($_POST['restore_new_password']);
    }
    $this->view->generate('restore_new_password_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_ajax_get_restore_form() {
    usleep(2000000);
    $html = '<div class="login-wrap" style="
    padding: 51px 0 63px;">
    <div class="login-title">Восстановлоение пароля</div>
      <div class="input_wrap login-small__info">
        Ввведите Ваши данные в поле ниже
      </div>
      <div class="input_wrap">
    <input type="text" name="" class="text_field login-text_field" placeholder="Ваш email">
      </div>
      <div class="input_wrap">
    <input type="submit" name="" class="button" value="Войти">
      </div>
      <div class="login-more__block">
        <div class="login-more__wrap">
          <span class="login-more__text">или</span>
        </div>
        <div class="login-line"></div>
      </div>
      <a href="/restore">
      <div class="input_wrap">
    <button type="submit" name="" class="button gray-button" onClick="hidePopupBox();getPopupBoxLoginForm();event.preventDefault();">Вход</button>
      </div>
    </a>
  </div>';
    echo json_encode(array('is_error' => false, 'title' => 'Восстановлоение пароля', 'content' => $html));
  }
}