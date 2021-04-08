<div class="header">
    <div> <?php if(isset($_COOKIE['user'])):echo "Cookie встановлено";endif; ?></div>
    <div class="container">
        <div class="top">
            <div class="logo">
                <a href="http://localhost/PaperPlanet/?page=lending"><div class="logo-img lines"><img src="images/logo.png" alt="logo"></div></a>
                <div class="logo-name lines">
                    <div class="header-name ">Paper Planet</div>
                    <div class="header-descript">Магазин сучасної канцелярії</div>
                </div>
            </div>

            <div class="phones">
                <div class="phone">
                    <img class="tel line" src="icons/telephone.svg" alt=""/>
                    <div class="inf-syle line"> +38 099 765 43 56</div>
                </div>
                <div class="phone">
                    <img class="tel line" src="icons/telephone.svg" alt=""/>
                    <div class="inf-syle line"> +38 097 356 60 61</div>
                </div>
                <div class="phone">
                    <img class="tel line" src="icons/telephone.svg" alt=""/>
                    <div class="inf-syle line"> +38 063 827 20 82</div>
                </div>
            </div>
            <div class="header__info inf-syle">Ми працюємо
                <br>з Понеділка по Суботу
                <br>з 9:00 до 20:00
                <br>м. Київ, вул. Василя Стуса 28а
            </div>
        </div>
        <div class="bottom">
            <div class="bottom_menu">
                <ul class="menu">
                    <img class="menu__icon line" src="icons/menu.svg" alt="" tabindex="0"/>
                    <ul class="submenu">
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text1" >Каталог товарів</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Блокноти в палітурці</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Блокноти на спіралі</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Кольорові блокноти</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Планери</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Скетчбуки</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Ручки/маркери/олівці</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Скотчи/скріпки</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Календарі</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Стікери</li></a>
                        <a href="http://localhost/PaperPlanet/?page=container"><li class="head-text2">Пенали</li></a>
                        <a href="http://localhost/PaperPlanet/?page=info-page"><li class="head-text1" >Клієнтам</li></a>
                        <a href="http://localhost/PaperPlanet/?page=info-page"><li class="head-text2">Доставка і оплата</li></a>
                        <a href="http://localhost/PaperPlanet/?page=info-page"><li class="head-text2">Відгуки</li></a>
                        <a href="http://localhost/PaperPlanet/?page=info-page"><li class="head-text2">Про нас</li></a>
                        <a href="http://localhost/PaperPlanet/?page=info-page"><li class="head-text2">Обмін та повернення</li></a>
                        <a href="http://localhost/PaperPlanet/?page=info-page"><li class="head-text2">Контакти</li></a>

                    </ul>
                    <img class="icon-loupe_1 line" src="icons/loupe.svg" alt=""/>
                </ul>


            </div>
            <div class="menu-text">
                <a class="del text1" href="http://localhost/PaperPlanet/?page=container">Каталог товарів</a>
                <a class="del text1" href="http://localhost/PaperPlanet/?page=info-page">Контакти</a>
                <a class="del text2" href="http://localhost/PaperPlanet/?page=info-page">Клієнтам</a>
            </div>
            <div class="search">
                <span class="search_text">Пошук</span>
                <div class="buttom">
                    <img class="icon-loupe" src="icons/loupe.svg" alt=""/>
                </div>
            </div>

            <div class="button_icon">
                <a><img class="icon-heart" src="icons/heart.svg" alt=""/></a>
                <input type="image" onclick="show('block')" class="icon-user" src="icons/user.svg" >
                <div onclick="show('none')" id ="gray"></div>
                <a><img class="icon-shopping-cart" src="icons/shopping-cart.svg" alt=""/></a>
            </div>
            <div id="window">
                <img class="close" src="icons/cancel.svg" alt=""  onclick="show('none')">
                <div class="logo_enter">
                    <a href="http://localhost/PaperPlanet/?page=lending"><div class="logo-img_enter lines"><img src="images/logo.png" ></div></a>
                    <div class="logo-name_enter lines">
                        <div class="header-name_enter ">Paper Planet</div>
                        <div class="header-descript_enter">Магазин сучасної канцелярії</div>
                    </div>
                </div>
                <div class="form">
                    <h2>Вхід</h2>
                    <form action="autorization.php" method="post" name="f1">
                        <input type="text" placeholder="Логін" name='login' class="input pole">
                        <input type="password" placeholder="Пароль" name='password' class="input pole">
                        <button type="submit" name="sab" class="input submit">Увійти</button>
                        <div class="text-1_enter">Забули пароль?</div>
                        <div class="text-2_enter">Увійти за допомогою</div>
                        <img class="icon-facebook icon_enter line" src="icons/facebook_br.svg" alt=""/>
                        <img class="icon-google icon_enter line" src="icons/google.svg" alt=""/>
                        <div class="text-2_enter line">У вас ще немає облікового запису? </div>
                        <div class="text-3_enter line">Зареєструватися</div>
                    </form>
                </div>
            </div>
            <script>
                function show(state)
                {
                    document.getElementById('window').style.display = state;
                    document.getElementById('gray').style.display = state;
                }
            </script>
        </div>
    </div>

</div>