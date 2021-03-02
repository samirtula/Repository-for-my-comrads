<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Написать письмо</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
  <link href="styles/app.css" rel="stylesheet"></head>
  <body id="snt">
    <header class="header">
      <div class="header__wrapper">
        <div class="header__meet">
          <div class="header__meet-clock-image"></div><span class="header__meet-text">Общее собрание состоится 15.05.2021 г.</span>
        </div>
        <div class="header__tel">
          <div class="header__tel-phone-image"></div><span class="header__tel-num">8-910-165-29-07</span>
        </div>
        <div class="header__mail">
          <div class="header__mail-image"></div><span class="header__mail-text">snt.solnechnyi-92@mail.ru</span>
        </div>
      </div>
    </header>
    <nav class="nav">
      <div class="nav__wrapper">
        <div class="nav__logo-image"></div><a href="index.php">главная</a><a href="news.php">новости</a><a href="authorization.php">личный кабинет</a><a href="letter.php">написать в правление</a><a href="forum.php">форум</a><a href="boards.php">объявления</a><a href="gallery.php">фотогалерея</a><a href="weather.php">погода</a>
        <div class="nav__burger-menu"><span></span></div>
        <div class="footer__social-links"><a class="footer__social-links-login" href="authorization.php"></a><a class="footer__social-links-vk" href="#"></a><a class="footer__social-links-ok" href="#"></a></div>
      </div>
      <div class="nav__burger-wrapper clicked">
        <div class="nav__burger-block"><a href="index.php">главная</a><a href="news.php">новости</a><a href="authorization.php">личный кабинет</a><a href="letter.php">написать в правление</a><a href="forum.php">форум</a><a href="boards.php">объявления</a><a href="gallery.php">фотогалерея</a><a href="weather.php">погода</a></div>
      </div>
    </nav>
    <section class="letter-image images">
      <div class="letter-image__title">
        <div class="letter-image__title-headers">
          <h1>написать письмо <br>в правление</h1>
        </div>
      </div>
    </section>
    <section class="letter">
      <div class="letter__wrapper">
        <form class="letter__form">
          <input type="text" placeholder="ФИО">
          <input type="email" placeholder="Адрес электронной почты">
          <input type="tel" placeholder="Номер телефона">
          <input type="text" placeholder="Тема письма / Номер участка">
          <textarea placeholder="Сообщение"></textarea>
          <input class="letter__form-button" type="submit" value="Отправить">
        </form>
      </div>
    </section>
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="nav__logo-image"></div><a href="index.php">главная</a><a href="news.php">новости</a><a href="authorization.php">личный кабинет</a><a href="letter.php">написать в правление</a><a href="forum.php">форум</a><a href="boards.php">объявления</a><a href="gallery.php">фотогалерея</a><a href="weather.php">погода</a>
        <div class="footer__social-links"><a class="footer__social-links-login" href="authorization.php"></a><a class="footer__social-links-vk" href="#"></a><a class="footer__social-links-ok" href="#"></a></div>
      </div>
    </footer>
  <script type="text/javascript" src="scripts/app.js"></script></body>
</html>