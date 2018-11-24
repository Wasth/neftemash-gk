<?php
    $this->title = 'Фото и видео';
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
<div id="itemInfo">
    <div class="breadcrumbs py-3">
        <div class="container">
            Главная » <span class="active">Фото и видео</span>
        </div>
    </div>
</div>
<div id="photos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
            <div class="col-12 col-md-6 col-lg-4 mt-4" data-toggle="modal" data-target="#exampleModal"><img
                    src="img/slide1.jpg" alt="" class="w-100"></div>
        </div>
    </div>
</div>


<div id="jbutton" class="py-5 ph">
    <div class="container">
        <h2 class="text-center mt-5">Желаете убедиться в качестве?</h2>
        <h1 class="text-center mt-1">Закажите пробные образцы продукции!</h1>
        <p class="text-center mb-5"><a href="#footer"><button>ХОЧУ ПОЛУЧИТЬ ОБРАЗЦЫ</button></a></p>
    </div>
</div>
<?= $this->render('/blocks/footer') ?>