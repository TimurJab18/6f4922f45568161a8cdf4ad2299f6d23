<?php
if(!defined('SECURITY_CONST')) {
  echo '<div style="text-align:center;margin-top:20%;font-family:Arial, sans-serif;"><div style="font-size:27px;margin-bottom:14px;">Unknown error</div><div style="font-size:17px;">Sorry for the inconvenience, we are working on an error</div></div>';
  exit;
}
class Model_Tasks extends Model {

  public $database = null;

  public function __construct() {
    $this->database = DataBase::connect();
  }

  private function getReviews($to_id) {

  $link = $this->database;


$sql2 = "SELECT `id`, `owner_id`, `to_id`, `text`, `ts_created`, `owner_ip`, `review_target_id`, `mark` FROM `reviews` WHERE `to_id` = :to_id";
  $is_email_exist2 = $link->prepare($sql2);
  $is_email_exist2->execute(array(':to_id' => $to_id));
  while($row1 = $is_email_exist2->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row1;
  }
 return  $arr;


}

  private function getReviewsCount($to_id) {

  $link = $this->database;


$sql2 = "SELECT COUNT(`id`) FROM `reviews` WHERE `to_id` = :to_id";
  $is_email_exist2 = $link->prepare($sql2);
  $is_email_exist2->execute(array(':to_id' => $to_id));
  $row1 = $is_email_exist2->fetch(PDO::FETCH_ASSOC);

 return  $row1['COUNT(`id`)'];

}


public function getCategoryName($category_id) {
  $link = $this->database;


$sql = "SELECT `id`, `category_id`, `name` FROM `categories_name` WHERE `category_id` = :category_id";
  $is_email_exist = $link->prepare($sql);
 $qq =  $is_email_exist->execute(array(':category_id' => $category_id));
 $w = $is_email_exist->fetch(PDO::FETCH_ASSOC);
  return $w['name'];


}



public function getItemName($category_id, $item_id) {
  $link = $this->database;


$sql = "SELECT `id`, `item_id`, `name`, `category_id` FROM `items_id` WHERE `item_id` = :item_id AND `category_id` = :category_id";
  $is_email_exist = $link->prepare($sql);
 $qq =  $is_email_exist->execute(array(':item_id' => $item_id,
                                       ':category_id' => $category_id));
 $w = $is_email_exist->fetch(PDO::FETCH_ASSOC);
  return $w['name'];


}
public function getCurrencyName($currency_id) {
  $link = $this->database;


$sql = "SELECT `id`, `currency_id`, `name` FROM `currency_name` WHERE `currency_id` = :currency_id";
  $is_email_exist = $link->prepare($sql);
 $qq =  $is_email_exist->execute(array(':currency_id' => 1));
 $w = $is_email_exist->fetch(PDO::FETCH_ASSOC);
  return $w['name'];


}


 public function getTasks() {
  $link = $this->database;

//if(empty($search_word)) return array();

$sql = "SELECT `id`, `owner_id`, `ts_created`, `to_id`, `title`, `text`, `views_counter`, `ts_start`, `ts_end`, `cost`, `currency`, `category_id`, `item_id` FROM `tasks` ORDER BY `id` DESC;";
  $is_email_exist = $link->prepare($sql);
  $is_email_exist->execute(array());




  $arr = array();

$date = new Date;


$user = new User;
  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {

    //SELECT `id`, `currency_is`, `name` FROM `currency_name` WHERE 1

    $row1['currency_name'] = $this->getCurrencyName($row1['currency']);

    $row1['category_name'] = $this->getCategoryName($row1['category_id']);
   // var_dump($row1['category_id']);
var_dump($row1['item_id']);
    $row1['item_name'] = $this->getItemName($row1['category_id'], $row1['item_id']);



    $row1['reviews_counter'] = $this->getReviewsCount($row1['id']);
    
    $row1['owner_info'] = $user->getInfo($row1['owner_id'], '`first_name`, `last_name`, `photo_small`');
    
    $row1['date_created'] = $date->parseTimestamp($row1['ts_created']);
    
    $row1['initials'] = $user->getInitials($row1['owner_id']);
    $arr[] = $row1;
  }
  return $arr;
}


//SELECT `id`, `owner_id`, `title`, `text`, `ts_created`, `ip_created` FROM `portfolio` WHERE 1



public function getPortfolio($owner_id) {
  $link = $this->database;

$sql = "SELECT `id`, `owner_id`, `title`, `text`, `ts_created`, `ip_created` FROM `portfolio` WHERE `id` = :owner_id LIMIT 0, 3";
  $is_email_exist = $link->prepare($sql);  
  $is_email_exist->execute(array(':owner_id' => 1));
  $arr = array();

$date = new Date;
  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
   // $row1['mark_0'] = 1;



$arr[] = $row1;


  }
return $arr; 
}



 public function getPerformers($search_word) {
  $qq = array();
  $link = $this->database;

//if(empty($search_word)) return array();




$sql = "SELECT `id`, `first_name`, `last_name`, `photo_small`, `ts_reg` FROM `users` WHERE `is_executor`='1' ORDER BY `id` DESC";
  $is_email_exist = $link->prepare($sql);  
  $is_email_exist->execute(array());
  $arr = array();
$date = new Date;
  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
    $row1['mark_0'] = 1;
    $row1['mark_1'] = 2;
    $row1['date_registered'] = $date->parseTimestamp($row1['ts_reg']);
    $row1['portfolio'] = $this->getPortfolio($row1['id']);
    $arr[] = $row1;
  }

  $qq['executors'] = $arr;
  return $qq;
}


  //  usleep(2000000);
  //  $html = $this->model->fs($_GET['catalog'], $_GET['category'], $_GET['currency'], $_GET['min_cost'], $_GET['max_cost']);
 public function fs($catalog=1, $category=1, $currency=1, $min_cost=1, $max_cost=7100) {
  $link = $this->database;

/*
echo '<br>';
var_dump($max_cost);*/
//if(empty($search_word)) return array();
//SELECT MIN(поле) FROM имя_таблицы WHERE условие

  //SELECT `id`, `owner_id`, `ts_created`, `to_id`, `title`, `text`, `views_counter`, `ts_start`, `ts_end`, `cost`, `currency`, `category_id`, `item_id` FROM `tasks` WHERE `cost` > '1' AND `cost` < '8800'
$sql = "SELECT `id`, `owner_id`, `ts_created`, `to_id`, `title`, `text`, `views_counter`, `ts_start`, `ts_end`, `cost`, `currency`, `category_id`, `item_id` FROM `tasks` WHERE `currency` = :currency AND `category_id` = :catalog AND `item_id` = :category AND `cost` < :max_cost AND `cost` > :min_cost ORDER BY `id` DESC";

  $is_email_exist = $link->prepare($sql);


  
  $is_email_exist->execute(array(':currency' => $currency,
                                 ':catalog' => $catalog,
                                 ':category' => $category,
                                 ':max_cost' => $max_cost,
                                 ':min_cost' => $min_cost));

  $arr = array();



$cl = array();
  while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
//var_dump($row1);
    $cl = '<div class="task-block">
    <div class="task-title"><a class="task-title__link" href="/tasks/get/">'.$row1['title'].'</a></div>
    <div class="task-info">
      <span class="cost">7000 рублей</span>
      <span> · </span>
      <span>2 часа назад</span>
      <span> · </span>
      <span>Дизайн / Разработка логотипа</span>
    </div>
    <div class="task-description" style="/*
    max-height: 83px;
    overflow: hidden;*/">
'.$row1['text'].'
    </div>
    <div class="task-answer">
      <button type="submit" name="" class="button button_task_reg button-blue">Откликнуться</button> 
      <a class="task-owner__info_link" href="/profile/get/?id=1">
        <div style="float:left;margin-top:-7px;"><div class="div-image__important" style="width:31px;height:31px;background-image: url("/images/download.jpg");border-radius: 27px"></div></div>
        <div style="float:left;margin-left:9px;">Иван Гордей</div>
      </a>
    </div>
  </div>';
    $arr[] = $cl;
  }
  return $arr;
}


 public function getFirstTask() {


  $link = $this->database;

//if(empty($search_word)) return array();


$sql = "SELECT `id`, `owner_id`, `ts_created`, `to_id`, `title`, `text`, `views_counter`, `ts_start`, `ts_end`, `cost`, `currency`, `category_id`, `item_id` FROM `tasks` WHERE `id` = :id ORDER BY `id` DESC;";

$r = array();

  $is_email_exist = $link->prepare($sql);

  
  $is_email_exist->execute(array(':id' => $_GET['id']));



  $arr = array();

$date = new Date;


$user = new User;
$row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC);
    //SELECT `id`, `currency_is`, `name` FROM `currency_name` WHERE 1

    $row1['initials'] = $user->getInitials($_GET['id']);

    $row1['currency_name'] = $this->getCurrencyName($row1['currency']);
    $row1['category_name'] = $this->getCategoryName($row1['category_id']);

    
    $row1['item_name'] = $this->getItemName($row1['category_id'], $row1['item_id']);


    $row1['reviews_counter'] = $this->getReviewsCount($row1['id']);

    $row1['reviews'] = $this->getReviews($row1['to_id']);
    
    $row1['owner_info'] = $user->getInfo($row1['owner_id'], '`first_name`, `last_name`, `photo_small`');
    
    $row1['date_created'] = $date->parseTimestamp($row1['ts_created']);
    

  return $row1;

}








}
?>
