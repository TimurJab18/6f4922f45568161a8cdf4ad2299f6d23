<?php
  $page_title = (isset($param['page_title']) && !empty($param['page_title'])) ? $param['page_title'] : '...';
  $page_description = (isset($param['page_description']) && !empty($param['page_description'])) ? $param['page_description'] : '...';
  $page_keywords = (isset($param['page_keywords']) && !empty($param['page_keywords'])) ? $param['page_keywords'] : '...';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<head>
    <title><?php echo $page_title; ?></title>
    <link rel="shortcut icon" href="/images/icons/alpha-a-circle-outline (1).png?<?php echo time();?>" type="image/png">
    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
    <meta name="title" content="<?php echo $page_title; ?>">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#000000">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:image" content="/images/icons/favicon.ico?2">
    <meta property="og:description" content="<?php echo $page_description; ?>">

    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <script type="text/javascript">
      var cur = {};
    </script>
    <link href="/css/common.css?<?php echo time(); ?>" rel="stylesheet">
    <link href="/css/icons.css?<?php echo time(); ?>" rel="stylesheet">
<?php

if(!empty($param['css'])) {

  if(is_array($param['css'])) {
    foreach($param['css'] as $v) {
      echo '<link rel="stylesheet" type="text/css" href="/css/'.$v.'?v='.rand().'">';
    }
  } else {
    echo '<link rel="stylesheet" type="text/css" href="/css/'.$param['css'].'?v='.rand().'">';
  }
}
?>
</head>
<body>

<div id="wrap1">
  
<div class="head">
  <div class="head-wrap">
    <div class="head-left">
      <a href="/" style="background-color:#FFF;"><img src="/images/icons/c.png" style="
    padding: 13px 14px 4px;margin-top:-3px;float:left;"></a>
      <a href="/tasks" class="head-link" id="head-tasks">Задания</a>
      <a href="/tasks/performers" class="head-link" id="head-performers">Исполнители</a>
      <a href="/create_work/select_category" class="head-link" id="head-select-category">Каталог заданий</a>
    </div>
    <div class="head-center"></div>
   <!-- <div class="head-right">
      <a href="/login" class="head-link">Вход</a>
      <span class="head-link head-link__or">или</span>

      <a href="/reg" class="head-link">Регистрация</a>
    </div>-->


<div class="head-right">
  

<?php

   if(User::isAuth()) {

?>
      <a href="/create_work" class="head-link" style="padding: 8px 14px 8px!important;background-color:transparent!important"><button class="button gray-button">Создать задание</button></a>
      <a href="/settings" class="head-link" id="head-settings">Настройки</a>

      <a href="/logout" class="head-link">Выход</a>

<?php
} else {

?>

     <!-- <a href="/reg" class="head-link">Выход</a>-->




      <a href="/login" id="head-login" class="head-link" 1onClick="getPopupBoxLoginForm();event.preventDefault();">Вход</a>
      <span class="head-link head-link__or">или</span>

      <a href="/reg" id="head-reg" class="head-link" 1onClick="getPopupBoxRegForm();event.preventDefault();">Регистрация</a>

<?php
}

?>

</div>







  </div>
</div>

<div class="content-wrap">
<?php
  if(isset($content_view) && !empty($content_view)) {
    require_once SITE_ROOT.'application/views/'.$content_view;
  } else {
    echo '...';
  }
?>

</div>

<div class="footer"><?php echo SITE_NAME;?> &copy; 2021</div>

</div>
<script type="text/javascript" src="/js/common.js?<?php echo rand();?>"></script>




<?php

if(!empty($param['js'])) {

  if(is_array($param['js'])) {
    foreach($param['js'] as $v) {
      echo '<script type="text/javascript" src="/js/'.$v.'?v='.rand().'"></script>';
    }
  } else {
    echo '<script type="text/javascript" src="/js/'.$param['js'].'?v='.rand().'"></script>';
  }
}
?>


<a href="/create_work">
<div style="position:fixed;bottom: 0;
    right: 0;cursor: pointer;">
      
      <div style="background-color: #607d8b;width:auto;height:44px;border-radius:54px;padding:0 24px;margin-bottom:29px;margin-right:29px">
        <div style="position:relative;top: 13px;color:#FFF;text-transform: uppercase;font-weight:bold;">Создать задание</div>
      </div>
    </div>

  </a>










<style type="text/css">
.login-wrap{width:240px;margin:0 auto;padding:74px 0 84px;}
.login-text_field{width:100%}
.input_wrap:last-child{margin:4px 0 0;}
.login-title{text-align: center;font-size:25px;margin-bottom:24px;}
.login-small__info{color:#808080;}
.restore-link__wrap{}
.restore-link{color:#607d8b;}
.login-more__wrap{text-align:center;margin-top: 24px;}
.login-more__text{background-color:#FFF;padding:4px 14px;}
.login-line{border-bottom:1px solid #DDD;margin-top:-9px;}
.login-more__block{margin-bottom:24px;}






.background-gray__layer{position:fixed;top:0;left:0;right:0;bottom:0;background-color:#000;opacity:0.34}
.popup-box{position: fixed;top:0;left:0;right:0;bottom:0;}
.popup-box__wrap{width:530px;margin:34px auto;background-color:#FFF;border-radius:14px;
    box-shadow: 0 0 44px #525252;}



.popup-box__wrap_head{height:49px;border-bottom:1px solid #DDD}
</style>

<script type="text/javascript">
var PopupBox = {
  show: function(title, content, actions) {
    show('background-gray__layer');
    show('popup-box');
    ge('popup-box__wrap_content').innerHTML = content;
    ge('popup-box__wrap_head_login').innerHTML = title;

    if(!actions) {

    hide('popup-box__wrap_actions');
    } else {          
    show('popup-box__wrap_actions');
    ge('popup-box__wrap_actions').innerHTML = actions;
    }
  },
  showWithUrl: function(url) {
    ajax.post({
      url: url,

      success: function(q) {
        PopupBox.show(q.title, q.content, q.actions);
      },
      showProgress: function() {

show('lolkaa');
show('background-gray__layer2');
      },
      hideProgress: function() {

hide('lolkaa');
hide('background-gray__layer2');


removeClass('lolkaa', 'element-animation');
      }
    });

  },

  hide: function() {
hide('background-gray__layer');
hide('popup-box');


  }

}

function getPopupBoxLoginForm() {

    PopupBox.showWithUrl('/login/ajax_get_login');
}

function getPopupBoxRegForm() {
    PopupBox.showWithUrl('/reg/ajax_get_reg_form');
}


function getPopupBoxRestoreForm() {
    PopupBox.showWithUrl('/restore/ajax_get_restore_form');
}


function hidePopupBox() {
    PopupBox.hide();
}

</script>

<style type="text/css">
.popup-box__wrap_head_close:hover{background-color: #f6f6f6;
    border-top-right-radius: 14px;cursor: pointer;}
</style>
  <div class="background-gray__layer" id="background-gray__layer" style="display: none;"></div>

<div class="popup-box" id="popup-box" style="display: none;">
<div class="popup-box__wrap">
  <div class="popup-box__wrap_head">
    <div class="popup-box__wrap_head_close" style="float:right;
    padding: 15px 17px;" onClick="hidePopupBox();"><!--закрыть--><img src="/images/icons/window-close (1).png"></div>
    <div class="popup-box__wrap_head_login" id="popup-box__wrap_head_login" style="float:left;
    padding: 15px 19px;">Заргрузка...</div>
  </div>
  <div class="popup-box__wrap_content" id="popup-box__wrap_content">
    



<div style="text-align: center;padding:37px 0;"><img src="/images/icons/Spinner-1.3s-68px.gif"></div>




</div>

</div>


  </div>
  <div class="popup-box__wrap_actions" id="popup-box__wrap_actions"></div>
</div>
</div>











<style type="text/css">
.to-top__block{position:fixed;left:0;bottom:0;top:0;width:150px;background-color:#FFF;text-align: center;cursor: pointer;transition:all 0.24s ease}
.to-top__block:hover{background-color:#f8f8f8;border-right:1px solid #DDD;}
.to-top__wrap{position:absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding-bottom:34px;
}

</style>
<script type="text/javascript">
var t; function scrolltop() { var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop); if(top>0) { window.scrollTo(0,Math.floor(top/1.5)); t = setTimeout("scrolltop()",30); } else { clearTimeout(t); } return false; }




window.onscroll = function() {
  if(window.scrollY > 70) {
show('to-top__block');
  } else {
hide('to-top__block');

  }
};


</script>
<div class="to-top__block" id="to-top__block" onClick="scrolltop()" style="display:none;">
  <div class="to-top__wrap">
    <div><img src="/images/icons/chevron-up (1).png"></div>
  <div>Наверх</div>
  </div>
</div>



<style type="text/css">






.element-animation{
  animation: animationFrames linear 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  -webkit-animation: animationFrames linear 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -moz-animation: animationFrames linear 1s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -o-animation: animationFrames linear 1s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -ms-animation: animationFrames linear 1s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
}

@keyframes animationFrames{
  0% {
    transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    -moz-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -moz-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -moz-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -moz-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -moz-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -moz-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -moz-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    -webkit-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -webkit-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -webkit-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -webkit-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -webkit-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -webkit-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -webkit-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
}

@-o-keyframes animationFrames {
  0% {
    -o-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -o-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -o-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -o-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -o-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -o-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -o-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    -ms-transform:  translate(0px,0px)  rotate(0deg) ;
  }
  15% {
    -ms-transform:  translate(-25px,0px)  rotate(-5deg) ;
  }
  30% {
    -ms-transform:  translate(20px,0px)  rotate(3deg) ;
  }
  45% {
    -ms-transform:  translate(-15px,0px)  rotate(-3deg) ;
  }
  60% {
    -ms-transform:  translate(10px,0px)  rotate(2deg) ;
  }
  75% {
    -ms-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
  100% {
    -ms-transform:  translate(-5px,0px)  rotate(-1deg) ;
  }
}

</style>


  <div class="background-gray__layer" id="background-gray__layer2" style="display: none;"></div>
<div id="lolkaa" onmousedown="addClass(this, 'element-animation');" style="position:fixed;top:0;left:0;right:0;bottom:0;width:100%;height:100%;display:none;">
  
  <div>
    <div style="
    width: 111px;
    height: 111px;
    line-height: 162px;
    margin: 7% auto;
    background-color: #FFF;
    text-align: center;
    box-shadow: 0 0 44px #525252;
    border-radius: 60px;cursor: pointer;"><img src="/images/icons/Spinner-1.3s-68px.gif"></div>
  </div>
</div>










<div class="pop-box"></div>








</body>
</html>