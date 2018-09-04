<?
/**/
/** ВНИМАНИЕ!
* Этот файл сгенерирован автоматически и не подлежит редактированию.
* Исходники лежат в папке templates/src/jade
*/
/**/
?><?
$sourceSuffix = '';
?><!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <base href="<?=SITE_URL?>">
        <title><?=PAGE_TITLE?></title>
        <meta content="Описание страницы" name="description">
        <meta content="Ключевые слова" name="keywords">
        <meta property="og:type" content="website">
        <link rel="image_src">
        <meta name="author">
        <meta content="telephone=no" name="format-detection">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="320">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta property="og:title" content="Заголовок для шеринга">
        <meta property="og:image" content="">
        <meta property="og:site_name" content="Название сайта для шеринга">
        <meta property="og:description" content="Описание для шеринга">
        <meta name="twitter:title" content="Заголовок для шеринга">
        <meta name="twitter:image:src" content="">
        <meta name="twitter:description" content="Описание для шеринга">
        <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css">
        <link href="<?=urlV('templates/build/css/styles'.$sourceSuffix.'.css')?>" rel="stylesheet" type="text/css">
  </head>
  <body>
    <script src="<?=urlV("templates/build/js/init".$sourceSuffix.".js")?>"></script>
        <header>
          <div class="header"><a href="./" class="logo"><img src="templates/build/images/base/logo.png" alt="logo"></a>
            <nav class="header--nav"><a href="guide" class="header--nav--item">Раздел №1</a><a href="guide" class="header--nav--item">Раздел №2</a><a href="guide" class="header--nav--item">Раздел №3</a><a href="guide" class="header--nav--item">Раздел №4</a><a href="guide" class="header--nav--item">Раздел №5</a></nav>
            <div class="header--option">
              <div class="compare">
                <div class="compare--btn">
                  <div class="count">3</div>
                </div>Сравнение
              </div>
              <div class="header--select">Личный кабинет</div><a href="tel:+70000000000" class="header--phone">+7 000 000-00-00
                <div class="popup__toggle">
                  <div class="circlephone"></div>
                  <div class="circle--fill"></div>
                  <div class="img--circle">
                    <div class="img--circleblock"></div>
                  </div>
                </div></a>
            </div><a class="burger"><span class="line line-1"></span><span class="line line-2"></span><span class="line line-3"></span></a>
            <div class="header__popup">
              <div class="header__popup--inner"></div>
            </div>
          </div>
        </header>
    <main class="grid"><?=$CONTENT?></main>
    <div class="loader js-loader">
      <div class="loader_box"></div>
    </div>
        <footer class="footer">
          <div class="footer--left">
            <ul class="footer--social">
              <li><a href="./"><i class="fab fa-facebook-square"></i></a></li>
              <li><a href="./"><i class="fab fa-vk"></i></a></li>
              <li><a href="./"><i class="fab fa-instagram"></i></a></li>
              <li><a href="./"><i class="fab fa-odnoklassniki"></i></a></li>
              <li><a href="./"><i class="fab fa-youtube"></i></a></li>
            </ul><a href="tel:+70000000000" class="footer--phone">+7 000 000-00-00</a>
            <div class="footer--address">
              <p class="footer--address__detail">Адрес, улица, дом, корпус</p><a href="mailto:post@comp.com" class="footer--address__link">post@comp.com</a>
            </div>
          </div>
          <div class="footer--nav">
            <div class="accordeon row">
              <div class="ac col">
                <div class="footer--nav--heading">
                  <div class="ac--arrow"><i class="fas fa-chevron-down"></i></div>
                  <p class="faq__heading">Раздел №1</p>
                </div>
                <div class="answer faq__link"><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a></div>
              </div>
              <div class="ac col">
                <div class="footer--nav--heading">
                  <div class="ac--arrow"><i class="fas fa-chevron-down"></i></div>
                  <p class="faq__heading">Раздел №1</p>
                </div>
                <div class="answer faq__link"><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a></div>
              </div>
              <div class="ac col">
                <div class="footer--nav--heading">
                  <div class="ac--arrow"><i class="fas fa-chevron-down"></i></div>
                  <p class="faq__heading">Раздел №1</p>
                </div>
                <div class="answer faq__link"><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a></div>
              </div>
              <div class="faq__link faq__link__no-heading"><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a><a href="./">Подраздел №1</a></div>
            </div>
          </div>
        </footer>
    <script src="<?=urlV("templates/build/js/libs".$sourceSuffix.".js")?>"></script>
    <script src="<?=urlV("templates/build/js/scripts".$sourceSuffix.".js")?>"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  </body>
</html>