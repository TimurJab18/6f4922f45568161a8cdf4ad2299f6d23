<div id="settings">

<div class="settings-wrap" style="padding:14px 0;">


  <div class="nav">
    <a href="/settings/info" class="nav-link">Информация</a>
    <a href="/settings/contacts" class="nav-link">Контакты</a>
    <a href="/settings/change_password" class="nav-link">Сменить пароль</a>
    <a href="/settings/portfolio" class="nav-link">Портфолио</a>
    <a href="/settings/black_list" class="nav-link nav-link__active">Черный список</a>
  </div>

<div class="clear"></div>
 <div class="settings-info__container" style="margin:7px 0 0 ;">








<?php

var_dump($data);
?>





<style type="text/css">
.owner-info__photo{background-image:url('/images/download.jpg');width:74px;height:74px;background-size:cover;background-position: center;}
.owner-info__photo_wrap{float:left;}
.owner-info__wrap{margin-left:84px;line-height:24px}
.owner-info__initials{font-weight:bold;}




</style>
<style type="text/css">

.owner-info__photo {
    background-image: url(/images/download.jpg);
    width: 74px;
    height: 74px;
    background-size: cover;
    background-position: center;
}
</style>


<?php


if(empty($data['banned'])) {

  echo '<div style="padding:44px 0 54px;text-align:center;">Заблокированные пользователи не найдены</div>';
}



foreach($data['banned'] as $v) {
?>
<div class="owner-info" style="padding:11px 0;">
  <div class="owner-info__photo_wrap">
    <div class="owner-info__photo" style="border-radius:5px;"></div>
  </div>
  <div class="owner-info__wrap" style="margin-left:92px;">
    <div class="owner-info__initials"><a href="/profile" style="font-size:19px">Билл Гейтс</a></div>
    <div class="">



<div style="padding:4px 0;font-size: 15px">



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




</div>


<script type="text/javascript">
function recoverUser() {


  ajax.get({

  url: '/settings/recove_user/?user_id='+'1',

  success: function(q) {
    console.log(q);
  }

  });
}





function q() {
  console.log('lol');


/*
var __cur = {catalog_hidden_id: 1};
function test() {

  console.log(catalog.selectedIndex);

*/



  ajax.get({



    url: '/tasks/abbccc/?catalog='+ge('catalog').selectedIndex+'&category='+__cur.catalog_hidden_id+'&currency='+ge('currency').value+'&min_cost='+ge('task_min_cost').value+'&max_cost='+ge('task_max_cost').value,
    showProgress: function() {
show('readonly');
    },
    hideProgress: function() {
hide('readonly');
    },
    success: function(q) {



  console.log('w: ');
  console.log(catalog.selectedIndex);
  console.log('w: ');

ge('category_1').selectedIndex;








      console.log(q);
     // alert(q);
     console.log('p: '+q.content);
     if(q.content.length<1) {

 ge('tasks-block').innerHTML = '<div style="text-align:center;padding: 5px 0 70px;">Ничего не найдено</div>';
     } else {

      ge('tasks-block').innerHTML = q.content;

    }
/*
  console.log(ge('catalog').value);
  console.log(ge('category').value);
  console.log(ge('currency').value);
  console.log(ge('task_min_cost').value);
  console.log(ge('task_max_cost').value);*/
}
  });
}

</script>


<div>Дата блокировки: <?php echo $v['date_banned'];?></div>
<div style="margin-top:7px;">
<button type="submit" name="" class="button" style="width:auto;" onClick="recoverUser();">Восстановить</button>
<button type="submit" name="" class="button gray-button" style="width:auto;display: none;">Заблокировать снова</button>

</div>
    </div>
  </div>
</div>
<div class="clear"></div>



<?php
}
?>


 </div>

<div class="clear"></div>
</div>
</div>