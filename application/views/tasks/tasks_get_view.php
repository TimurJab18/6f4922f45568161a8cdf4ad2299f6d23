<div id="tasks">

<div class="tasks-wrap" style="padding:0!important">

<style type="text/css">
.task-block:hover  {background-color:#FFF!important}
</style>
<div class="tasks-block">
  <div class="task-block" style="padding-top: 11px">
<?php

/*

var_dump($data['tasks']['reviews']);
echo '<br>';
var_dump($data);
*/
?>



  	<div style="
    padding-bottom: 14px;">


<?php
var_dump($data);
$v = $data['tasks'];
?>
  <div class="task-block" style="border:0;margin:34px;">
    <div class="task-title" style="text-align: left;"><?php echo $v['title'];?></div>
    <div class="task-info">
      <span class="cost" style="float:right;"><?php echo $v['cost'];?>  <?php echo mb_strtolower($v['currency_name'], 'UTF-8');?></span>

      <?php
//var_dump($v);
      ?>

      <span><?php echo $v['date_created'];?></span>
      <span> · </span>
      <span><?php echo $v['category_name'];?> / <?php echo $v['item_name'];?></span>
    </div>






  </div>




<style type="text/css">
.owner-info__photo{background-image:url('/images/download.jpg');width:74px;height:74px;background-size:cover;background-position: center;border-radius:7px;}
.owner-info__photo_wrap{float:left;}
.owner-info__wrap{margin-left:84px;line-height:24px}
.owner-info__initials{font-weight:bold;}
</style>

<div class="owner-info">
  <div class="owner-info__photo_wrap">
  	<div class="owner-info__photo"></div>
  </div>
  <div class="owner-info__wrap" style="margin-left:92px;">
  	<div class="owner-info__initials"><a href="#" style="font-size:19px"><?php echo $v['initials'];?></a></div>
  	<div class="">



<div style="
    margin: 3px 0px;">
  



<div><span style="color:#808080;margin-right:7px">Отзывы: </span>
        <b>
            <img src="/images/icons/thumb-up4.png" style="position: relative;top: 3px;">

            <span style="color:green;"> 50  </span> 
</b>
<span style="padding:0 4px">  </span>
<b>
 <span style="color:red;">
    <img src="/images/icons/thumb-down4.png" style="position: relative;top: 3px;"> 50 
</span>
</b>
              </div>








</div>
<div class="performer-wrap__initials"><span style="color:#808080;margin-right:7px">Зарегестрирован:</span>5 лет назад</div>

  	</div>
  </div>
</div>
<div class="clear"></div>





  <div class="clear"></div>
  	<div class="task-description" style="margin-top:17px;">
<?php echo $v['text'];?>
  	</div>







  	<div class="">
  		
  	</div>

  </div><!-- end task block -->



  <div id="reviews-container" style="margin:0 27px;border-top:1px solid #DDD;padding-top:9px">
  	<div style="font-size:17px;font-weight:bold;margin:7px 0 14px">Отзывы (<?php echo $v['reviews_counter'];?>)</div>



<div style="margin-top:24px;border-bottom:1px solid #DDD;padding-bottom:17px;">
  <div style="margin-bottom: 5px"><TEXTAREA class="text_field" style="width:100%;height:54px;padding:5px 11px;background-color: #FEFEFE" placeholder="Оставить отзыв"></TEXTAREA></div>

  <style type="text/css">
.qwe{float:right;
    padding: 4px 7px 0px 7px;border:1px solid transparent;cursor: pointer;}
.qwe:hover{background-color:#FBFBFB;border:1px solid #DDD;}
  </style>

<input type="submit" name="" class="button" style="width: auto;">
<div class="qwe"><img src="/images/icons/attachment.png"></div>
<div class="qwe"><img src="/images/icons/camera.png"></div>



</div>


  	<?php
/*
var_dump($data['tasks']['reviews']);
*/


if(empty($data['tasks']['reviews'])) {

echo '<div style="
    text-align: center;
    margin: 57px 0 67px;">Не найдено ни отдного отзыва</div>';
} else {
//var_dump($data);
foreach($data as $v) {


//for($i=0;$i<7;$i++) {
  	?>




<div class="owner-info" style="padding:14px 0;">
  <div class="owner-info__photo_wrap">
  	<div class="owner-info__photo" style="border-radius:7px"></div>
  </div>
  <div class="owner-info__wrap" style="margin-left:95px;">
  	<div class="owner-info__initials"><a href="/profile" style="font-size:19px">


      <?php echo $v['initials'];?></a>
      <span class="cost" style="float:right;">340 рублей</span>
</div>
  	<div class="">



<div style="padding:4px 0 0px;font-size: 15px">


<div class="task-info" style="margin-bottom:5px">
      <span><?php echo $v['date_created'];?></span>
    </div>




<div style="padding-bottom:7px;">
<span>Отзывы:</span> <span style="padding-right: 5px"></span><b><img src="/images/icons/thumb-up4.png" style="
    position: relative;
    top: 3px;
"><span style="color:green;"> 50  </span> 
<span style="padding:0 7px"></span>
 <span style="color:red;"><img src="/images/icons/thumb-down4.png" style="
    position: relative;
    top: 3px;
"> 50 </span></b><span style="padding-left: 5px"></span>

</div>







<div style="margin:4px 0 14px;"><button class="button" style="width: auto">Посмотреть портфолио</button></div>




<div style="font-size:17px;line-height:29px"> 









<?php echo $v['text'];?>





</div>

<div>
	


</div>



</div>



  	</div>
  </div>
</div>

<div class="clear"></div>







  	<?php
}
}

  	?>

  </div>


</div>
</div>
</div>
</div>