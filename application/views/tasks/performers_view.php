<div id="tasks">
<style type="text/css">
  
.task-title{color:#008eff;font-size:24px;margin-bottom:19px;}
.task-title__link:hover{text-decoration: underline;}
.task-description{font-size:17px;line-height:27px}
.task-block{padding:17px 27px;}

.task-info{margin-bottom:14px}

.task-block:hover{background-color:#FBFBFB;}
.button_task_reg{width:auto;}
.task-answer{padding:14px 0 17px}

.cost{color:green;font-weight: bold;font-size: 17px}
.task-owner__info_link{border-bottom:1px dashed #008eff;float:right;}
.task-owner__info_link:hover{border-bottom:1px solid #008eff}

.tasks-wrap{padding:24px 0 0;}


.nav-link__filters{float:right;color: #000;
    padding: 0 3px 4px 10px;cursor:pointer;border-radius:4px}

    

.nav-link__filters:hover{background-color: #F1F1F1}


.filter-and-menu__wrap{
    padding: 0 24px 0 24px;}
.tasks-block{margin-top:14px}
.nav-link__work{margin-right:0;}














.filters-block{transition:all 0.74s ease;   overflow: hidden;/*border-bottom: 1px solid rgb(221, 221, 221);*/padding-bottom: 11px; margin-top: 14px;}
.filters-wrap{padding-bottom: 16px;width: 100%}
.filters-title{margin-bottom:11px}
.filter-wrap{margin-right:35px;width: 100%}
.task-text_field{width:100%}
.filters-block{padding:7px 0;}

.filter-and-menu__wrap{}

      .filters-block__showen{display: block!important}








.select{
    border: 1px solid #BBB;
    height: 24px;
    padding: 0 7px;
    border-radius: 5px;width: 100%;cursor:pointer;
    transition: all 0.34s ease;}


 .select:focus{ 
    border: 1px solid #0070c9;
    outline: 0;
    box-shadow: 0 0 0 3px rgb(131 192 253 / 50%);
    background-color: #FBFBFB;
}


.filter-cost__wrap{width: 50%;float:left;}


.filter-cost__wrap_after{padding-right:11px;left:9px;position:relative;




}




.table-item__agree_wrap{padding-top: 11px;}
  .button-agree{width:auto;}
</style>
<div class="tasks-wrap">
  <div class="filter-and-menu__wrap">
    <script type="text/javascript">
    
cur.is_filters_showen=false;
function toggeFilters() {
  if(cur.is_filters_showen == false) {
    
    addClass('filters-block__wrap', 'filters-block__showen');
    show('nav-link__filters_hidden');
    hide('nav-link__filters_showen');

    setTimeout(function() {
      ge('filters-block').style.height = '116px';
    }, 1);
    cur.is_filters_showen=true;
  } else {
    ge('filters-block').style.height = '0';;
    hide('nav-link__filters_hidden');
    show('nav-link__filters_showen');
    setTimeout(function() {
      removeClass('filters-block__wrap', 'filters-block__showen');
    }, 700);
    cur.is_filters_showen=false;
  }
}
    </script>
    <style type="text/css">
      
      .filters-block__showen{display: block!important;border-bottom: 1px solid rgb(221, 221, 221);}

    </style>
</script>
<div class="nav">
    <a href="/tasks/" class="nav-link">Задания</a>
    <a href="/tasks/performers" class="nav-link nav-link__active">Исполнители</a>

    <a class=" nav-link__filters  nav-link__work" id="nav-link__filters_showen" onclick="toggeFilters();" style="display: inline;">
      <span>Показать фильтры</span>
      <i class="icon icon-arrow__down"></i>
    </a>

    <a style="display: none;" class=" nav-link__filters  nav-link__work" id="nav-link__filters_hidden" onclick="toggeFilters();">
      <span>Скрыть фильтры</span>
      <i class="icon icon-arrow__up"></i>
    </a>



  </div>

<style type="text/css">
  .filters-block{padding:0 0;}
</style>

  <div class="clear"></div>

<div id="filters-block__wrap">
<div class="filters-block" id="filters-block" style="height:0;">

<table class="filters-wrap" id="filters-wrap">
<tr>
  <td>
   <div class="filters-title">Каталог</div>
   <div class="filter-wrap">
     <select class="select">
       <option value="1">Курьерские услуги</option>
       <option value="2">Ремонт и строительство</option>
       <option value="3">Тексты</option>
       <option value="4">Дизайн</option>
       <option value="5">Фото и видео</option>
       <option value="6">Разработка игр</option>
       <option value="7">Мобильные приложения</option>
       <option value="8">Оптимизация</option>
       <option value="9">Создание сайтов</option>
       <option value="10">Другое</option>
     </select>
   </div>
  </td>
  <td>
    <div class="filters-title">Категория</div>
    <div class="filter-wrap">
      <select class="select">
        <option value="volvo">Доставка еды из ресторана</option>
        <option value="saab">Отнести - принисти</option>
        <option value="mercedes">Курьеры</option>
      </select>
    </div>
  </td>

  <td>
    <div class="filters-title">Стоимость</div>
    <div class="filter-wrap">
      <div class="filter-cost__wrap">
        <input type="text" class="text_field task-text_field" name="" placeholder="от">
      </div>
      <div class="filter-cost__wrap filter-cost__wrap_after">
        <input type="text" class="text_field task-text_field" name="" placeholder="до">
      </div>
    </div>
  </td>
  <td>
    <div class="filters-title">Валюта</div>
    <div class="filter-wrap">
      <select class="select">
        <option value="volvo">Руб.</option>
        <option value="saab">Долларов</option>
        <option value="saab">Евро</option>
        <option value="saab">Тенге</option>
      </select>
    </div>
  </td>
</tr>
<tr>
  <td class="table-item__agree_wrap">
    <button class="button button-agree">Применить</button>
  </td>
</tr>
</table>

</div>
</div>
</div>


<style type="text/css">
  .performer-block{padding:23px 0;    overflow: hidden;
    border-top: 1px solid #DDD;}
  .performer__image_wrap{float:left;}
</style>




























<style type="text/css">
.portfolio-wrap{width:100%;margin: 0 -14px;
}

.portfolio-block{width:33.33333333333%;height:134px;border:1px solid #FFF;cursor: pointer;
border-radius:5px;overflow: hidden;}
.portfolio-block__wrap{padding:7px 7px 0 0px;font-weight: bold;
    padding: 7px 11px 9px 11px;}
.portfolio-block:hover{background-color: #FBFBFB;border:1px solid #DDD;}
.portfolio-block__image{
width: 230px;
    height: 230px;
    background-size: cover;
    background-position: center;
    background-image: url(/images/download.jpg);
border-radius:5px;
}
.portfolio-block__title{margin-top:4px;    max-height: 45px;}
</style>

<div class="performers-wrap" style="    margin: 0 23px;">
<?php

//var_dump($data);
foreach($data['performers']['executors'] as $v) {
  //var_dump($v);
  $initials = $v['first_name'].' '.$v['last_name'];  //photo_small 
  $small_photo = !empty($v['photo_small']) ? $v['photo_small'] : '/images/icons/account-circle-outline.png';
//for($i=0;$i<7;$i++) {
?>


<div class="performer-block">
  <div class="performer__image_wrap">
    
    <div style="width:90px;height:90px;background-image: url('<?php echo $small_photo;?>'); background-repeat:no-repeat;background-position: center;border-radius:7px;"></div>
       
  </div>
    <div style="margin-left:107px;line-height:27px;">
      <div><a href="/profile/get/?id=3" style="font-weight:bold;font-size: 18px"><?php echo $initials;?></a></div>





      <div class="performer-wrap__initials">

<div><span style="color:#808080;margin-right:7px">Отзывы: </span>
        <b>
            <img src="/images/icons/thumb-up4.png" style="position: relative;top: 3px;">
            <span style="color:green;"> 2 </span> 
</b>
<span style="padding:0 4px">  </span>
<b>
 <span style="color:red;">
    <img src="/images/icons/thumb-down4.png" style="position: relative;top: 3px;"> 1 
</span>
</b>
              </div>
        </div>

<div class="performer-wrap__initials"><span style="color:#808080;margin-right:7px">Зарегестрирован:</span><?php echo $v['date_registered'];?></div>



<div class="performer-wrap__initials" style="margin-top:7px;displafy: none;"><a href="/profile/get/?id=<?php echo $v['id'];?>"><button class="button" style="width:auto;">Перейти в профиль</button></a>
<a href="/profile"><button class="button gray-button" style="width:auto;">Посмотреть портфолио</button></a></div>


<div class="clear"></div>

</div>

<div class="clear"></div>






















</div>

















<?php

}
?>

</div>
</div>




</div>
    
<script type="text/javascript">
setTimeout(function() {
  addClass('head-performers', 'head-link__active');
}, 100);
</script>