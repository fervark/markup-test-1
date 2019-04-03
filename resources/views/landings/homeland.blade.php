<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Тестовое задание</title>
    <meta name="description" content="Тестовое задание Smart Reading">

    <!-- Styles -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper" id="app">
        <header>
            <div class="container">
                <div class="head--topline">
                    <div class="head--logo" title="{{ trans('landing.companyName') }}"></div>
                    <div class="head--contacts">
                        <a href="mailto:{{ trans('landing.companyMail') }}" class="head--mail">
                            {{ trans('landing.companyMail') }}
                        </a>
                        <a href="tel:{{ trans('landing.companyPhone') }}" class="head--phone">
                            {{ trans('landing.phoneLabel') }} {{ trans('landing.companyPhone') }}
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="headSlide">
                <div class="headSlide--item firstSlide">
                    <div class="container">
                        <div class="headSlide--box">

                            <div class="headSlide--title h1">
                                2019 - Год личной эффективности
                            </div>
                            <div class="headSlide--subtitle h1">
                                Впервые! Календарь и книга, дополняющие друг друга!
                            </div>

                            <div class="headAction--box">
                                <div class="headAction--before">
                                    Задействуйте все каналы
                                </div>
                                <div class="headAction--itemBox">
                                    <div class="headAction--item headAction--item_image">образ</div>
                                    <div class="headAction--item headAction--item_text">текст</div>
                                    <div class="headAction--item headAction--item_audio">аудио</div>
                                </div>
                                <div class="headAction--after">
                                    И вы завершите 2019 год с другим уровнем <br>продуктивности и уверенности в себе!
                                </div>
                                <div class="headAction--btnBox">
                                    <a href="#sectionOrder-id" class="btn btn-bay btn-yellow" title="Перейти к заказу" rel="nofollow">{{ trans('landing.bayBtn') }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="sectionKit">
                <div class="container">
                    <div class="sectionKit--box">
                        <div class="sectionKit--item">
                            <img src="{{ asset('images/collections_1.png') }}" alt="Изображение 1">
                            <div class="sectionKit--infoBox">
                                <div class="sectionKit--info">
                                    <div class="sectionKit--title">What is Lorem Ipsum?</div>
                                    <div class="sectionKit--text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <div class="sectionKit--item">
                            <img src="{{ asset('images/collections_2.png') }}" alt="Изображение 2">
                            <div class="sectionKit--infoBox">
                                <div class="sectionKit--info">
                                    <div class="sectionKit--title">What is Lorem Ipsum?</div>
                                    <div class="sectionKit--text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <div class="sectionKit--item">
                            <img src="{{ asset('images/collections_3.png') }}" alt="Изображение 3">
                            <div class="sectionKit--infoBox">
                                <div class="sectionKit--info">
                                    <div class="sectionKit--title">What is Lorem Ipsum?</div>
                                    <div class="sectionKit--text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sectionOrder" id="sectionOrder-id">
                <div class="container">
                    <div class="sectionOrder--box">
                        <div class="sectionOrder--title h2">{{ trans('landing.orderTitle') }}</div>
                        <form action="#" method="POST" class="orderForm">
                            <div class="orderForm--row">
                                <div class="orderForm--itemLabel">1. Количество</div>
                                <div class="orderForm--item orderForm_string ">
                                    <label for="#count-id" class="count_label">Укажите число от 1 до 20</label>
                                    <input type="number" 
                                           name="count" 
                                           class="formInput count_input" 
                                           id="count-id" 
                                           value="3" 
                                           placeholder="1" 
                                           min="0" 
                                           max="20"
                                           title="Количество товаров"
                                           required>
                                </div>
                            </div>
                            <div class="orderForm--row">
                                <div class="orderForm--itemLabel">2. Контактные данные</div>
                                <div class="orderForm--item col-3">
                                    <label>Фамилия</label>
                                    <input type="text" 
                                           name="surname" 
                                           class="formInput"
                                           title="Укажите вашу фамилию"
                                           required>
                                </div>
                                <div class="orderForm--item col-3">
                                    <label>Имя</label>
                                    <input type="text" 
                                           name="name" 
                                           class="formInput"
                                           title="Укажите ваше имя"
                                           required>
                                </div>
                                <div class="orderForm--item col-3">
                                    <label>Отчество</label>
                                    <input type="text" 
                                           name="middlename" 
                                           class="formInput"
                                           title="Укажите ваше отчество"
                                           required>
                                </div>
                            </div>
                            <div class="orderForm--row">
                                <div class="orderForm--item col-8">
                                    <label>Ваш электронный адрес</label>
                                    <input type="text" 
                                           name="mail" 
                                           class="formInput" 
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                           title="Укажите e-mail"
                                           required>
                                </div>
                                <div class="orderForm--item col-4">
                                    <label>Телефон</label>
                                    <input type="text" 
                                           name="phone" 
                                           class="formInput phone"
                                           title="Укажите номер телефона"
                                           required>
                                </div>
                            </div>
                            <div class="orderForm--row">
                                <div class="orderForm--item">
                                    <label>Комментарий к заказу</label>
                                    <textarea name="massage" 
                                              class="formInput"
                                              title="Укажите адрес доставки и комментарий к заказу"
                                              required></textarea>
                                </div>
                            </div>
                            <div class="orderForm--row">
                                <div class="orderForm--itemLabel">3. Спобоб получения</div>
                                <div class="orderForm--item">
                                    <div class="cbx">
                                        <input type="radio" name="delivery" class="formCbx" id="pickup-order">
                                        <label for="#pickup-order">Самовывоз</label>
                                    </div>
                                    <div class="cbx">
                                        <input type="radio" name="delivery" class="formCbx" id="delivery-order" checked>
                                        <label for="#delivery-order">Доставка</label>
                                    </div>
                                </div>
                            </div>
                            <div class="orderForm--row align_center">
                                <button type="submit" class="btn btn-bay btn-yellow" title="Заказать набор">{{ trans('landing.bayBtn') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/common.js') }}"></script>
</body>
</html>