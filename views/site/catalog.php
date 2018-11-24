<?php
$this->title = 'Каталог опор';
?>
<?= $this->render('/blocks/menu') ?>
<?= $this->render('/blocks/header') ?>
<div id="itemInfo">
    <div class="breadcrumbs py-3">
        <div class="container">
            Главная » <span class="active">Каталог</span>
        </div>
    </div>
</div>
<div id="catalog" class="mt-5">
    <div class="container">
        <?php foreach($items as $item): ?>
            <h3><u><?= $item->text ?></u></h3>
            <p>
            <?php foreach($item->varieties as $variety): ?>
                <h4 class="mr-4"><a href="<?= \yii\helpers\Url::to(['variety','id' => $variety->id]) ?>"><?= $variety->text ?></a></h4>
            <?php endforeach; ?>
            </p>
        <?php endforeach; ?>

    </div>
</div>

<?= $this->render('/blocks/footer') ?>
