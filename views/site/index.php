<?php
    $this->title = 'Нефтемаш - производство опор трубопроводов'
?>
<?= $this->render('/blocks/menu') ?>
<div id="main" class="clearfix">
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-xl-5">
                    <div class="logo text-xl-left text-center">
                        <img src="img/whitelogo.png" class="float-xl-left" alt="Logotype">
                        <h1 class="mb-0">НЕФТЕМАШ</h1>
                        <h2>ПРОИЗВОДСТВО ОПОР ТРУБОПРОВОДОВ</h2>
                    </div>
                </div>
                <div class="col-xl-7 text-xl-left text-center">
                    <p class="mt-2 ">Есть вопросы? Звоните прямо сейчас!   <span class="number"><a href="tel:88005512368">8 (800) 551-23-68</a></span></p>
                    <p>Отправьте заявку на почту <img src="img/mailicon.png" class="d-none d-xl-inline" alt="mail icon"> <span class="email"><a href="mailto:gk-neftemash@mail.ru">gk-neftemash@mail.ru</a></span></p>
                </div>
            </div>
        </div>
        <div class="content text-xl-center text-left pt-5">
            <h1>Изготовим опоры трубопроводов <br>
                от 5 календарных дней </h1>
            <h2 class="mb-4 mt-3">и оперативно доставим <br>
                по России до Вашего объекта!</h2>
            <p class="mt-3 d-none d-md-block"><a href="/neftemash.pdf" download>
                    <button><img src="img/pdf.png" alt="PDF symbol">СКАЧАТЬ ПРЕЗЕНТАЦИЮ.pdf</button>
                </a></p>

        </div>
    </div>
    <img src="img/opora.png" class="float-right d-none d-xl-block" alt="opora">
</div>

<?= $this->render('/blocks/opor', [
        'items' => $items,
        'type' => 'item'
]) ?>

<?= $this->render('/blocks/landingblock') ?>
<?= $this->render('/blocks/footer') ?>


