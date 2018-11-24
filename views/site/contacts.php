<?php
$this->title = 'Наши контакты';
?>
<?= $this->render('/blocks/menu') ?>
<?= $this->render('/blocks/header') ?>
<div id="itemInfo">
    <div class="breadcrumbs py-3">
        <div class="container">
            Главная » <span class="active">Контакты</span>
        </div>
    </div>
</div>
<div id="contacts">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-5">
                <h1>КОНТАКТЫ</h1>
                <div class="row">
                    <div class="col-12 mt-4"><img src="img/phone-call-orange.png" class="float-left" alt="icon"><p><a href="tel:88005512368">8 (800) 551-23-68</a></p></div>
                    <div class="col-12 mt-4"><img src="img/mailorange.png" class="float-left" alt="icon"><p><a href="mailto:gk-neftemash@mail.ru"><u>gk-neftemash@mail.ru</u></a></p></div>
                    <div class="col-12 mt-4"><img src="img/blank-map-pointer-orange.png" class="float-left" alt="pointer"><p class="mt-3">Альметьевск,<br>
                            ул. Объездная, д.5</p></div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3eeb1dd076b8c66f14a341a1571f50b94fe8300ffd8297bb83da82763dc7a38b&amp;width=100%25&amp;height=630&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>
<script src="js/main.js"></script>

<div id="jbutton" class="py-5 ct">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-5">
                <img src="img/folder.jpg" alt="folder">
            </div>
            <div class="col-12 col-md-7">
                <h1 class="text-center mt-4">СКАЧАЙТЕ НАШИ ДОКУМЕНТЫ</h1>
                <h2 class="text-center mt-1">для проверки контрагента</h2>
                <p class="text-center">
                    <a href=""><button>СКАЧАТЬ ДОКУМЕНТЫ WinRar</button></a>
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->render('/blocks/footer') ?>
