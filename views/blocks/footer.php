<div id="footer">
    <div class="line">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2">КОНТАКТЫ</div>
                <div class="col-12 col-md"><img src="img/phone-call.png" class="float-left" alt="icon"><p><a href="tel:88005512368">8 (800) 551-23-68</a></p></div>
                <div class="col-12 col-md"><img src="img/mail.png" class="float-left" alt="icon"><p><a href="mailto:gk-neftemash@mail.ru">gk-neftemash@mail.ru</a></p></div>
                <div class="col-12 col-md-3"><img src="img/blank-map-pointer.png" class="float-left" alt="pointer"><p>Альметьевск,<br>
                        ул. Объездная, д.5</p></div>
            </div>
        </div>
    </div>
    <div class="content">
        <div>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3eeb1dd076b8c66f14a341a1571f50b94fe8300ffd8297bb83da82763dc7a38b&amp;width=100%25&amp;height=630&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="form" style='background-image: url("img/footerbg.jpg");background-size: cover;'>
            <h1>Изготовим опоры трубопроводов<br>
                от 5 календарных дней<br>
                и Бесплатно доставим по России<br>
                до Вашего объекта!</h1>
            <form action="/sendmail" method="post">
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <div class="row">
                    <div class="col-12 col-md-6"><p>
                            <input type="text" placeholder="Введите имя" name="name" required>
                        </p>
                        <p>
                            <input type="text" placeholder="Введите телефон" name="number" required>
                        </p>
                        <p>
                            <input type="email" placeholder="Введите E-mail" name="email" required>
                        </p></div>
                    <div class="col-12 col-md-6"><textarea style="height: 229px;" name="ordertext" placeholder="Ваш заказ"></textarea></div>
                </div>
                <input type="file" name="file1" id="file3" class="d-none">
                <input type="file" name="file2" id="file4" class="d-none">
                <p>Прикрепите заявку и свои реквизиты – и мы сразу сможем выставить Вам счет.</p>
                <div class="row">
                    <div class="col-12 col-md-3"><label for="file3" class="w-100"><img src="img/plusfle.png" class="float-left mt-2 ml-2 d-lg-inline d-none" alt="pluc icon"><p class="my-1">Прикрепите<br>заявку</p></span></label></div>
                    <div class="col-12 col-md-3"><label for="file4" class="w-100"><img src="img/plusfle.png" class="float-left mt-2 ml-2 d-lg-inline d-none" alt="pluc icon"><p class="my-1">Прикрепите<br>реквизиты</p></label></div>
                    <div class="col-12 col-md-6">
                        <button>Отправить</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 text-center text-md-left"><img src="img/orangelogo.png" alt="orangelogo" class="float-xl-left"><h1 class="mb-0">НЕФТЕМАШ</h1>
                    <h2>ПРОИЗВОДСТВО ОПОР ТРУБОПРОВОДОВ</h2> </div>
                <div class="col-12 col-md-4 text-center">© 2018 All rights reserved.</div>
                <div class="col-12 col-md-4 text-center text-md-right"><a href="#">Политика конфиденциальности
                    </a></div>
            </div>
        </div>
    </div>
</div>