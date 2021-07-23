
<div id="tasks">
<style type="text/css">
  .filters-block{padding:0 0;}
</style>
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
<div class="tasks-wrap">
  <div class="filter-and-menu__wrap">
  <div class="nav">

    <a class=" nav-link__filters  nav-link__work" id="nav-link__filters_showen" onClick="toggeFilters();" style="float: left;">
      <span>Показать фильтры</span>
      <i class="icon icon-arrow__down"></i>
    </a>

    <a style="display: none;" class=" nav-link__filters  nav-link__work" id="nav-link__filters_hidden" onClick="toggeFilters();">
      <span>Скрыть фильтры</span>
      <i class="icon icon-arrow__up"></i>
    </a>



<style type="text/css">
.login-wrap{padding: 51px 0 63px;}
.login-text_field{    height: 71px;
    padding: 5px 9px;}
#d{margin-top:14px}
</style>
    <script type="text/javascript">
function sd() {
//'d'

var el = document.createElement('div');

el.style='margin:14px 0 14px';
el.innerHTML='<input type="file" name="" onChange="sd()">';
ge('d').appendChild(el);
}
    </script>





<script type="text/javascript">

function getResponseToTaskForm() {
    PopupBox.showWithUrl('/tasks/ajax_get_response_to_task_form');
}

</script>


  </div>
  <div class="clear"></div>

<div id="filters-block__wrap" style="disfplay: none;">
<div class="filters-block" id="filters-block" style="height:auto;">

<table class="filters-wrap" id="filters-wrap">
<tr>
  <td>
   <div class="filters-title">Каталог</div>
   <div class="filter-wrap">
     <select name="catalog" id="catalog" class="select" onchange="test();">



<?php
$qq = !empty($_GET['category_id']) ? $_GET['category_id'] : 1;
$qq2 = !empty($_GET['item_id']) ? $_GET['item_id'] : 1;


?>
<script type="text/javascript">

var __cur = {catalog_hidden_id: 1};
function test() {

  console.log(catalog.selectedIndex);
  switch(catalog.selectedIndex) {
    case 0:
 show('filter_1');
hide('filter_'+__cur.catalog_hidden_id);

__cur.catalog_hidden_id = 1;
    break;

    case 1:
 show('filter_2');

hide('filter_'+__cur.catalog_hidden_id);
__cur.catalog_hidden_id = 2;
    break;

    case 2:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_3');

__cur.catalog_hidden_id = 3;
    break;

    case 3:

hide('filter_'+__cur.catalog_hidden_id);

__cur.catalog_hidden_id = 4;

show('filter_4');
    break;

    case 4:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_5');

__cur.catalog_hidden_id = 5;

    break;

    case 5:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_6');

__cur.catalog_hidden_id = 6;

    break;

    case 6:


hide('filter_'+__cur.catalog_hidden_id);
 show('filter_7');

__cur.catalog_hidden_id = 7;

    break;

    case 7:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_8');

__cur.catalog_hidden_id = 8;

    break;

    case 8:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_9');

__cur.catalog_hidden_id = 9;

    break;
}
}
</script>

       <option value="1"<?php if($qq == 1) echo ' selected=""';?>>Курьерские услуги</option>
       <option value="2"<?php if($qq == 2) echo ' selected=""';?>>Ремонт и строительство</option>
       <option value="3"<?php if($qq == 3) echo ' selected=""';?>>Тексты</option>
       <option value="4"<?php if($qq == 4) echo ' selected=""';?>>Дизайн</option>
       <option value="5"<?php if($qq == 5) echo ' selected=""';?>>Фото и видео</option>
       <option value="6"<?php if($qq == 6) echo ' selected=""';?>>Разработка игр</option>
       <option value="7"<?php if($qq == 7) echo ' selected=""';?>>Мобильные приложения</option>
       <option value="8"<?php if($qq == 8) echo ' selected=""';?>>Оптимизация</option>
       <option value="9"<?php if($qq == 9) echo ' selected=""';?>>Создание сайтов</option>
     </select>
   </div>
  </td>
  <td>
    <div class="filters-title">Категория</div>
   <!-- <?php var_dump($qq);?>-->
    <div class="filter-wrap"<?php echo $qq == '1' ? ' style="display:block"' : ' style="display:none"';?> id="filter_1">
      <select name="category" id="category_1" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Доставка еды из ресторана</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Отнести - принисти</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>Курьеры</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '2' ? ' style="display:block"' : ' style="display:none"';?>  id="filter_2">
      <select name="category" id="category_2" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Мастер на час</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Ремонт под ключ</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '3' ? ' style="display:block"' : ' style="display:none"';?> id="filter_3">
      <select name="category" id="category_3" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Рефераты, курсовые, дипломы</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Копирайтинг</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>Рерайтинг</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '4' ? ' style="display:block"' : ' style="display:none"';?> id="filter_4">
      <select name="category" id="category_4" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Полиграфический дизайн</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Дизайн сайтов и приложений</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>Дизайн комнат</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '5' ? ' style="display:block"' : ' style="display:none"';?> id="filter_5">
      <select name="category" id="category_5" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Свадебное видео</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Фотограф</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>Видео на мероприятниях</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '6' ? ' style="display:block"' : ' style="display:none"';?> id="filter_6">
      <select name="category" id="category_6" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>CryEngine</option>
        <option value="3"<?php if($qq2== '2') echo ' selected';?>>Unity</option>
        <option value="4"<?php if($qq2== '3') echo ' selected';?>>Unreal Engine</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '7' ? ' style="display:block"' : ' style="display:none"';?> id="filter_7">
      <select name="category" id="category_7" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Android</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>iOS</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>iPad</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '8' ? ' style="display:block"' : ' style="display:none"';?> id="filter_8">
      <select name="category" id="category_8" class="select">
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Поисковые системы</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Контекстаная реклама</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>Продажа ссылок</option>
      </select>
    </div>
    <div class="filter-wrap"<?php  echo $qq == '9' ? ' style="display:block"' : ' style="display:none"';?> id="filter_9">
      <select name="category" id="category_9" class="select"> 
        <option value="1"<?php if($qq2== '1') echo ' selected';?>>Сайт под ключ</option>
        <option value="2"<?php if($qq2== '2') echo ' selected';?>>Лендинг</option>
        <option value="3"<?php if($qq2== '3') echo ' selected';?>>Верстка</option>
        <option value="4"<?php if($qq2== '4') echo ' selected';?>>CMS(Wordpress, Modx, Joomla, Тильда и т.д.)</option>
        <option value="5"<?php if($qq2== '5') echo ' selected';?>>Интернет-магазины</option>
        <option value="6"<?php if($qq2== '6') echo ' selected';?>>Доработка сайтов</option>
      </select>
    </div>
  </td>

  <td>
    <div class="filters-title">Стоимость</div>
    <div class="filter-wrap">
      <div class="filter-cost__wrap">
        <input type="text" class="text_field task-text_field" name="task_min_cost" id="task_min_cost" placeholder="от">
      </div>
      <div class="filter-cost__wrap filter-cost__wrap_after">
        <input type="text" class="text_field task-text_field" name="task_max_cost" id="task_max_cost" placeholder="до">
      </div>
    </div>
  </td>
  <td>
    <div class="filters-title">Валюта</div>
    <div class="filter-wrap">
      <select name="currency" id="currency" class="select">
        <option value="1">Рубли</option>
        <option value="2">Доллары</option>
        <option value="3">Евро</option>
        <option value="4">Тенге</option>
        <option value="5">Гривны</option>
        <option value="5">Юань</option>
      </select>
    </div>
  </td>
</tr>
<tr>
  <script type="text/javascript">
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
  <style type="text/css">
    .d{
    float: right;
    width: 32px;
    height: 32px;
    position: relative;
    left: -73px;
    top: -4px;background-image:url('/images/icons/Spinner-1s-34px.gif');
background-repeat:no-repeat;display: none;

  }
  </style>

  <td class="table-item__agree_wrap">
    <button class="button button-agree" onClick="q();/*this.style.display='none';this.classList.add('d');*/">Применить</button>
    <div class="d" id="readonly"></div>
  </td>
</tr>
</table>

</div>
</div>
</div>

<div class="tasks-block" id="tasks-block">
<?php
/*
echo '<br>';
echo '<br>';
echo '<br>';
var_dump($data);

echo '<br>';
echo '<br>';
echo '<br>';
var_dump($data['tasks'][0]['title']);

echo '<br>';
echo '<br>';
echo '<br>';*/


//var_dump($data);
function interneotics_short_string($string, $length, $trimmarker = '...') {
  $len = strlen($string);
  if ($len < $length) return $string;
   else;
  $string = substr($string, 0, $length + 1 - strlen($trimmarker));
  $string = trim(substr($string, 0, strrpos($string, ' ') + 1 )) . $trimmarker;
 return $string;
}
//var_dump($data);

if(empty($data['tasks'])) {
  echo '<div style="text-align:center;padding:14px 0 54px;">Не найдено ни отдной записи</div>';
} else {
foreach($data['tasks'] as $v) {

//for($i=0;$i<47;$i++) {

?>
  <div class="task-block" style="border:0;margin:34px;">
  	<div class="task-title" style="text-align: left;"><a class="task-title__link" href="/tasks/get/?id=<?php echo $v['id'];?>"><?php echo $v['title'];?></a></div>
  	<div class="task-info">
      <span class="cost" style="float:right;"><?php echo $v['cost'];?>  <?php echo mb_strtolower($v['currency_name'], 'UTF-8');?></span>

      <?php
//var_dump($v);
      ?>

      <span><?php echo $v['date_created'];?></span>
      <span> · </span>
      <span><a href="/create_work/select_category" target="_blank"><?php echo $v['category_name'];?> / <?php echo $v['item_name'];?></a></span>
  	</div>
  	<div class="task-description" style="/*
    max-height: 83px;
    overflow: hidden;*/">


<?php
/* 
  strrpos() 
  http://php.net/manual/en/function.strrpos.php
*/
/* Использование */
echo interneotics_short_string($v['text'], $length = 910);


?>

  	</div>
  	<div class="task-answer">
      <button type="submit" name="" class="button button_task_reg button-blue" onClick="getResponseToTaskForm();">Откликнуться</button> 

      <span style="float:righft;margin-left:11px;" href="/profile/get/?id=<?php echo $v['owner_id'];?>">
        <?php echo $v['reviews_counter']; ?>  отзыва
      </span>







        <?php
$initils = $v['owner_info']['first_name'].' '.$v['owner_info']['last_name'];
$small_photo = !empty($v['owner_info']['photo_small']) ? $v['owner_info']['photo_small'] : '/images/icons/account.png';
        ?>
      
      <a class="task-owner__info_link" href="/profile/get/?id=<?php echo $v['owner_id'];?>">
        <div style="float:left;margin-top:-7px;">
          <div class="div-image__important" style="width:35px;height:35px;background-image: url('<?php echo $small_photo;?>');border-radius: 73px"></div>
        </div>

        <div style="float:left;margin-left:9px;"><?php echo $initils;?></div>
      </a>

 




    </div>
  </div>

<?php
}
}
?>
</div>
</div>
</div>
<script type="text/javascript">
setTimeout(function() {
  addClass('head-tasks', 'head-link__active');
}, 100);
</script>