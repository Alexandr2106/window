<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <!--<link rel="stylesheet" href="./Constructor/Constructor_style.css">-->
  <link rel="stylesheet" href="Constructor/cons_style.css">
</head>

<body>
  <div class="page">
    <div id="header" class="" style="background-color: #F4F4F4;">
      <!--Сетка Лого-->
      <div class="container-xxl" style="background-color: #F4F4F4;">
        <div class="row align-items-center arr">

          <div class="col-md-4 logo">
            <div class="custom">
              <img src="img/logo.svg" class="img-fluid" alt="Logo">
              <img src="img/reh-shapka.png" class="img-fluid" alt="Logo">
            </div>
          </div>

          <div class="col-md-3 d-none d-md-block header1">
            <div class="custom">
              <p class="cl1">Установка и ремонт пластиковых окон, москитные сетки, остекление балконов в Москве и области.</p>
            </div>
          </div>

          <div class="col-md-3 header2">
            <div class="custom d-grid mx-auto">
              <p class="pcent">Оставте заявку на бесплатный <br> ↓замер↓</p>
              <button type="button" class="btn btn-dark" style="background-color: #50A0FF; border:none;">Заказать БЕСПЛАТНЫЙ замер</button>
              <p class="pcent down">Вам перезвонять в течении часа.</p>
            </div>
          </div>

          <div class="col-md-2 header3">
            <div class="custom kont">
              <ul class="list-unstyled">
                <li class="cl3"><img src="img/tel.svg" alt="telefone"> +7 (123) 456-78-90 </li>
                <li class="cl3"><img src="img/mail.svg" alt="mail"> paiXXXXX@XXX.ru</li>
                <li class="cl3"><img src="img/whatsapp.svg" alt="whatsapp"> +7 (123) 456-78-90</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <!---->

      <div class="menu">
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
          <div class="container-xxl">
            <a class="navbar-brand d-lg-none" href="#">Панель навигации</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-4 menu">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Товары и Услуги
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" onclick="pageContent(1)" href="#">Москитные сетки</a></li>
                      <li><a class="dropdown-item" onclick="pageContent(2)" href="#">Пластиковые окна</a></li>
                      <li><a class="dropdown-item" onclick="pageContent(3)" href="#">Остекление балконов</a></li>
                      <li><a class="dropdown-item" href="#">Регулеровка и ремонт окон пвх</a></li>
                      <li><a class="dropdown-item" href="#">Замена стеклопактов</a></li>
                    </ul>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Цены
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="1">Цены на пластиковые окна</a></li>
                      <li><a class="dropdown-item" href="#">Цены на остекление балконов</a></li>
                      <li><a class="dropdown-item" href="#">Цены на регулеровку и ремонт</a></li>
                      <li><a class="dropdown-item" href="#">Калькулятор маскитных сеток</a></li>
                      <li><a class="dropdown-item" href="#">Калькулятор стеклопакетов</a></li>
                    </ul>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      О нас
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Действие</a></li>
                      <li><a class="dropdown-item" href="#">Другое действие</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                    </ul>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Наши работы</a>
                  </li>
                  <img src="img/Line.svg" class="d-none d-lg-block" alt="line">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Конструктор заказа</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <hr>
    </div>


    <!--******************************************-->
    <div class="container-fluid slider">
      <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/slide2.jpg" class="d-block w-100" alt="...">

          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/slide3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
    <!--******************************************-->


    <main class="container-fluid" style="padding: 0;">

      <div class="container-xxl works">

        <div class="block-title">Наши работы</div>

        <!--Big Carousel-->
        <div id="carouselExampleControls" class="carousel slide big-carousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-group">
                <div class="card">
                  <img src="img/exaple1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="img/exaple2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="img/exaple1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-group">
                <div class="card">
                  <img src="img/exaple1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="img/exaple2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="img/exaple1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card-group">
                <div class="card">
                  <img src="img/exaple1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="img/exaple2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="img/exaple1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Установка трехстворчатых окон</h5>
                    <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>


        <!--Smart Carousel-->
        <div id="carouselExampleControls" class="carousel slide smart-carousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">

              <div class="card">
                <img src="img/exaple2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Установка трехстворчатых окон</h5>
                  <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                </div>
              </div>

            </div>
            <div class="carousel-item">

              <div class="card">
                <img src="img/exaple1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Установка трехстворчатых окон</h5>
                  <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                </div>
              </div>

            </div>
            <div class="carousel-item">

              <div class="card">
                <img src="img/exaple2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Установка трехстворчатых окон</h5>
                  <p class="card-text"><small class="text-muted">г. Москва, ул. Какая-то</small></p>
                </div>
              </div>

            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>


      </div>

      <div class="container-fluid form-bg" style="min-height: 475px;; background: url(img/form-bg.jpg); background-size: cover;
    background-position-y: center;">
        <div class="cont">
          <div>
            <div class="form-title">Вызвать замерщика бесплатно</div>
            <form>
              <div class="col form-subtitle">Оставьте свой номер телефона, и мы вам перезвоним</div>

              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Имя*" aria-label="Имя">
                </div>
                <div class="col">
                  <input type="tel" class="form-control" placeholder="Телефон" aria-label="Телефон" name="phone" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
                </div>
              </div>
              <div class="row">
                <div class="col">Нажимая кнопку, вы соглашаетесь с условиями Политики конфиденциальности</div>
                <div class="col button">
                  <button type="submit" class="btn btn-primary"><img src="img/pen.svg" alt="Кнопка записаться на замер"> Записаться на замер</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div id="pp">
        <?
        require './menu_page/content.php';
        ?>
      </div>
    </main>

    <div id="footer" class="d-none d-md-block" style="background-color: #363636;">
      <hr>
      <nav class="navbar navbar-dark" style="background-color: #363636;">
        <div class="container-xxl">

          <table class="table footer">
            <thead>
              <tr>
                <th class="thead">Контакты</th>
                <th class="thead">Услуги</th>
                <th class="thead">Цены</th>
                <th class="thead">Прочее</th>
              </tr>
            </thead>
            <tbody>
              <tr class="tbodyf">
                <td><img src="img/tel.svg" alt=""> +7 (123) 456-78-90</td>
                <td><a href="#">Москитные сетки</a></td>
                <td><a href="#">Цены на пластиковые окна</a></td>
                <td><a href="#">Конструктор заказа</a></td>
              </tr>
              <tr class="tbodyf">
                <td><img src="img/mail.svg" alt=""> paiXXXXXXX@XXX.ru</td>
                <td><a href="#">Пластиковые окна</a></td>
                <td><a href="#">Цены на остекление балконов</a></td>
                <td><a href="#">Наши работы</a></td>
              </tr>
              <tr class="tbodyf">
                <td><img src="img/whatsapp.svg" alt=""> WhatsApp +7 (123) 456-78-90</td>
                <td><a href="#">Остекление балконов</a></td>
                <td><a href="#">Цены на регулеровку и ремонт</a></td>
                <td><a href="#">О нас</a></td>

              </tr>
              <tr class="tbodyf">
                <td></td>
                <td><a href="#">Регулеровка и ремонт окон пвх</a></td>
                <td><a href="#">Калькулятор москитных сеток</a></td>
                <td><a href="admin/auth/auth.php">Администратор</a></td>
                <td></td>
              </tr>
              <tr class="tbodyf">
                <td></td>
                <td><a href="#">Замена стеклопакетов</a></td>
                <td><a href="#">Калькулятор стеклопакетов</a></td>

                <td></td>
              </tr>
            </tbody>
          </table>

        </div>
      </nav>
    </div>

    <div id="footer-smart" class="container-fluid" style="background-color: #363636;">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Контакты</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Услуги</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Цены</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Прочее</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2022 Пофессиональные Оконные Решения</p>
      </footer>
    </div>
  </div>


  <script src="js/bootstrap.bundle.js"></script>
  <script src="./js/jQuery.js"></script>
  <script src="./js/functions.js"></script>
  <script src="./Calculators/get.js"></script>
  <script src="./Constructor/Constructor_func.js"></script>
</body>

</html>