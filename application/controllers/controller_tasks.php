<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Controller_Tasks extends Controller {
  
  public $i18n = null;
  public $view = null;
  public $model = null;

  public function __construct() {

    $this->i18n = new i18n;
    $this->view = new View;
   // $this->model = new Model_Main;
    $this->model = new Model_Tasks;
  }

  public function action_index() {
    $data = array();

    $i18n = $this->i18n->get(array('index_page_title', 'main_description', 'main_keywords', 'auth', 'form_description', 'your_email', 'your_password', 'form_send', 'reg'));

    $param = array(
      'css' => 'tasks.css',
      'js' => 'tasks.js',
      'page_title' => $i18n['index_page_title'],
      'page_description' => $i18n['main_description'],
      'page_keywords' => $i18n['main_keywords']
    );

      $data['tasks'] = $this->model->getTasks();

    $this->view->generate('tasks_view.php', 'template_view.php', $param, $data, $i18n);
  }

  public function action_get() {
    $data = array();

    $i18n = $this->i18n->get(array('index_page_title', 'main_description', 'main_keywords', 'auth', 'form_description', 'your_email', 'your_password', 'form_send', 'reg'));

    $param = array(
      'css' => 'tasks.css',
      'js' => 'tasks.js',
      'page_title' => $i18n['index_page_title'],
      'page_description' => $i18n['main_description'],
      'page_keywords' => $i18n['main_keywords']
    );

      $data['tasks'] = $this->model->getFirstTask();
    $this->view->generate('tasks_get_view.php', 'template_view.php', $param, $data, $i18n);
  }




  public function action_performers() {
    $data = array();



    $i18n = $this->i18n->get(array('index_page_title', 'main_description', 'main_keywords', 'auth', 'form_description', 'your_email', 'your_password', 'form_send', 'reg'));

    
      $data['performers'] = $this->model->getPerformers(0, 0);


    $param = array(
      'css' => 'orders.css',
      'page_title' => $i18n['index_page_title'],
      'page_description' => $i18n['main_description'],
      'page_keywords' => $i18n['main_keywords']
    );
  //  $data['wall_items'] = $this->model->getItems();
    $this->view->generate('performers_view.php', 'template_view.php', $param, $data, $i18n);
  }

  public function action_work() {
    $data = array();



    $i18n = $this->i18n->get(array('index_page_title', 'main_description', 'main_keywords', 'auth', 'form_description', 'your_email', 'your_password', 'form_send', 'reg'));

    

    $param = array(
      'css' => 'work.css',
      'page_title' => $i18n['index_page_title'],
      'page_description' => $i18n['main_description'],
      'page_keywords' => $i18n['main_keywords']
    );
  //  $data['wall_items'] = $this->model->getItems();
    $this->view->generate('work_view.php', 'template_view.php', $param, $data, $i18n);
  }








  public function action_ajax_get_response_to_task_form() {
    usleep(2000000);
    $html = '
<div class="login-wrap">
    <div class="login-title">Откик на задание</div>
      <div class="input_wrap login-small__info" style="text-align:center">Ввведите данные в поле ниже</div>
      <div class="input_wrap">
    <textarea autofocus="" name="" class="text_field login-text_field" placeholder="Текст отклика"></textarea>
      </div>


      <div class="input_wrap">
  <div class="filter-wrap" id="d">

<input type="file" name="" onchange="sd()">
</div>
</div>



      <div class="input_wrap">
    <input type="submit" name="" class="button" value="Отправить">
      </div>
  </div>';
    echo json_encode(array('is_error' => false, 'title' => 'Отклик', 'content' => $html));
  }




  public function action_abbccc() {

    usleep(2000000);
$min_cost = $_GET['min_cost'];
    if(empty($min_cost) || $min_cost == '') {
      $min_cost = 0;
    }
$max_cost = $_GET['max_cost'];
    if(empty($max_cost) || $max_cost == '') {
      $max_cost = 90000;
    }
    $html = $this->model->fs($_GET['catalog'], $_GET['category'], $_GET['currency'], $min_cost, $max_cost);
    echo json_encode(array('is_error' => false, 'title' => 'Вход', 'content' => $html));
  }
}//performersfs($min_cost, $max_cost)