<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="icon" href="./images/favicon.ico">

    <title>ReaL Окна</title>
  </head>
  <body>
    <header class="header">
      <div class="header__bar">
        <img src="./images/logo.png" alt="" />
        <div class="header__barright">
          <a href="tel:+79042146778">+7(904)214-67-78</a>
          <p class="header__barbutton button__modal">Рассчитать стоимость</p>
        </div>
      </div>

      <div class="header__info">
        <h1>
          Качественные пластиковые окна по низкой цене
          <hr />
        </h1>

        <ul>
          <h3>Начинаем работы с первого дня</h3>
          <li>Выезд замерщика в течение 1 дня</li>
          <li>Более 25 лет на рынке</li>
          <li>Все работы ''под ключ''</li>
          <li>Скидки до 70%</li>
          <p class="button header__buttonpadding button__modal">
            ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
          </p>
        </ul>
      </div>
    </header>

    <div class="service">
      <div class="service__zagolovok">
        <h2>Наши услуги</h2>
        <div></div>
      </div>
      <div class="service__sliders">
        <img class="arrow__left" src="./images/arrow-left.png" alt="" />
        <img class="arrow__right" src="./images/arrow-right.png" alt="" />

        <div class="service__slider no__activeright">
          <div class="service__slideritemtransparent">
            <img src="./images/slider1.png" alt="" />
            <div class="slider__infotransparent">
              <div class="slider__infoheader">
                <h3>Теплое остекление1</h3>
                <div></div>
              </div>
              <i>от 4799 руб./м2</i>
              <p>Самые ЛУЧШИЕ решения для вашего балкона / лоджии ПОД КЛЮЧ</p>
            </div>
            <p class="service__button button__modal">Заказать услугу</p>
          </div>
        </div>
        <div class="service__slider active__slider">
          <div class="service__slideritemtransparent">
            <img src="./images/slider_two/works-slider2.jpg" alt="" />
            <div class="slider__infotransparent">
              <div class="slider__infoheader">
                <h3>Теплое остекление2</h3>
                <div></div>
              </div>
              <i>от 4799 руб./м2</i>
              <p>Самые ЛУЧШИЕ решения для вашего балкона / лоджии ПОД КЛЮЧ</p>
            </div>
            <p class="service__button button__modal">Заказать услугу</p>
          </div>
        </div>
        <div class="service__slider no__activeleft">
          <div class="service__slideritemtransparent">
            <img src="./images/slider_two/works-slider2.jpg" alt="" />
            <div class="slider__infotransparent">
              <div class="slider__infoheader">
                <h3>Теплое остекление3</h3>
                <div></div>
              </div>
              <i>от 4799 руб./м2</i>
              <p>Самые ЛУЧШИЕ решения для вашего балкона / лоджии ПОД КЛЮЧ</p>
            </div>
            <p class="service__button button__modal">Заказать услугу</p>
          </div>
        </div>
      </div>
    </div>

    <div class="request">
      <div class="request__zagolovok">
        <h2>Оставьте заявку сейчас и получите выезд замерщика бесплатно</h2>
        <div></div>
      </div>
      <div class="request__block">
        <div class="request__info">
          <p>Произведет необходимые замеры</p>
          <p>Проконсультирует с выбором продукции</p>
          <p>
            Рассчитает полную стоимость<br />
            ''под ключ'' бесплатно
          </p>

          <form action="" method="post">
            <input type="text" name="name" placeholder="Ваше имя" class="inputtext" />
            <input type="tel" name="tel" placeholder="Ваш телефон" class="inputtext" />

            <input
              type="submit"
              value="ЗАКАЗАТЬ УСЛУГИ"
              class="button request__button"
            />
          </form>
        </div>
        <div class="request__right">
          <img src="./images/measurer.png" alt="" />
        </div>
      </div>
    </div>

    <div class="installments">
      <div class="installment__info">
        <div class="empty"><img src="./images/Installments.png" alt="" /></div>
        <div class="installment__infoblock">
          <div class="installments__zagolovok">
            <h2>Рассрочка 0%</h2>
            <div></div>
          </div>
          <h3>от 3 до 12 месяцев без первого взноса</h3>
          <h4 class="">Заказывай сейчас - плати потом!</h4>
          <p class="installment__infotxt3">
            Теперь вы можете не отказывать себе в обустройстве своего жилища!
            Никакого первого взноса и никаких процентов - заказывайте то, что
            нравится по-настоящему.
          </p>

          <p
            class="button installment__button button__modal"
            id="button__modal"
          >
            Узнать подробности
          </p>
        </div>
      </div>
    </div>

    <div class="advantages">
      <div class="advantages__zagolovok">
        <h2>Мы предоставляем</h2>
        <div></div>
      </div>
      <div class="advantages__info">
        <div class="advantages__empty">
          <img src="./images/advantages-fon.png" alt="" />
        </div>
        <div class="advantages__infoblock">
          <div class="advantages__points">
            <p class="advantages__point1">Лучшие материалы</p>
            <p class="advantages__point4">Программу пожизненной гарантии</p>
            <p class="advantages__point2">Скидка до 70%</p>
            <p class="advantages__point5">Строгое соблюдение сроков</p>
            <p class="advantages__point3">Реально низкие цены</p>
          </div>

          <form action="" method="post">
            <input type="name" name="name" placeholder="Ваше имя" class="inputtext" />
            <input type="tel" name="tel" placeholder="Ваш телефон" class="inputtext" />

            <input
              type="submit"
              value="ЗАКАЗАТЬ УСЛУГИ"
              class="button advantages__button"
            />
          </form>
        </div>
      </div>
    </div>

    <div class="works">
      <div class="works__zagolovok">
        <h2>Наши работы</h2>
        <div></div>
      </div>
      <div class="works__info">
        <p>
          Хотите превратить балкон в теплое и уютное место? Мы можем реализовать
          вашу мечу! Посмотрите наши работы, которые мы завершили вчера!
        </p>
        <p>
          Во всех работах была комплексная отделка балконов, которая включала в
          себя несколько направлений: <br />• полное обустройство пространства -
          обшивка потолка и стен, утепление, покраска, наклейка обоев,
          проведение электричества, укладка пола и др.; <br />• обшивка панелями
          и замена крыши.
        </p>
      </div>

      <div class="works__slider" id="works_slider">
        <div class="works__slidercontainer">
          <div class="slider__items">
            <div class="works__slideritem">
              <img src="./images/slider_two/works-slider1.png" alt="" />
            </div>
            <div class="works__slideritem">
              <img src="./images/slider_two/works-slider2.jpg" alt="" />
            </div>
            <div class="works__slideritem">
              <img src="./images/slider_two/works-slider3.jpg" alt="" />
            </div>
            <div class="works__slideritem">
              <img src="./images/slider_two/works-slider4.jpg" alt="" />
            </div>
          </div>
        </div>
        <img class="arrow__top" src="./images/arrow-top.png" alt="" />
        <img class="arrow__bottom" src="./images/arrow-bottom.png" alt="" />
        <div class="works__smallfotocontainer">
          <div class="works__smallfoto">
            <img src="./images/slider_two/works-slider1.png" alt="" />
            <img src="./images/slider_two/works-slider2.jpg" alt="" />
            <img src="./images/slider_two/works-slider3.jpg" alt="" />
            <img src="./images/slider_two/works-slider4.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer__mapscontainer">
        <p class="button__topmap"></p>
        <p class="button__bottommap"></p>
        <div class="footer__maps">
          <div class="footer__map">
            <script
              type="text/javascript"
              charset="utf-8"
              async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aebda681cffa68c7372b7dc4910ebc3e8480681afc6bbb8e1488ed530823b781c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"
            ></script>

            <div class="footer__contacts">
              <div class="footer__zagolovok">
                <h2>Наши контакты</h2>
                <div></div>
              </div>

              <a href="tel:+79042146778">+7(904)214-67-78</a>
              <p class="footer__address">Борисоглебск</p>
              <p class="footer__info">Консультации по телефону круглосуточно</p>
              <p class="button footer__button button__modal">ОСТАВИТЬ ЗАЯВКУ</p>
            </div>
          </div>
          <div class="footer__map">
            <script
              type="text/javascript"
              charset="utf-8"
              async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aebda681cffa68c7372b7dc4910ebc3e8480681afc6bbb8e1488ed530823b781c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"
            ></script>
            <div class="footer__contacts">
              <div class="footer__zagolovok">
                <h2>Наши контакты</h2>
                <div></div>
              </div>

              <a href="tel:79042148811">+7(904)214-88-11</a>
              <p class="footer__address">Новохоперск</p>
              <p class="footer__info">Консультации по телефону круглосуточно</p>
              <p class="button footer__button button__modal">ОСТАВИТЬ ЗАЯВКУ</p>
            </div>
          </div>
          <div class="footer__map">
            <script
              type="text/javascript"
              charset="utf-8"
              async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aebda681cffa68c7372b7dc4910ebc3e8480681afc6bbb8e1488ed530823b781c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"
            ></script>
            <div class="footer__contacts">
              <div class="footer__zagolovok">
                <h2>Наши контакты</h2>
                <div></div>
              </div>

              <a href="tel:+79081439009">+7(908)143-90-09</a>
              <p class="footer__address">Поворино</p>
              <p class="footer__info">Консультации по телефону круглосуточно</p>
              <p class="button footer__button button__modal">ОСТАВИТЬ ЗАЯВКУ</p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer__privacy">
        <div class="footer__privacyleft">
          <p>© 2021 - 2022 "ReaL Окна"</p>
          <a href="">Политика конфиденциальности</a>
        </div>
        <div class="footer__privacyright">
          <p>Все права защищены</p>
          <a href="">Согласие на обработку персональный данных</a>
        </div>
      </div>
    </footer>
    <div class="modal modal__hidden" id="modal">
      <div class="modal__content">
        <div class="modal__header">
          <h2>ЗАПОЛНИТЕ ФОРМУ</h2>
          <div></div>
        </div>

        <div class="modal__body">
          <form action="" method="post" >
            <input type="name" name="name" placeholder="Ваше имя" class="inputtext" />
            <input type="tel" name="tel" placeholder="Ваш телефон" class="inputtext" />

            <textarea
              type="text"
              name="description"
              placeholder="Задайте вопрос"
              class="inputtext"
            ></textarea>

            <input
              type="submit"
              value="ОТПРАВИТЬ ЗАЯВКУ"
              class="button advantages__button"
            />
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="./js/modal.js"></script>
  <script src="./js/index.js"></script>
</html>

<?php
  require_once './mail_send.php';
  $name  = filter_var($_POST['name'],  FILTER_SANITIZE_STRING);
  $tel   = filter_var($_POST['tel'],   FILTER_SANITIZE_STRING);
  $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

  if (!$_POST['name'] || !$_POST['tel']) return;
  $result = sendMessage($name, $tel, $description);

  echo "<div class='poopap'><strong>" . $result .  ",</strong> заявка успешно отправлена, мы вам перезвоним </div>";
?>
