# Тестовое задание
Пожалуйста замените стартовую страницу проекта на лендинг из папки design.

* fullscreen.jpg - макет для полноразмерной страницы
* mobile.jpg - макет адаптивной верстки

Для верстки использовать webpak. <br/>
Для билдинга webpak, вам может понадобить установить npm c cross-env<br/>
<pre>npm install --global cross-env 
npm install --no-bin-links
npm run dev
</pre>
Стили положить в /resources/saas/landings/common.scss<br/>
Скрипты положить в /resources/js/landings/common.js<br/>
Картинки импортировать из /resources/images в /public/images средствами webpak<br/>
Для искриптов используйте пожалуйста jQuery. <br/>
Использование Bootstrap 4 приветствуется. <br/>
Все картинки для верстки в resource/images. <br/>

Шрифты:

<pre>
@font-face {
  font-family: 'Proxima Nova';
  src: url('../../fonts/ofont.ru_Proxima Nova.eot');
  src: local('☺'), url('../../fonts/ofont.ru_Proxima Nova.woff') format('woff'), url('../../fonts/ofont.ru_Proxima Nova.ttf') format('truetype'), url('../../fonts/ofont.ru_Proxima Nova.svg') format('svg');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Proxima Nova';
  src: url('../../fonts/ProximaNova-Bold.eot');
  src: local('☺'), url('../../fonts/ProximaNova-Bold.woff') format('woff'), url('../../fonts/ProximaNova-Bold.ttf') format('truetype'), url('../../fonts/ProximaNova-Bold.svg') format('svg');
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Proxima Nova';
  src: url('../../fonts/ProximaNova-Semibold.eot');
  src: local('☺'), url('../../fonts/ProximaNova-Semibold.woff') format('woff'), url('../../fonts/ProximaNova-Semibold.ttf') format('truetype'), url('../../fonts/ProximaNova-Semibold.svg') format('svg');
  font-weight: 600;
  font-style: normal;
}

@font-face {
  font-family: "DIN Condensed";
  src: url("../../fonts/0269f717557cb1defe0fb4055be31939.eot"); /* IE9*/
  src: url("../../fonts/0269f717557cb1defe0fb4055be31939.eot?#iefix") format("embedded-opentype"), /* IE6-IE8 */
  url("../../fonts/0269f717557cb1defe0fb4055be31939.woff2") format("woff2"), /* chrome、firefox */
  url("../../fonts/0269f717557cb1defe0fb4055be31939.woff") format("woff"), /* chrome、firefox */
  url("../../fonts/0269f717557cb1defe0fb4055be31939.ttf") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("../../fonts/0269f717557cb1defe0fb4055be31939.svg#DIN Condensed W08 Regular") format("svg"); /* iOS 4.1- */
}
</pre>

###### Валидация:
Прописать базовую HTML5 валидаию:
* Все поля обязательные

Скрипты:
* При нажатии кнопки Купить - пользователя должно скролить к заголовку "Купить календарь и книгу".
* Варианты способов доставки "Самовывоз/Доставка" должны переключаться. Активный вариант на черном фоне.


