<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->


            <?php
            foreach($categories as $a) {
                ?><li class="promo__item promo__item--<?=$a['name_eng']?>">
                <a class="promo__link" href="pages/all-lots.html"><?=$a['name']?></a>
                </li><?php
            }
            ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->


            <?php
            foreach ($announcements as $a){
            ?><li class="lots__item lot">
                <div class="lot__image">
                    <img src="img/<?=$a['image']?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$a['name']?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.php?pages=<?=$a["id_lot"]?>"><?=$a['lot_name']?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая Цена</span>
                            <span class="lot__cost"><?=sub_format($a["start_cost"])?></span>
                        </div>
                        <div class="lot__timer timer">
                        <?=timer()?>
                        </div>
                    </div>
                </div>
            </li>
            <?php }?>
        </ul>
    </section>
