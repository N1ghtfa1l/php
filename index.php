
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400i|Open+Sans:700|Raleway:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="description" content="Описание страницы" />
    <meta name="keywords" content="создание сайтов, верстка сайтов" />
    <meta name="google" content="notranslate" />
    <title>Пушкинский музей</title>
    <link rel="stylesheet" href="">
    
    <?php global $connect; require_once 'connect.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <nav class="nav" id="nav">
                    <a class="nav__link" href="#" data-scroll="#features">География музея</a>
                    <a class="nav__link" href="#" data-scroll="#works">Залы музея</a>
                    <a class="nav__link" href="#" data-scroll="#team">Наш персонал</a>
                    <a class="nav__link" href="#" data-scroll="#reviews">Галерея</a>
                    <a class="nav__link" href="#popup">Информация о музее</a>
                    <a class="nav__link" href="second/second.html" >Купить билет</a>

                    <div id="popup" class="popup">
                        <div class="popup__body">
                            <div class="popup__content">
                                <div class="popup__title">Краткая информация о музее</div>
                                <div class="popup__text">Государственный музей изобразительных искусств имени А. С. Пушкина
                                    (сокр. ГМИИ имени А. С. Пушкина), Пушкинский музей — российский государственный
                                    художественный музей в Москве, одно из крупнейших в современной России собраний
                                    западного искусства. Созданный по инициативе историка и археолога, профессора
                                    Московского университета И. В. Цветаева, музей был открыт в 1912 году под названием
                                    «Музей изящных искусств имени императора Александра III при Императорском Московском
                                    университете». Главное здание музея было построено по проекту архитектора Романа Клейна
                                    в неоклассическом стиле в виде античного храма. Изначально музей был задуман как
                                    учебный, однако после революции 1917 года учреждение было преобразовано в
                                    Государственный музей изобразительных искусств. В 1937 году музей получил имя поэта
                                    Александра Пушкина. В 1991 году ГМИИ имени Пушкина внесли в Государственный свод особо
                                    ценных объектов культурного наследия народов Российской Федерации.
                                </div>
                                <a class="popup__close" href="#">X</a>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <!-- Intro -->
    <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner animation">
                <h1 class="intro__title">Государственный музей изобразительных искусств имени А.С. Пушкина</h1>
                <h2 class="intro__subtitle">Государственный музей изобразительных искусств имени А. С. Пушкина, Пушкинский
                    музей — российский государственный художественный музей в Москве, одно из крупнейших в современной
                    России собраний западного искусства.</h2>
            </div>
        </div>
    </div>


    <!-- Features -->
    <div class="container" id="features">
        <div class="features animation">
            <div class="features__item">
                <img class="features__icon" src="img/features/mus1.png" alt="">
                <h4 class="features__title">ГЛАВНОЕ ЗДАНИЕ</h4>
                <div class="features__text">ул. Волхонка, 12 Живопись старых мастеров, подлинники Античности и Востока,
                    учебные слепки
                </div>
                <div id="map1"></div>
            </div>

            <div class="features__item">
                <img class="features__icon" src="img/features/mus2.png" alt="">
                <h4 class="features__title">ГАЛЕРЕЯ ИСКУССТВА СТРАН ЕВРОПЫ
                    И АМЕРИКИ</h4>
                <div class="features__text">ул. Волхонка, 14

                    Живопись французских импрессионистов, постимпрессионистов и мастеров начала XX века
                </div>
                <div id="map2"></div>
            </div>

            <div class="features__item">
                <img class="features__icon" src="img/features/mus3.png" alt="">
                <h4 class="features__title">МЕМОРИАЛЬНАЯ КВАРТИРА С.Т. РИХТЕРА</h4>
                <div class="features__text">ул. Большая Бронная, 2/6, 16 этаж, кв. 58

                    Квартира одного из величайших пианистов XX века
                </div>
                <div id="map3"></div>
            </div>
        </div><!-- /.features -->
    </div><!-- /.container -->


    <!-- Works -->
    <div class="works" id="works">
        <div class="works__item">
            <img class="works__photo" src="img/works/zal1.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Зал музея</div>
                <div class="works__text">Фото внутри</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/zal2.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Зал музея</div>
                <div class="works__text">Фото внутри</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/work-3.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Фотография сделаная в музее</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/work-4.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Фотография сделаная в музее</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/work-5.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Фотография сделаная в музее</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/zal3.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Зал музея</div>
                <div class="works__text">Фото внутри</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/zal4.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Зал музея</div>
                <div class="works__text">Фото внутри</div>
            </div>
        </div>

        <div class="works__item">
            <img class="works__photo" src="img/works/zal5.jpg" alt="">
            <div class="works__content">
                <div class="works__title">Зал музея</div>
                <div class="works__text">Фото внутри</div>
            </div>
        </div>
    </div><!-- /.works -->


    <!-- Team -->
    <div class="team" id="team">
        <div class="container">
            <div class="team__inner animation">

                <div class="team__item">
                    <img class="team__photo" src="img/team/team-1.jpg" alt="">
                    <div class="team__name">Карина Новикова</div>
                    <div class="team__prof">куратор</div>
                    <div class="team__text">
                        <p>Карина Новикова один из лучших кураторов нашего музея. Человек, который генерирует идеи и делает
                            наши выставки запоминающимися! </p>
                    </div>
                </div>

                <div class="team__item">
                    <img class="team__photo" src="img/team/team-2.jpg" alt="">
                    <div class="team__name">Антон Власов</div>
                    <div class="team__prof">Куратор</div>
                    <div class="team__text">
                        <p>Антон - самый опытный куратор нашего музея, занимает свою должность уже 7 лет и предлагает самые
                            креативные тематики для выставок!</p>
                    </div>
                </div>

                <div class="team__item">
                    <img class="team__photo" src="img/team/team-3.jpg" alt="">
                    <div class="team__name">Виктория Шульц</div>
                    <div class="team__prof">Директор музея</div>
                    <div class="team__text">
                        <p>Руководит производственной и финансово-экономической деятельностью музея, неся ответственность за
                            последствия принимаемых решений, сохранность и эффективное использование имущества.</p>
                    </div>
                </div>

                <div class="team__item">
                    <img class="team__photo" src="img/team/team-4.jpg" alt="">
                    <div class="team__name">Вероника Блиновская</div>
                    <div class="team__prof">Зам. директора</div>
                    <div class="team__text">
                        <p>Менеджер высшего звена, прнимает участие в разработке стратегических решений, управляет
                            персоналом, отбирает работников на должность, контролирует деятельность музея в целом.</p>

                    </div>
                </div>

            </div><!-- /.team__inner -->
        </div><!-- /.container -->
    </div><!-- /.team -->


    <!-- Testimonials -->
    <div class="reviews" id="reviews">
        <div class="container">

            <div class="reviews__slider" id="reviewsSlider">
                <div class="slick-item">
                    <div class="reviews__item">
                        <div class="reviews__photo">
                            <img class="reviews__img" src="img/reviews/pict2.jpg" alt="">
                        </div>
                        <div class="reviews__content">
                            <div class="reviews__text">Пятницы в Пушкинском</div>
                            <div class="reviews__author">19 января - 26 апреля 2024. Галерея искусства стран Европы и
                                Америки.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-item">
                    <div class="reviews__item">
                        <div class="reviews__photo">
                            <img class="reviews__img" src="img/reviews/pict1.jpg" alt="">
                        </div>
                        <div class="reviews__content">
                            <div class="reviews__text">От цвета к свету</div>
                            <div class="reviews__author">26 марта - 30 июня 2024. Галерея искусства стран Европы и Америки
                                XIX-XX веков.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </div><!-- /.reviews -->


    <!-- schedule -->
    <div class="schedule" id="schedule">
        <div class="container">
            <div class="schedule_inner">
                <table>
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Дата начала</th>
                    </tr>
                    <?php
                    $exhibitions = mysqli_query($connect, "SELECT * FROM `exhibition_schedule`");
                    $exhibitions = mysqli_fetch_all($exhibitions);
                    foreach ($exhibitions as $exhibition) {
                    ?>
                        <tr>
                            <td><?= $exhibition[1] ?> </td>
                            <td><?= $exhibition[2] ?> </td>
                            <td><?= $exhibition[3] ?> </td>
                            <?php
                            if ($_COOKIE['admin'] != false) :
                            ?>
                                <td><a class="btn btn--red" href="delete.php?id=<?= $exhibition[0] ?>"> Удалить</a></td> <?php endif; ?>

                        </tr>
                    <?php
                    }
                    ?>

                </table>
                <form action="create.php" method="post">
                    <p> Название </p>
                    <input type="text" name="name">
                    <p>Описание</p>
                    <input name="description">
                    <p>Дата начала</p>
                    <?php
                    if ($_COOKIE['admin'] != false) :
                    ?>
                        <input type="date" name="data_start"> <br>
                        <button type="submit">Добавить</button>
                    <?php endif; ?>
                </form>
                <?php
                if ($_COOKIE['admin'] == '') :
                ?>
                    <div class="auth">
                        <form action="auth.php" method="post">
                            <input type="text" name="login" placeholder="login">
                            <input type="password" name="pass" placeholder="password">
                            <button type="submit">Войти</button>
                        </form>
                    </div>
                <?php endif; ?>




            </div>
        </div>


        <!-- Footer -->
        <footer class="footer">
            <div class="container">

                <div class="footer__inner">
                    <div class="footer__block">
                        <h4 class="footer__title">Адрес</h4>
                        <address class="footer__address">
                            <div>ул. Волхонка, 12</div>
                        </address>
                    </div>

                    <div class="footer__block">
                        <h4 class="footer__title">Контакты</h4>
                        <div class="social  social--footer">

                        </div>
                    </div>

                    <div class="footer__block">
                        <h4 class="footer__title">Музей</h4>
                        <div class="footer__text">
                            <p>8 800 555 35 35</p>
                        </div>
                    </div>
                </div><!-- /.footer__inner -->

            </div><!-- /.container -->

            <div class="copyright">
                <div class="container">
                    <div class="copyright__text">
                        <div>Все права защищены

                        </div>
                    </div>
                </div>
        </footer>


        <!-- Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=06bf498c-dbe6-464b-ab5c-64e47f6caf17&lang=ru_RU" type="text/javascript">
        </script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
        <script src="js/object.js"></script>


</body>

</html>