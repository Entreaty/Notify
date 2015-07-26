<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./MDL/material.min.css">
    <script src="./MDL/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.red-orange.min.css" />-->
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.blue_grey-indigo.min.css" />
    <link href="http://allfont.ru/allfont.css?fonts=roboto-condensed-regular" rel="stylesheet" type="text/css" />
    <!--AngularJS Filter-->
    <link rel="stylesheet" href="./newFilter/css/normalize.css">
    <script src="./newFilter/js/prefixfree.min.js"></script>
    <script src='./AngularJS/angular.min.js'></script>
    <script src="./newFilter/js/index.js"></script>
    <script src="./newFilter/js/index.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.1.5/angular.min.js'></script>
    <!-- Uses a header that contracts as the page scrolls down. -->
    <style>
        .waterfall-demo-header-nav .mdl-navigation__link:last-of-type  {
            padding-right: 0;
        }
    </style>
    <style>
        a {
            font-family: 'Roboto Condensed Regular', arial;
            font-size: 48px;
            color:dimgray;
            text-decoration: none;
        }
        A:hover {
            text-decoration: underline; /* Добавляем подчеркивание при наведении курсора на ссылку */
            color: orangered; /* Ссылка красного цвета */
    </style>
    <style>
        .animate-enter, .animate-leave {
            transition: 500ms ease-in all;
            position: relative;
            display: block;
        }
        .animate-enter.animate-enter-active, .animate-leave {
            left: 0;
        }
        .animate-leave.animate-leave-active, .animate-enter {
            left: 500px;
        }
    </style>
</head>
<body ng-app>

<!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <img style="max-width:60pt;border-radius:25%"
                 src="http://www.radionetplus.ru/uploads/posts/2014-04/1398792327_persis-clayton-weirs-36.jpg">

            <form method="get" style="padding-left:35pt">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input class="mdl-textfield__input" name="searRequest" type="text" id="sample3" />
                    <label class="mdl-textfield__label" for="sample3" style="color:#f5f5f5">Введите название или категорию..</label>
                </div>
            </form>

            <div class="mdl-layout-spacer"></div>


            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                <label class="mdl-button mdl-js-button mdl-button--icon"
                       for="waterfall-exp">
                    <i id="tt2" class="material-icons">filter</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input ng-model="search" class="mdl-textfield__input" type="text" name="sample"
                           id="waterfall-exp" />
                </div>
                <div style="background-color: #ffffff; color:dimgray" class="mdl-tooltip" for="tt2">
                    Фильтр
                </div>
            </div>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#scroll-tab-films" class="mdl-layout__tab is-active">Фильмы</a>
            <a href="#scroll-tab-serials" class="mdl-layout__tab">Сериалы</a>
            <a href="#scroll-tab-music" class="mdl-layout__tab">Музыка</a>
            <a href="#scroll-tab-cartoons" class="mdl-layout__tab">Мультфильмы</a>
            <a href="#scroll-tab-anime" class="mdl-layout__tab">Аниме</a>
            <a href="#scroll-tab-games" class="mdl-layout__tab">Игры</a>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Чебурда</span>
    </div>
    <main class="mdl-layout__content" ng-controller="myCtrl">
        <section class="mdl-layout__tab-panel is-active" id="scroll-tab-films">
            <div class="page-content">
                <div class="demo-grid-3 mdl-grid">
                    <div ng-animate="'animate'"
                         ng-repeat="result in data | filter:search"
                         align="center"
                         class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                        <a href="{{result.picture_big}}">
                            <img src="{{result.picture}}">
                            <a style="text-decoration: none;" href="">
                                <h5>
                                    {{result.title}}
                                </h5>
                            </a>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-serials">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-music">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-cartoons">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-anime">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-games">
            <div class="page-content"><!-- Your content goes here --></div>
        </section>
    </main>
</div>



</body>
</html>
