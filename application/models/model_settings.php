<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Settings extends Model {

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
      //header('Location: /tasks');
    }
    
    $this->database = DataBase::connect();
    $this->i18n = new i18n;
    $this->crypto = new Crypto;
  }


public function getCountries() {
  $link = $this->database;


$sql = "SELECT `id`, `text` FROM `countries` WHERE 1";
  $is_email_exist = $link->prepare($sql);
 $qq =  $is_email_exist->execute(array());
 $arr = array();
 while($w = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
$arr[] = $w;
 }
  return $arr;


}



public function getCities() {
  $link = $this->database;


$sql = "SELECT `id`, `country_id`, `name` FROM `cities`";
  $is_email_exist = $link->prepare($sql);
 $qq =  $is_email_exist->execute(array());
 $arr = array();
 while($w = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
$arr[] = $w;
 }
  return $arr;


}





  public function getUserInfo() {

  $is_email_exist = $this->database->prepare("SELECT `id`, `first_name`, `last_name`, `email`, `phone`, `photo_small`, `photo_big`, `sex`, `ts_birth`, `ts_reg`, `quote`, `whatsapp`, `telegram`, `viber`, `instagram`, `site`, `country_id`, `city_id`, `end_ban_ts`, `salt`, `hashed_password`, `user_type`, `is_executor`, `is_customer`, `about_me` FROM `users` WHERE `id` = :id");
  $is_email_exist->execute(array(':id' => 1));

  $row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);
  $row1['country_name'] = $this->getCountries($row1['country_id']);
  $row1['cities_name'] = $this->getCities();



  return $row1;


  }







  public function recoveUser($user_id) {

  $is_email_exist = $this->database->prepare("DELETE FROM `black_list` WHERE `owner_id` = 1 AND `to_id` = 2");

  $is_email_exist->execute(array());
  return true;
  }





  public function getBanned() {
    $date = new Date;

  $is_email_exist = $this->database->prepare("SELECT `id`, `owner_id`, `to_id`, `ts_added` FROM `black_list` WHERE `owner_id`=:owner_id");

  $arr = array();
  $is_email_exist->execute(array(':owner_id' => 1));
  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
    $row1['date_banned'] = $date->parseTimestamp($row1['ts_added']);
    $arr[] = $row1;
  }
  return $arr;
  }





  public function getPortfolio() {
$date = new Date;
  $is_email_exist = $this->database->prepare("SELECT `id`, `owner_id`, `title`, `text`, `ts_created`, `ip_created` FROM `portfolio` WHERE `owner_id` = :id");
  $is_email_exist->execute(array(':id' => 1));
  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
    $row1['ts_created'] = $date->parseTimestamp($row1['ts_created']);
    $arr[]=$row1;
  }
  return $arr;

  }









  /**
   * @date 30 July 2018
   * @time 13:38
   * 
   */

public function _save($settings_first_name, $settings_last_name, $settings_email, $settings_sex, $settings_day_birth, $settings_month_birth, $settings_year_birth, $settings_quote, $settings_whatsapp, $settings_telegram, $settings_viber, $settings_site, $settings_country, $settings_city) {
  $settings_first_name_length = mb_strlen($settings_first_name);
  $settings_last_name_length = mb_strlen($settings_last_name);
  $settings_email_length = mb_strlen($settings_email);
 // $settings_sex;



  $settings_day_birth_length = mb_strlen($settings_day_birth);
  $settings_month_birth_length = mb_strlen($settings_month_birth);

  $settings_year_birth_length = mb_strlen($settings_year_birth);
  $settings_quote_length = mb_strlen($settings_quote);
  $settings_whatsapp_length = mb_strlen($settings_whatsapp);
  $settings_telegram_length = mb_strlen($settings_telegram);
  $settings_viber_length = mb_strlen($settings_viber);
  $settings_site_length = mb_strlen($settings_site);
  $settings_country_length = mb_strlen($settings_country);
  $settings_city_length = mb_strlen($settings_city);













$settings_update_sql = "UPDATE `users` SET `first_name`=:first_name,
                                           `last_name`=:last_name,
                                           `email`=:email,
                                           `phone`=:phone,
                                           `photo_small`=:photo_small,
                                           `photo_big`=:photo_big,
                                           `sex`=:sex,
                                           `ts_birth`=:ts_birth,
                                           `ts_reg`=:ts_reg,
                                           `quote`=:quote,
                                           `whatsapp`=:whatsapp,
                                           `telegram`=:telegram,
                                           `viber`=:viber,
                                           `instagram`=:instagram,
                                           `site`=:site,
                                           `country_id`=:country_id,
                                           `city_id`=:city_id,
                                           `end_ban_ts`=:end_ban_ts,
                                           `salt`=:salt,
                                           `hashed_password`=:hashed_password,
                                           `user_type`='user',
                                           `is_executor`=:is_executor,
                                           `is_customer`=:is_customer,
                                           `about_me`=:about_me WHERE `id` = '2'";



  $reg_user = $this->database->prepare($settings_update_sql);
  $reg_user->execute(array(':first_name'=>'test',
                           ':last_name'=>'test',
                           ':email'=>'test',
                           ':phone'=>'test',
                           ':photo_small'=>'test',
                           ':photo_big'=>'test',
                     ':sex'=>'test',
                     ':ts_birth'=>1,
                      ':ts_reg' => 1,
                                           ':quote' => 'test',
                                           ':whatsapp' => 'test',
                                           ':telegram' => 'test',
                                           ':viber' => 'test',
                                           ':instagram' => 'test',
                                           ':site' => 'test',
                                           ':country_id' => 'test',
                                           ':city_id' => 'test',
                                           ':end_ban_ts' => 'test',
                                           ':salt' => 'test',
                                          ':hashed_password' => 'test',
                                           ':is_executor' => 'test',
                                           ':is_customer' => 'test',
                                           ':about_me' => 'test'));







/*
  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_first_name_length < self::MIN_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>21, 'error_message'=>$this->i18n->get('short_firstname'), 'error_field'=>'firstname'));
  } else if($settings_first_name_length > self::MAX_FIRSTNAME) {
    return array('is_error'=>true, 'error'=>array('error_code'=>22, 'error_message'=>$this->i18n->get('long_firstname'), 'error_field'=>'firstname'));
  } else if(!preg_match('/^[а-яА-Яёa-zA-Z]*$/u', $settings_first_name)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>23, 'error_message'=>$this->i18n->get('incorrect_firstname'), 'error_field'=>'firstname'));
  }


  if($settings_email_length < self::MIN_EMAIL) {
    return array('is_error'=>true, 'error'=>array('error_code'=>27, 'error_message'=>$this->i18n->get('short_email'), 'error_field'=>'email'));
  } else if($settings_email_length > self::MAX_EMAIL) {
    return array('is_error'=>true, 'error'=>array('error_code'=>28, 'error_message'=>$this->i18n->get('long_email'), 'error_field'=>'email'));
  } else if(!filter_var($settings_email, FILTER_VALIDATE_EMAIL)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>29, 'error_message'=>$this->i18n->get('incorrect_email'), 'error_field'=>'email'));
  }



*/











/*
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





$settings_update_sql = "UPDATE `users` SET `id`=[value-1],`first_name`=[value-2],`last_name`=[value-3],`email`=[value-4],`phone`=[value-5],`photo_small`=[value-6],`photo_big`=[value-7],`sex`=[value-8],`ts_birth`=[value-9],`ts_reg`=[value-10],`quote`=[value-11],`whatsapp`=[value-12],`telegram`=[value-13],`viber`=[value-14],`instagram`=[value-15],`site`=[value-16],`country_id`=[value-17],`city_id`=[value-18],`end_ban_ts`=[value-19],`salt`=[value-20],`hashed_password`=[value-21],`user_type`=[value-22],`is_executor`=[value-23],`is_customer`=[value-24],`about_me`=[value-25] WHERE 1";/

/*
  $reg_user = $this->database->prepare($reg_sql);
  $reg_user->execute(array(':first_name' => $first_name,
                           ':last_name' => $last_name,
                           ':email' => $email,
                           ':ts' => time(),
                           ':salt' => $salt,
                           ':hashed_password' => $hashed_password));

  $_SESSION['user_type'] = 'user';
  $_SESSION['user_id'] = $this->database->lastInsertId();
  $_SESSION['user_first_name'] = $first_name;
  $_SESSION['user_last_name'] = $last_name;
  header('Location: /tasks');*/
}

  
}
?>
