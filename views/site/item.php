<?php
    $this->title = $item->text;
?>
<?= $this->render('/blocks/menu') ?>
<?= $this->render('/blocks/header') ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>


<?php if($item->tableName() == 'variety'): ?>
    <div class="modal fade" id="schemeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <?php foreach ($item->schemes as $scheme): ?>
                        <div><img src="<?= $scheme->getImgUrl() ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="characsModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <?php if($item->characs): ?>
                        <?= $item->characs->content ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<div id="itemInfo">
    <div class="breadcrumbs py-3">
        <div class="container">
            Главная <?= $item->tableName() == 'variety' ? '» '.$item->item->text : '' ?> » <span class="active"><?= $item->text ?></span>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="main-pic">
                    <img src="<?= $item->getImgUrl() ?>" class="w-100" alt="опора">
                </div>
                <div class="row mt-4">
                    <?php if($item->getAdditionalPics()): ?>
                        <?php foreach($item->additionalPics as $onepic): ?>
                            <div class="col-4" data-toggle="modal" data-target="#exampleModal"><img src="<?= $onepic->getImgUrl() ?>" class="w-100" alt=""></div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-first order-lg-last">
                <h2 class=""><?= $item->tableName() == 'variety' ? $item->item->text : '' ?></h2>
                <h1 class="mb-5"><?= $item->text ?></h1>
                <h3 class="mb-5">Изготовим опоры трубопроводов<br>
                    от 5 календарных дней<br>
                    и Бесплатно доставим по России<br>
                    до Вашего объекта!</h3>
                <div class="row mb-3">
                    <?php
                        if($item->tableName() == 'variety'):
                    ?>
                    <div class="col-6 pr-1">
                        <button data-toggle="modal" data-target="#characsModal">ХАРАКТЕРИСТИКИ</button>
                    </div>
                    <div class="pl-1 col-6">
                        <button data-toggle="modal" data-target="#schemeModal">ЧЕРТЕЖИ</button>
                    </div>
                    <?php endif; ?>
                </div>
                <p>
                    <a href="/neftemash.pdf"><button><img src="img/pdf.png" alt="PDF symbol">СКАЧАТЬ ПРЕЗЕНТАЦИЮ.pdf</button></a>
                </p>
            </div>
        </div>
    </div>
</div>

<?= $items ? $this->render('/blocks/opor', [
    'items' => $items,
    'type' => 'variety'
]) : '' ?>
<div class="mt-5"></div>
<?= $this->render('/blocks/landingblock') ?>
<?= $this->render('/blocks/footer') ?>