<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Profile extends Model {

  public $database = null;
  public $user = null;

  public function __construct() {
    $this->database = DataBase::connect();
    $this->user = new User;
  }
 public function getInfo() {
  $link = $this->database;


$sql = "SELECT `id`, `about_me` FROM `users` WHERE 1";

  $is_email_exist = $link->prepare($sql);


  
  $row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);
  $row1['owner_initials'] = $this->user->getInitials($row1['id']);
  return $row1;
}

 public function getPerformers($search_word) {
  $link = $this->database;

//if(empty($search_word)) return array();

$sql = "SELECT `id`, `first_name`, `last_name`, `photo_small`, `ts_reg` FROM `users` WHERE `is_executor`='1'";

  $is_email_exist = $link->prepare($sql);


  
  $is_email_exist->execute(array());

  $arr = array();




  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row1;
  }
  return $arr;
}



  /**
   * @date 30 July 2018
   * @time 13:38
   * 
   */
/*
public function reg($firstname, $lastname, $email, $password) {
  $firstname_length = mb_strlen($firstname);
  $lastname_length = mb_strlen($lastname);
  $email_length = mb_strlen($email);
  $password_length = mb_strlen($password);

  $password = htmlspecialchars($password);

  if($firstname_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($firstname_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $firstname)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }

  if($lastname_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_lastname'), 'error_field'=>'firstname'));
  } else if($lastname_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_lastname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $lastname)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_lastname'), 'error_field'=>'firstname'));
  }

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

  $is_email_exist = $this->database->prepare("SELECT `id` FROM `users` WHERE `email` = :email");
  $is_email_exist->execute(array(':email' => $email));
  $row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);

  if(isset($row1['id']) || !empty($row1['id'])) {
    return array('is_error'=>true,'error'=>array('error_code'=>32, 'error_message'=>$this->i18n->get('email_exist'), 'error_field'=>'email'));
  } 

  $password_hashing = $this->crypto->passwordHashing($password);
  $hashed_password = $password_hashing['hashed_password'];  
  $salt = $password_hashing['salt'];
  $timestamp_registered = time();

  $reg_user = $this->database->prepare("

INSERT INTO `users`(`id`, 
                    `last_name`,
                    `first_name`,
                    `email`,
                    `phone`,
                    `hashed_password`,
                    `salt`,
                    `ts_registered`,
                    `ts_to_ban`,
                    `small_photo`,
                    `big_photo`,
                    `status`,
                    `sex`,
                    `user_type`) VALUES (
                    '',
                    :last_name,
                    :first_name,
                    :email,
                    '',
                    :hashed_password,
                    :salt,
                    :ts_registered,
                    '',
                    '',
                    '',
                    '',
                    '',
                    'user')

    ");
  $reg_user->execute(array(':last_name' => $firstname,
                           ':first_name' => $lastname,
                           ':email' => $email,
                           ':hashed_password' => $hashed_password,
                           ':salt' => $salt,
                           ':ts_registered' => time()));
  
  $_SESSION['user_id'] = $this->database->lastInsertId();

}
*/
  
}
?>
