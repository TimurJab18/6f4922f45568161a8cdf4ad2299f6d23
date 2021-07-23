<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Restore extends Model {

  const MIN_EMAIL = 4;
  const MAX_EMAIL = 74;

  public $database = null;
  public $i18n = null;
  public $crypto = null;
  public $mail = null;

public function __construct() {
   if(User::isAuth()) {
     // header('Location: /tasks');
    }
    
    $this->database = DataBase::connect();
    $this->i18n = new i18n;

    $this->crypto = new Crypto;

    $this->mail = new Mail;
}



public function setNewPassword($new_password, $hash) {








  $is_email_exist = $this->database->prepare("SELECT `id` FROM `users` WHERE `email` = :email");
  $is_email_exist->execute(array(':email' => $email));
  $row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);
























$crypto = new Crypto;

  $password_hashing = $crypto->passwordHashing($new_password);
  $hashed_password = $password_hashing['hashed_password'];  
  $salt = $password_hashing['salt'];
  $timestamp_registered = time();


  $reg_user = $this->database->prepare("UPDATE `users` SET `salt`=:salt,
                                                           `hashed_password`=:hashed_password WHERE `email` = :email");
  $reg_user->execute(array(':salt' => $salt,
                           ':hashed_password' => $hashed_password,
                           ':email' => 'ivan@mail.ru'));
  $_SESSION['user_id'] = $this->database->lastInsertId();

}
  

  /**
   * @date 30 July 2018
   * @time 13:38
   * 
   */

public function restore($email) {
  $hash = hash('sha256', time().rand().'TheNewPassword');

  $msg = '<div style="text-align: center;line-height:39px;">
<div>
<img id="bxid_862078" src="https://sun9-17.userapi.com/impg/EAmO_OfmCAWB5BaL4AF0m-m6Ib5ZnmKsNMjsvg/dZFK83faCAg.jpg?size=77x24&quality=96&sign=e9ff0fd9073c946ada42c09fa70bad90&type=album" title="www.digitalwind.ru"  />

</div>
<div style="margin-top:14px;"><b style="font-size:21px;">Восстановление пароля</b></div>
<div>Здравствуйте, Вы указали Восстановления пароля.</div>

<div>Чтобы сбросить пароль, перейдите по ссылке:</div>

<div><a href="http://local.steve-jobs.io/restore/run/?hash='.$hash.'" style="text-decoration: none;border-bottom:1px dashed blue;">Восстановить пароль</a></div>


</div>';
  $email_length = mb_strlen($email);

  if($email_length < self::MIN_EMAIL) {
    return array('is_error'=>true, 'error'=>array('error_code'=>27, 'error_message'=>$this->i18n->get('short_email'), 'error_field'=>'email'));
  } else if($email_length > self::MAX_EMAIL) {
    return array('is_error'=>true, 'error'=>array('error_code'=>28, 'error_message'=>$this->i18n->get('long_email'), 'error_field'=>'email'));
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return array('is_error'=>true, 'error'=>array('error_code'=>29, 'error_message'=>$this->i18n->get('incorrect_email'), 'error_field'=>'email'));
  }

  $is_email_exist = $this->database->prepare("SELECT `id`, `ts_created`, `email`, `owner_id`, `owner_ip`, `ending_time` FROM `restore` WHERE  `email` = :email");
  $is_email_exist->execute(array(':email' => $email));
  $row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);

//var_dump($row1);

  if(isset($row1['id']) || !empty($row1['id'])) {
    if(time() > $row1['ending_time']) {
var_dump('test');


$this->mail->setEmail('timka_issaev@mail.ru');
$this->mail->setFromName('Иван Иванов');

  $is_email_exist = $this->database->prepare("UPDATE `restore` SET `ts_created` = :ts_created,`ending_time`=:ending_time, `hash`=:hash WHERE `email`=:email");
  $is_email_exist->execute(array(':ts_created' => time(),
                                ':ending_time' => time() + 10800000,
                                ':hash' => $hash,
                                ':email' => $email));



$this->mail->setEmail('timka_issaev@mail.ru');
$this->mail->setFromName('Иван Иванов');

        if ($this->mail->send("timka_issaev@mail.ru", 'Восстановление пароля' , $msg )) echo "Письмо отправлено";
      else echo "Письмо не отправлено";
        

    } else {

  $is_email_exist = $this->database->prepare("UPDATE `restore` SET `ts_created` = :ts_created,`ending_time`=:ending_time, `hash` = :hash WHERE `email`=:email");
  $is_email_exist->execute(array(':ts_created' => time(),
                                ':ending_time' => time() + 10800000,
                                ':hash' => $hash,
                                ':email' => $email));



$this->mail->setEmail('timka_issaev@mail.ru');
$this->mail->setFromName('Иван Иванов');

        if ($this->mail->send("timka_issaev@mail.ru", 'Восстановление пароля', $msg )) echo "Письмо отправлено";
      else echo "Письмо не отправлено";

        




    //return array('is_error'=>true,'error'=>array('error_code'=>32, 'error_message'=>$this->i18n->get('email_exist'), 'error_field'=>'email'));
    

}

  } else {
    $sq1="INSERT INTO `restore`(`id`, `ts_created`, `email`, `owner_id`, `owner_ip`, `ending_time`, `hash`) VALUES 
                               ('',:ts_created,:email,:owner_id,:owner_ip, :ending_time, :hash)";


  $restore_user = $this->database->prepare($sq1);
  $restore_user->execute(array(':ts_created' => time(),
                           ':email' => $email,
                           ':owner_id' => '1',
                           ':owner_ip' => $_SERVER['REMOTE_ADDR'],
                           ':ending_time' => time() + 10800000,
                           ':hash' => $hash));



$this->mail->setEmail('timka_issaev@mail.ru');
$this->mail->setFromName('Иван Иванов');

        if ($this->mail->send("timka_issaev@mail.ru", 'Восстановление пароля' , $msg )) echo "Письмо отправлено";
      else echo "Письмо не отправлено";
        

  }
}

  
}
?>
