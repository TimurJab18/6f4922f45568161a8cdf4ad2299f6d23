<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Profile extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    $this->view = new View;
    $this->model = new Model_Profile;
}

  public function action_index() {
    if(User::isAuth()) {
      header('Location: /profile/get/?id='.$_SESSION['user_id']);
    } else {
      header('Location: /login');
    }
  }

  public function action_get() {
    $data = array();
    $param = array();
    $data['tasks'] = $this->model->getInfo();

  //  $param['css'] = 'index.css';
    $this->view->generate('profile_view.php', 'template_view.php', $param, $data, null);
  }


  public function action_portfolio() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';
    $this->view->generate('profile_portfolio_view.php', 'template_view.php', $param, $data, null);
  }


  public function action_reviews() {
    $data = array();
    $param = array();
    $data['tasks'] = $this->model->getInfo(0, 0);

  //  $param['css'] = 'index.css';
    $this->view->generate('profile_reviews_view.php', 'template_view.php', $param, $data, null);
  }

}