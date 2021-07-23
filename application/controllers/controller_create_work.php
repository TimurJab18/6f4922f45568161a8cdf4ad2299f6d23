<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Create_Work extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    if(!User::isAuth()) {
     // header('Location: /login');
    }
    $this->view = new View;
    $this->i18n = new i18n;
    $this->model = new Model_Create_Work;
}

  public function action_index() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';'order

   // task_submit
    if(isset($_POST['task_submit'])) {
      $data['create_work_messages'] = $this->model->createWork($_POST['task_title'], $_POST['task_description'], $_POST['task_budget'], $_POST['task_currency'], $_POST['task_catalog'], $_POST['task_category'], '');
    }
    $param['css']='orders.css';
    $this->view->generate('create_work_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_select_category() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';'order
    $param['css']='orders.css';
    $this->view->generate('select_category_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_choosen() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';'order
    $param['css']='orders.css';
    $this->view->generate('/create_work_view.php', 'template_view.php', $param, $data, null);
  }





}