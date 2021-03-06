<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bank Publications</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script/addDepositAmount.js"></script>
    <script src="script/ru_datepicker.js"></script>
    <script src="script/calculation.js"></script>
    <script>
        $.datepicker.setDefaults($.datepicker.regional['ru']);
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="top">
            <header class="header">
                <div class="header__top container">
                    <img src="img/logo.png" alt="logo">
                    <ul class="header__top__phone">
                        <li class="header__top__phone__list"><a href="tel:+88001005005"
                                class="header__top__phone__link">8-800-100-5005</a></li>
                        <li class="header__top__phone__list"><a href="tel:+73452522000"
                                class="header__top__phone__link">+7 (3452) 522-000</a></li>
                    </ul>
                </div>
                <div class="header__bottom container">
                    <ul class="header__bottom__menu">
                        <li class="header__bottom__menu__list"><a href="#" class="header__bottom__menu__link">Кредитные
                                карты</a></li>
                        <li class="header__bottom__menu__list"><a href="index.php"
                                class="header__bottom__menu__link active__link">Вклады</a></li>
                        <li class="header__bottom__menu__list"><a href="#" class="header__bottom__menu__link">Дебетовая
                                карта</a></li>
                        <li class="header__bottom__menu__list"><a href="#"
                                class="header__bottom__menu__link">Страхование</a></li>
                        <li class="header__bottom__menu__list"><a href="#" class="header__bottom__menu__link">Друзья</a>
                        </li>
                        <li class="header__bottom__menu__list"><a href="#"
                                class="header__bottom__menu__link border__none">Интернет-банк</a></li>
                    </ul>
                </div>
            </header>
            <div class="site__content">
                <div class="content__main">
                    <ul class="content__menu container">
                        <li class="content__menu__list"><a href="#" class="content__menu__link">Главная</a></li>
                        <li class="content__menu__list"><a href="#" class="content__menu__link">Вклады</a></li>
                        <li class="content__menu__list"><a href="index.php"
                                class="content__menu__link new__link">Калькулятор</a>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <div class="content__main__form">
                        <h4 class="content__main__form__upper">Калькулятор</h4>
                        <form action="calc.php" method="POST" id="calculation">
                            <div class="content__form">
                                <div class="content__form__area">
                                    <div class=" block_1">Дата оформления вклада
                                    </div>
                                    <div class=" block_2">
                                        <input type="text" name="datepicker" id="datepicker" placeholder="дд.мм.гггг"
                                            class="content__form__input__area" required>
                                    </div>
                                    <div class="content__form__area__range"></div>
                                </div>
                                <div class="content__form__area">
                                    <div class=" block_1">Сумма вклада</div>
                                    <div class=" block_2">
                                        <input type="text" name="depositAmount" id="depositAmount"
                                            placeholder="10 000" class="content__form__input__area" required>
                                    </div>
                                    <div class="content__form__area__range">
                                        <input type="range" min="1000" max="3000000" step="1000" value="1500000"
                                            class="area__range" name="rangeDepositAmount" id="rangeDepositAmount"
                                            oninput="addDepositAmount()">
                                        <ul class="area__range__text">
                                            <li class="area_range__list">1 000 руб.</li>
                                            <li class="area_range__list">3 000 000 руб.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content__form__area">
                                    <div class=" block_1">Срок вклада</div>
                                    <div class=" block_2">
                                        <select size="1" name="period" id="period" class="content__form__input__area">
                                            <option value='1' selected="selected">1 год</option>
                                            <option value='2'>2 года</option>
                                            <option value='3'>3 года</option>
                                            <option value='4'>4 года</option>
                                            <option value='5'>5 лет</option>
                                        </select>
                                    </div>
                                    <div class="content__form__area__range"></div>
                                </div>
                                <div class="content__form__area">
                                    <div class=" block_1">Пополнение вклада</div>
                                    <div class="content__form__input__area block_radio block_2 ">
                                        <div> <input type="radio" id="Choice1" name="choice" value="No" checked>
                                            <label for="Choice1">Нет</label>
                                        </div>
                                        <div> <input type="radio" id="Choice2" name="choice" value="Yes">
                                            <label for="Choice2">Да</label>
                                        </div>
                                    </div>
                                    <div class="content__form__area__range"></div>
                                </div>
                                <div class="content__form__area">
                                    <div class=" block_1">Сумма пополнения вклада
                                    </div>
                                    <div class=" block_2">
                                        <input type="text" name="depositReplenishmentAmount"
                                            id="depositReplenishmentAmount" placeholder="10 000"
                                            class="content__form__input__area" required>
                                    </div>
                                    <div class="content__form__area__range">
                                        <input type="range" min="1000" max="3000000" step="1000" value="1500000"
                                            class="area__range" name="rangeDepositReplenishmentAmount"
                                            id="rangeDepositReplenishmentAmount"
                                            oninput="addDepositReplenishmentAmount()">
                                        <ul class="area__range__text">
                                            <li class="area_range__list">1 000 руб.</li>
                                            <li class="area_range__list">3 000 000 руб.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content__form__btn">
                                <button type="submit" class="button__form ">Рассчитать</button>
                                <p class="content__form__btn__text">Результат:</p>
                                <p class="content__form__btn__text" id="message"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer container">
            <ul class="footer__menu">
                <li class="footer__menu__list"><a href="#" class="footer__menu__link">Кредитные карты</a></li>
                <li class="footer__menu__list"><a href="index.php" class="footer__menu__link">Вклады</a></li>
                <li class="footer__menu__list"><a href="#" class="footer__menu__link">Дебетовая карта</a></li>
                <li class="footer__menu__list"><a href="#" class="footer__menu__link">Страхование</a></li>
                <li class="footer__menu__list"><a href="#" class="footer__menu__link">Друзья</a></li>
                <li class="footer__menu__list"><a href="#" class="footer__menu__link">Интернет-банк</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>