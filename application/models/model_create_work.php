<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Create_Work extends Model {

  const MAX_ROWS = 20;

  const MIN_FIRSTNAME = 3;
  const MAX_FIRSTNAME = 74;

  const MIN_EMAIL = 4;
  const MAX_EMAIL = 74;

  const MIN_PASSWORD = 4;
  const MAX_PASSWORD = 54;

  public $database = null;
  public $i18n = null;
  public $crypto = null;

  public function __construct() {

   if(User::isAuth()) {
    //  header('Location: /tasks');
    }
    
    $this->database = DataBase::connect();
    $this->i18n = new i18n;
    $this->crypto = new Crypto;
  }

  /**
   * @date 30 July 2018
   * @time 13:38
   * 
   */

public function createWork($task_title, $task_description, $task_budget, $task_currency, $task_catalog, $task_category, $task_captcha) {

  $task_title_length = mb_strlen($task_title);
  $task_description_length = mb_strlen($task_description);
  $task_budget_length = mb_strlen($task_budget);
  $task_catalog_length = mb_strlen($task_catalog);
  $task_category_length = mb_strlen($task_category);
  $task_captcha_length = mb_strlen($task_captcha);


  if($task_title_length < 7) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_task_title'), 'error_field'=>'firstname'));
  } else if($task_title_length > 255) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  }


  if($task_description_length < 7) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_task_description'), 'error_field'=>'firstname'));
  } else if($task_description_length > 255) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  }




  if($task_budget_length < 2) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_task_budget'), 'error_field'=>'firstname'));
  } else if($task_budget_length > 9) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } /*else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $task_budget)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }
*/


  switch ($task_currency) {
    case 1:
      $task_currency = 1;
      break;
    case 2:
      $task_currency = 2;
      break;
    case 3:
      $task_currency = 3;
      break;
    case 4:
      $task_currency = 4;
      break;
    case 5:
      $task_currency = 5;
    
    default:
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_currency'), 'error_field'=>'firstname'));
      break;
  }







  switch ($task_catalog) {
    case 1:
      $task_catalog = 1;
      break;
    case 2:
      $task_catalog = 2;
      break;
    case 3:
      $task_catalog = 3;
      break;
    case 4:
      $task_catalog = 4;
      break;
    case 5:
      $task_catalog = 5;
      break;
    case 6:
      $task_catalog = 6;
      break;
    case 7:
      $task_catalog = 7;
      break;
    case 8:
      $task_catalog = 8;
      break;
    case 9:
      $task_catalog = 9;
      break;
    case 10:
      $task_catalog = 10;
      break;
    
    default:
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_catalog'), 'error_field'=>'firstname'));
      break;
  }


$reg_sql = "INSERT INTO `tasks`(`id`, `owner_id`, `ts_created`, `to_id`, `title`, `text`, `views_counter`, `ts_start`, `ts_end`, `cost`, `currency`, `category_id`, `item_id`) VALUES
                               ('', :owner_id, :ts_created, :to_id, :title, :_text, '0', :ts_start, :ts_end, :cost, :currency, :category_id, :item_id)";


  $reg_user = $this->database->prepare($reg_sql);
  var_dump($_SESSION['user_id']);

  $_SESSION['user_id'] = 17;
  $reg_user->execute(array(':owner_id' => $_SESSION['user_id'],
                           ':ts_created' => time(),
                           ':to_id' => '',
                           ':title' => $task_title,
                           ':_text' => $task_description,
                           ':ts_start' => '',
                           ':ts_end' => '',
                           ':cost' => $task_budget,
                           ':currency' => $task_currency,
                           ':category_id' => $task_catalog,
                           ':item_id' => $task_category));




    return array('is_error'=>false, 'message'=>$this->i18n->get('create_work_success'));




/*
  $_SESSION['user_type'] = 'user';
  $_SESSION['user_id'] = $this->database->lastInsertId();
  $_SESSION['user_first_name'] = $first_name;
  $_SESSION['user_last_name'] = $last_name;
  header('Location: /tasks');*/
}

  
}
?>
