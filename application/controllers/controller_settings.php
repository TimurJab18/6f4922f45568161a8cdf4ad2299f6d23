<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Settings extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    if(!User::isAuth()) {
     // header('Location: /login');
    }
    $this->view = new View;
    $this->i18n = new i18n;
    $this->model = new Model_Settings;
}

  public function action_index() {
    $data = array();
    $param = array();
    $this->view->generate('settings_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_info() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';
    if(isset($_POST['settings_submit'])) {
      $data['settings_messages'] = $this->model->_save($_POST['settings_first_name'], $_POST['settings_last_name'], $_POST['settings_email'], $_POST['settings_sex'], $_POST['settings_day_birth'], $_POST['settings_month_birth'], $_POST['settings_year_birth'], $_POST['settings_quote'], $_POST['settings_whatsapp'], $_POST['settings_telegram'], $_POST['settings_viber'], $_POST['settings_site'], $_POST['settings_country'], $_POST['settings_city']);
    }

    $data['user_info'] = $this->model->getUserInfo();
    $this->view->generate('settings_info_view.php', 'template_view.php', $param, $data, null);
  }


function action_recove_user() {


    $html = $this->model->recoveUser($_GET['user_id']);
    echo json_encode(array('is_error' => false, 'title' => 'Вход', 'content' => $html));





}











  public function action_contacts() {
    $data = array();
    $param = array();
    $data['banned'] = $this->model->getBanned();
  //  $param['css'] = 'index.css';
    $this->view->generate('settings_contacts_view.php', 'template_view.php', $param, $data, null);
  }



  public function action_change_password() {
    $data = array();
    $param = array();
    $data['banned'] = $this->model->getBanned();
  //  $param['css'] = 'index.css';
    $this->view->generate('settings_change_password_view.php', 'template_view.php', $param, $data, null);
  }






  public function action_black_list() {
    $data = array();
    $param = array();
    $data['banned'] = $this->model->getBanned();
  //  $param['css'] = 'index.css';
    $this->view->generate('settings_black_list_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_portfolio() {
    $data = array();
    $param = array();

    $data['portfolio'] = $this->model->getPortfolio();
  //  $param['css'] = 'index.css';
    $this->view->generate('settings_portfolio_view.php', 'template_view.php', $param, $data, null);
  }

}