<div id="settings">
  <style type="text/css">
.settings-wrap{padding:14px 0;}
.input_wrap{text-align: left;}
.input_wrap_title{padding-bottom:7px;display: block;float: left;
    margin: 5px -144px;text-align:right; }


    .settings-text_field{    height: 31px;line-height:31px;padding:0 11px;}
  </style>




<div class="settings-wrap">


<style type="text/css">
.settings-text_field{width:100%}
</style>

<div class="clear"></div>
 <div class="settings-info__container" style="width:340px;margin:0 auto;padding:35px 0 35px">

   <div class="input_wrap" style="margin-bottom:21px;">
    <span style="font-weight: bold;font-size:19px">Создание задания</span>
      </div>
<FORM action="" method="POST">
<?php
if(isset($data['create_work_messages'])) {
  if($data['create_work_messages']['is_error'] === true) {

?>
<div class="form-message">
  <div class="form-message__title"><?php echo $data['create_work_messages']['error']['error_message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['create_work_messages']['error']['error_message']['description'];?></div>
</div>
<?php
} else if(isset($data['create_work_messages']['is_error'])) {
  ?>

<div class="form-message" style="background-color: #D3EFDC">
  <div class="form-message__title"><?php echo $data['create_work_messages']['message']['title'];?></div>
  <div class="form-message__text"><?php echo $data['create_work_messages']['message']['description'];?></div>
</div>

  <?php
} else echo '<div class="input_wrap create_work-small__info"">Ввведите Ваши данные в поле ниже</div>';
}
?>
   <div class="input_wrap">
    <div class="input_wrap_title">Название задания</div>
    <input type="text" name="task_title" class="text_field settings-text_field" placeholder="Название задания" autofocus="">
      </div>


   <div class="input_wrap">
    <div class="input_wrap_title">Описание задания:</div>
    <TEXTAREA name="task_description" class="text_field" style="height:64px;padding:7px 11px;width:100%" placeholder="Описание задания"></TEXTAREA>
      </div>






















































































 





































   <div class="input_wrap">
    <div class="input_wrap_title">Бюджет:</div>



    <div>

      <input type="text" name="task_budget" class="text_field settings-text_field" style="width:73%;" placeholder="Бюджет">



<select class="text_field" name="task_currency" style="width:25%;padding:0 7px;height: 31px;line-height:31px;cursor: pointer;">
  <option value="1" selected="">Рублей</option>
  <option value="2">Долларов</option>
  <option value="3">Евро</option>
  <option value="4">Гривен</option>
  <option value="5">Тенге</option>
</select>


    </div>



      </div>

      <style type="text/css">
      .select{    border: 1px solid #BBB;
    height: 24px;
    padding: 0 7px;
    border-radius: 5px;
    width: 100%;
    cursor: pointer;
    transition: all 0.34s ease;}
      </style>
   <div class="input_wrap">
    <div class="input_wrap_title">Каталог:</div>
<div>
  <div class="filter-wrap">
     <select class="select" name="task_catalog" style="padding:0 7px;height: 31px;line-height:31px" onchange="test();" id="catalog">
       <option value="0" selected="">Выберите каталог</option>
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
</div>

      </div>



   <div class="input_wrap">
    <div class="input_wrap_title">Категория:</div>
<div>

    <div class="filter-wrap" style="display:block;" id="filter_1">
      <select name="task_category" id="category_1" class="select">
        <option value="1">Доставка еды из ресторана</option>
        <option value="2">Отнести - принисти</option>
        <option value="3">Курьеры</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_2">
      <select name="task_category" id="category_2" class="select">
        <option value="1" style="display:block;">Мастер на час</option>
        <option value="2" style="display:block;">Ремонт под ключ</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_3">
      <select name="task_category" id="category_3" class="select">
        <option value="1" style="display:block;">Рефераты, курсовые, дипломы</option>
        <option value="2" style="display:block;">Копирайтинг</option>
        <option value="3" style="display:block;">Рерайтинг</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_4">
      <select name="task_category" id="category_4" class="select">
        <option value="1" style="display:block;">Полиграфический дизайн</option>
        <option value="2" style="display:block;">Дизайн сайтов и приложений</option>
        <option value="3" style="display:block;">Дизайн комнат</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_5">
      <select name="task_category" id="category_5" class="select">
        <option value="1" style="display:block;">Свадебное видео</option>
        <option value="2" style="display:block;">Фотограф</option>
        <option value="3" style="display:block;">Видео на мероприятниях</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_6">
      <select name="task_category" id="category_6" class="select">
        <option value="1" style="display:block;">CryEngine</option>
        <option value="2" style="display:block;">iOS</option>
        <option value="3" style="display:block;">Unity</option>
        <option value="4" style="display:block;">Unreal Engine</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_7">
      <select name="task_category" id="category_7" class="select">
        <option value="1" style="display:block;">Android</option>
        <option value="2" style="display:block;">iOS</option>
        <option value="3" style="display:block;">iPad</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_8">
      <select name="task_category" id="category_8" class="select">
        <option value="1" style="display:block;">Поисковые системы</option>
        <option value="2" style="display:block;">Контекстаная реклама</option>
        <option value="3" style="display:block;">Продажа ссылок</option>
      </select>
    </div>
    <div class="filter-wrap" style="display:none;" id="filter_9">
      <select name="task_category" id="category_9" class="select"> 
        <option value="1" style="display:block;">Сайт под ключ</option>
        <option value="2" style="display:block;">Лендинг</option>
        <option value="3" style="display:block;">Верстка</option>
        <option value="4" style="display:block;">CMS(Wordpress, Modx, Joomla, Тильда и т.д.)</option>
        <option value="5" style="display:block;">Интернет-магазины</option>
        <option value="6" style="display:block;">Доработка сайтов</option>
      </select>
    </div>
</div>

      </div>


   <div class="input_wrap">
    <div class="input_wrap_title">Прикрепить:</div>
  <div class="filter-wrap" id="d">
    <script type="text/javascript">
function sd() {
//'d'

var el = document.createElement('div');

el.style='margin:14px 0 14px';
el.innerHTML='<input type="file" name="" onChange="sd()">';
ge('d').appendChild(el);
}
    </script>
<input type="file" name="" onChange="sd()">
</div>
</div>
<div>



   <div class="input_wrap" style="margin-top:17px;">
    <input type="submit" name="task_submit" class="button" value="Сохранить" style="width: auto;">
      </div>

    </FORM>
 </div>

<div class="clear"></div>
</div>
</div>
</div>

<script type="text/javascript">

var __cur = {catalog_hidden_id: 1};
function test() {

  console.log(catalog.selectedIndex);
  switch(catalog.selectedIndex) {
    case 1:
 show('filter_1');
hide('filter_'+__cur.catalog_hidden_id);

__cur.catalog_hidden_id = 1;
    break;

    case 2:
 show('filter_2');

hide('filter_'+__cur.catalog_hidden_id);
__cur.catalog_hidden_id = 2;
    break;

    case 3:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_3');

__cur.catalog_hidden_id = 3;
    break;

    case 4:

hide('filter_'+__cur.catalog_hidden_id);

__cur.catalog_hidden_id = 4;

show('filter_4');
    break;

    case 5:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_5');

__cur.catalog_hidden_id = 5;

    break;

    case 6:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_6');

__cur.catalog_hidden_id = 6;

    break;

    case 7:


hide('filter_'+__cur.catalog_hidden_id);
 show('filter_7');

__cur.catalog_hidden_id = 7;

    break;

    case 8:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_8');

__cur.catalog_hidden_id = 8;

    break;

    case 9:

hide('filter_'+__cur.catalog_hidden_id);
 show('filter_9');

__cur.catalog_hidden_id = 9;

    break;
}
}
</script>

