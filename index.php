<?
//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=480">

  <title>Одягайся стильно</title>


  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/Montserrat.css">
  <!--	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>-->
  <!--	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>-->
  <link rel="stylesheet" href="css/styles.css">


  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="inputmask.min.js"></script>
  <!-- Meta Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '762136964810300');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=762136964810300&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->





</head>

<body>



  <div class="main_wrapper">



    <!-- header 3 -->

    <header class="offer_section offer3">
      <h1 class="main_title">-50% ПРЯМО ЗАРАЗ</h1>
      <div class="info_block">
        <p class="subtitle">Встигни замовити свій розмір по акції!<br></p>
        <div class="discount"><b>50% Знижка</b></div>
        <img src="img/tactical-tshirt/1.jpg" alt="" style="width: 100%;">
      </div>
      <div class="price_block">
        <div class="price_item old">
          <div class="text">Звичайна ціна:</div>
          <div class="value">898грн</div>
        </div>
        <div class="price_item new">
          <div class="text">Ціна сьгодні:</div>
          <div class="value">449грн</div>
        </div>
      </div>
      <div class="timer_block clearfix">
        <p>До кінця Акції залишилось:</p>
        <div class="timer clearfix">
          <div class="timer_item">
            <div class="count hours"></div>
            <div class="text">часов</div>
          </div>
          <div class="timer_item">
            <div class="count minutes"></div>
            <div class="text">минут</div>
          </div>
          <div class="timer_item">
            <div class="count seconds"></div>
            <div class="text">секунд</div>
          </div>
        </div>
      </div>
      <a href="#order_form" class="button">Залишити заявку</a>

      <div class="products_count">Залишилось <b>17</b> тактичних футболок по акції</div>
    </header>


    <section class="description_section">
      <h2 class="title" align="center"><span>Замовляй свою </span> ідеальну тактичну футболку</h2>
      <p>Топова тактична футболка на весну літо та осінь з колекції відомого бренда представлені на сайті нашого
        магазину. Він дуже зручний для повсякденної носки, а також підкреслюює вашу індивідуальність.</p>
      <ul class="characteristics__list">
        <li><b>Розміри:</b> S | M | L | XL | XXL</li>


        <li><b>Матерія:</b> Двухнитка </li>


      </ul>
    </section>


    <section class="cat" id="cat">










      <div class="catitem">

        <div class="catitem__slider">
          <img src="img/tactical-tshirt/1.jpg">
          <img src="img/tactical-tshirt/2.jpg">
          <img src="img/tactical-tshirt/3.jpg">
          <img src="img/tactical-tshirt/4.jpg">
        </div>

        <div class="clearfix">
          <h3>Футболка тактична піксель</h3>
          <div class="catprice clearfix">
            <div class="cp-left">
              <span>-50%</span>
              <p>898грн</p>
            </div>
            <div class="cp-right">
              <span>Ціна сьогодні:</span>
              <p>449грн</p>
            </div>
          </div>
        </div>
        <a href="#order_form" class="button">Залишити заявку</a>
      </div>

      <!-- <div class="catitem">

        <div class="catitem__slider">
          <img src="img/tshirt/black1.jpg">
          <img src="img/tshirt/black2.jpg">
          <img src="img/tshirt/black3.jpg">
          <img src="img/tshirt/black4.jpg">
        </div>

        <div class="clearfix">
          <h3>Чорна тактична Coolmax</h3>
          <div class="catprice clearfix">
            <div class="cp-left">
              <span>-50%</span>
              <p>700грн</p>
            </div>
            <div class="cp-right">
              <span>Ціна сьогодні:</span>
              <p>350грн</p>
            </div>
          </div>
        </div>
        <a href="#order_form" class="button">Залишити заявку</a>
      </div> -->

    </section>

    <section class="sizes" style="text-align: center;">
      <h2 class="title" align="center"><span>Розміри </span></h2>
      <img src="img/tshirt/sizes.jpg" alt="">
    </section>




    <!--<section>-->
    <!--<video width="480" autoplay controls muted="">-->
    <!--<source src="images/video.mp4">-->
    <!--</video>-->
    <!--</section>-->
    <!-- /description -->





    <!-- reviews 3 -->

    <section class="reviews3_section">
      <h2 class="title">Відгуки <span>покупців</span></h2>
      <div class="reviews_list">
        <div class="review_item">
          <div class="author_block clearfix">
            <img src="images/ava1.jpg" alt="">
            <div class="author_info">
              <div class="name">Андрій Мельников</div>
              <div class="text">27 років</div>
            </div>
            <div class="info">
              <div class="rating"></div>
              <div class="date">вчора</div>
            </div>
          </div>
          <p>Замовив собі декілька днів тому. Був приємно здивований якістю: тактична футболка дуже приємна до тіла та
            якісна. Дякую консультанту Анні!</p>

        </div>
        <div class="review_item">
          <div class="author_block clearfix">
            <img src="images/ava2.jpg" alt="">
            <div class="author_info">
              <div class="name">Віктор Опопрієнко</div>
              <div class="text">23 роки</div>
            </div>
            <div class="info">
              <div class="rating"></div>
              <div class="date">2 дні тому</div>
            </div>
          </div>
          <p>Замовив 3 дні тому і ось вчора отримав свою тактичну футболку. Якість супер! Матеріал приємний і шви
            якісні. Дякую!</p>

        </div>
        <div class="review_item">
          <div class="author_block clearfix">
            <img src="images/ava3.jpg" alt="">
            <div class="author_info">
              <div class="name">Євгенія Власенко</div>
              <div class="text">28 років</div>
            </div>
            <div class="info">
              <div class="rating"></div>
              <div class="date">сьогодні</div>
            </div>
          </div>
          <p>Дуже боялась замовити чоловіку без примірки, але все таки вирішила спробувати. Оператор дуже вічливий.
            Допоміг підібрати розмір і все пройшло на ура) Тактична футбока точно як на фото.</p>

        </div>
      </div>
    </section>

    <!-- /reviews 3 -->


    <!-- order steps 1 -->
    <div class="tlt">
      <h2 class="title"><span>Як зробити</span><br> замовлення?</h2>
    </div>
    <div class="order_steps1">
      <div class="step_item">
        <div class="step_wrapper">
          <img src="images/order_steps__step1_icon.png" alt="">
          <h4>Заявка</h4>
          <p>Заповніть форму на сайті</p>
        </div>
      </div>
      <div class="step_item">
        <div class="step_wrapper">
          <img src="images/order_steps__step2_icon.png" alt="">
          <h4>Дзвінок</h4>
          <p>Наш менеджер зателефонує вам для уточнення деталей замовлення</p>
        </div>
      </div>
      <div class="step_item">
        <div class="step_wrapper">
          <img src="images/order_steps__step3_icon.png" alt="">
          <h4>Відправка</h4>
          <p>Доставимо ваше замовлення на протязі<br>1-3 днів</p>
        </div>
      </div>
      <div class="step_item">
        <div class="step_wrapper">
          <img src="images/order_steps__step4_icon.png" alt="">
          <h4>Отримання</h4>
          <p>Оплата при отриманні на новій пошті</p>
        </div>
      </div>
    </div>



    <!-- order 3 -->
    <section class="offer_section offer3 order">
      <h1 class="main_title">-50% ПРЯМО ЗАРАЗ</h1>
      <div class="info_block">
        <p class="subtitle">Встигни замовити свій розмір по акції!<br></p>
        <div class="discount"><b>50% Знижка</b></div>
      </div>
      <img src="img/tactical-tshirt/2.jpg" alt="" style="width: 100%;">
      <div class="price_block">

        <div class="price_item old">
          <div class="text">Звичайна ціна:</div>
          <div class="value">898грн</div>
        </div>
        <div class="price_item new">
          <div class="text">Ціна сьгодні:</div>
          <div class="value">449грн</div>
        </div>
      </div>
      <div class="timer_block clearfix">
        <p>До кінця Акції залишилось:</p>
        <div class="timer clearfix">
          <div class="timer_item">
            <div class="count hours"></div>
            <div class="text">часов</div>
          </div>
          <div class="timer_item">
            <div class="count minutes"></div>
            <div class="text">минут</div>
          </div>
          <div class="timer_item">
            <div class="count seconds"></div>
            <div class="text">секунд</div>
          </div>
        </div>
      </div>
      <!--<div class="products_count"><b>Встигни замовити по акції!</b><br><b>СТИЛЬНУ та ТЕПЛУ куртку</b></div>-->

      <form id="order_form" class="order_form" action="form.php" method="post">

        <input class="field" type="text" name="name" placeholder="Введіть Ім'я та Прізвище" required pattern="^[A-Za-zА-Яа-яіІЁё\s]+$">
        <input class="field" type="tel" name="phone" placeholder="Введіть Ваш телефон" required pattern="[\+]\d{2}\s[\(][0][3,6,9,5,7][9,7,8,6,0,5,3][\)]\s\d{3}[\-]\d{2}[\-]\d{2}">
        <!-- <select name="comment">
          <option value="Хакі тактична coolmax">Хакі тактична coolmax</option>
          <option value="Чорна тактична Coolmax">Чорна тактична Coolmax</option>
        </select> -->
        <button class="button">Оформити замовлення</button>
      </form>

      <script type="text/javascript">
          let inputs = document.querySelectorAll('input[type="tel"]');
          let im = new Inputmask("+38 (999) 999-99-99");
          im.mask(inputs);
      </script>

      <div class="products_count">Залишилось <b>17</b> тактичних футболок по акції</div>
    </section>

    <!-- /order 3 -->

    <!-- footer -->

    <footer class="footer_section copyright">
      <p>ПП "ТЕРМО ОДЯГ"</p>
      <p>ЄГРПОУ 31934029</p>
      <p>Україна, 50023, ВУЛ. ПОЛТАВСЬКА, 211, Г, 12, М. ЧЕРНІГІВ, ПЕРШОТРАВНЕВИЙ РАЙОН, ЧЕРНІГІВСЬКА ОБЛАСТЬ</p>
      <p>+3809935434558</p>

      <br>
      <a target="_blank" href="politics.html">Політика Конфеденційності</a><br>
      <a target="_blank" href="oferta.html">Угода користувача</a><br>
      <a target="_blank" href="vozvrat.html">Обмін і повернення</a>
      <br>
      <p>Термін акції з 1.02.2022 до 28.02.2022</p>


      <br>
      <br>
      <p>Сертифікат відповідності:</p>
      <a target="_blank" style="    color: rgba(255,255,255,0.8);
	      margin: 30px 0;
	      display: block;" href="/c.jpg"><img style="    max-height: 200px;" src="/c.jpg"
          alt="Сертифікат відповідності"><span>Сертифікат відповідності</span></a>
    </footer>
    <!-- /footer -->

  </div>

  <!-- scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>





  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script src="js/scripts.js"></script>

  <style>
    .slick-prev:before, .slick-next:before {
      color: red;
    }
  </style>

  

</body>

</html>
<!-- Localized -->