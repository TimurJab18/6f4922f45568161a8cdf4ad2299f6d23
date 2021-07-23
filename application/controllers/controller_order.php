<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Order extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {
    $this->view = new View;
    $this->i18n = new i18n;
}

  public function action_index() {
    $data = array();
    $param = array();
  //  $param['css'] = 'index.css';
    $this->view->generate('reg_view.php', 'template_view.php', $param, $data, null);
  }

  public function action_get() {
    $data = array();
    $param = array();


    $i18n = $this->i18n->get(array('index_page_title', 'main_description', 'main_keywords', 'auth', 'form_description', 'your_email', 'your_password', 'form_send', 'reg'));

    

    $param = array(
      'css' => 'order.css',
      'page_title' => $i18n['index_page_title'],
      'page_description' => $i18n['main_description'],
      'page_keywords' => $i18n['main_keywords']
    );
  //  $param['css'] = 'index.css';
    $this->view->generate('order_view.php', 'template_view.php', $param, $data, null);
  }

}