<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Login extends Model {

  const MAX_ROWS = 20;

  const MIN_EMAIL = 4;
  const MAX_EMAIL = 74;

  const MIN_PASSWORD = 4;
  const MAX_PASSWORD = 54;

  public $database = null;

  public function __construct() {
    $this->database = DataBase::connect();
    $this->i18n = new i18n;
    $this->crypto = new Crypto;
  }

  /**
   * @date 30 July 2018
   * @time 13:38
   * 
   */

public function login($email, $password) {
  $email_length = mb_strlen($email);
  $password = htmlspecialchars($password);
  $password_length = mb_strlen($password);


  if($email_length < self::MIN_EMAIL) {
    return array('is_error'=>true, 'error'=>array('error_code'=>27, 'error_message'=>$this->i18n->get('short_email'), 'error_field'=>'email'));
  } else if($email_length > self::MAX_EMAIL) {
    return array('is_error'=>true, 'error'=>array('error_code'=>28, 'error_message'=>$this->i18n->get('long_email'), 'error_field'=>'email'));
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>29, 'error_message'=>$this->i18n->get('incorrect_email'), 'error_field'=>'email'));
  }

  if($password_length < self::MIN_PASSWORD) {
    return array('is_error'=>true, 'error'=>array('error_code'=>30, 'error_message'=>$this->i18n->get('short_password'), 'error_field'=>'password'));
  } else if($password_length > self::MAX_PASSWORD) {

    return array('is_error'=>true, 'error'=>array('error_code'=>31, 'error_message'=>$this->i18n->get('long_password'), 'error_field'=>'password'));
  }

  $is_email_exist = $this->database->prepare("SELECT `id`, `first_name`, `last_name`, `photo_small`, `photo_big`, `salt`, `hashed_password` FROM `users` WHERE `email` = :email");
  $is_email_exist->execute(array(':email' => $email));
  $row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);
  //var_dump($row1);


  if($this->crypto->checkPassword($row1['hashed_password'], $password, $row1['salt'])) {

  if( isset($row1['id']) && !empty($row1['id']) ) {
    $_SESSION['user_type'] = 'user';
    $_SESSION['user_id'] = $row1['id'];
    $_SESSION['user_first_name'] = $row1['last_name'];
    $_SESSION['user_last_name'] = $row1['first_name'];
    $_SESSION['user_small_photo'] = $row1['photo_small'];
    $_SESSION['user_big_photo'] = $row1['photo_big'];
      header('Location: /tasks');
  } 

  } else {

  return array('is_error'=>true, 'error'=>array('error_code'=>31, 'error_message'=>$this->i18n->get('incorrect_login_or_password'),'error_field'=>'email'));



  }

}

  
}
?>