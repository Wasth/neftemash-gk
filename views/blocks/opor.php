<div id="opor">
    <div class="container">
        <h1>Более 600 видов </h1>
        <h2>опор и подвесок</h2>
        <div class="d-lg-table  w-100">
            <div class="tabs d-lg-table-row">
                <div class="mr-lg-2 d-lg-table-cell align-middle">Скользящие</div>
                <div class="mr-lg-2 d-lg-table-cell align-middle">Подвижные/<br>неподвижные</div>
                <div class="mr-lg-2 d-lg-table-cell align-middle">Приварные/<br>хомутовые</div>
                <div class="mr-lg-2 d-lg-table-cell align-middle">Корпусные/<br>бескорпусные</div>
                <div class="mr-lg-2 d-lg-table-cell align-middle">Подвесные/<br>пружинные</div>
            </div>
        </div>
        <h3 class="text-center my-5">Возможна разработка чертежей КМД и изготовление по Вашим ТУ</h3>
        <?php
            if(sizeof($items) > 8) {
                echo '<div class="row row-eq-height items">';
                for($i = 0;$i < 8;$i++) {
                    echo '<div class="col-md-3 text-center">
                            <a href="'.\yii\helpers\Url::to([$type,'id' => $items[$i]->id]).'"><div>
                                <div class="img-wrapper"><img src="'.$items[$i]->getImgUrl().'" alt="opora"></div>
                                <h4>'.$items[$i]->text.'</h4>
                            </div></a>
                        </div>';
                }
                echo '</div>';
                echo "<div id=\"restItems\" class=\"collapse row row-eq-height items rest-items\">";
                for($i = 8;$i < sizeof($items);$i++) {
                    echo "<div class=\"col-md-3 text-center\">
                                    <a href='".\yii\helpers\Url::to([$type,'id' => $items[$i]->id])."'><div>
                                         <div class=\"img-wrapper\"><img src=\"".$items[$i]->getImgUrl()."\" alt=\"opora\"></div>
                                        <h4>".$items[$i]->text."</h4>
                                    </div></a>
                                </div>";
                }
                echo "</div><p class=\"text-center\"><button class=\"show-all\" data-toggle=\"collapse\" data-target=\"#restItems\" aria-expanded=\"false\" aria-controls=\"restItems\">ПОКАЗАТЬ ВСЕ</button></p>";
            }else {
                echo '<div class="row row-eq-height items">';
                foreach ($items as $one) {
                    echo '<div class="col-md-3 text-center">
                            <a href="'.\yii\helpers\Url::to([$type,'id' => $one->id]).'"><div>
                                <div class="img-wrapper"><img src="'.$one->getImgUrl().'" alt="opora"></div>
                                <h4>'.$one->text.'</h4>
                            </div></a>
                        </div>';
                }
                echo '</div>';
            }
        ?>

    </div>
</div>