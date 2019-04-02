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
                                    <button type="button" class="btn btn-bay btn-yellow" title="Заказать набор">{{ trans('landing.bayBtn') }}</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            

        </main>

        

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>