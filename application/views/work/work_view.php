<div id="tasks">

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
<div class="nav">
    <a class="nav-link">Задания</a>
    <a href="/tasks/performers" class="nav-link">Исполнители</a>
    <a href="/tasks/work" class="nav-link nav-link__active">Работа</a>

    <a class=" nav-link__filters  nav-link__work" id="nav-link__filters_showen" onclick="toggeFilters();">
      <span>Показать фильтры</span>
      <i class="icon icon-arrow__down"></i>
    </a>

    <a style="display: none;" class=" nav-link__filters  nav-link__work" id="nav-link__filters_hidden" onclick="toggeFilters();">
      <span>Скрыть фильтры</span>
      <i class="icon icon-arrow__up"></i>
    </a>



  </div>



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

<div class="tasks-block">
<?php
for($i=0;$i<7;$i++) {

?>
  <div class="task-block" style="
    border-top: 1px solid #DDD;">
    <div class="task-title"><a class="task-title__link" href="/tasks/get/">Junior PHP разработчик Битрикс, Битрикс 24 API</a></div>
    <div class="task-info">
      <span class="cost">340 рублей</span>
      <span> · </span>
      <span>2 часа назад</span>
      <span> · </span>
      <span>Дизайн / Разработка логотипа</span>
    </div>
    <div class="task-description">

Необходимо разработать брэндбук для нового предприятия "ADV Crimea": - логотип; - цветовую схему и предложить шрифт; - шаблон визитных карт; - фирменный бланк; - макет шапки сайта; - титульная страница каталога работ компании; - шаблон буклета для размещения информации о предприятии. Наша сфера деятельности: - изготовление наружной рекламы любой сложности; - полиграфические услуги; - разработка и изготовление меню, ценников,

    </div><div class="task-answer">
      <button type="submit" name="" class="button button_task_reg button-blue">Откликнуться</button> 
<a class="task-owner__info_link" href="/profile/">
        <div style="float:left;margin-top:-7px; "><div class="div-image__important" style="width:31px;height:31px;background-image: url('/images/download.jpg');border-radius: 27px;"></div></div>
        <div style="float:left;margin-left:9px; border-bottom:0">Иван Гордей</div>
      </a>
    </div>  </div>

<?php
}

?>
</div>
</div>
</div>
<script type="text/javascript">
setTimeout(function() {
  addClass('head-work', 'head-link__active');
}, 100);
</script>