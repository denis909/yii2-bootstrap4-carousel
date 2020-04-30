<div id="carousel" class="carousel slide" data-ride="carousel">
    <?php if($enableIndicators):?>
    <ol class="carousel-indicators">

        <?php $num = 0;?>

        <?php foreach($items as $i => $item):?>

            <?php if($i == $active):?>

                <li data-target="#carousel" data-slide-to="<?= $num;?>" class="active"></li>

            <?php else:?>

                <li data-target="#carousel" data-slide-to="<?= $num;?>"></li>

            <?php endif;?>

            <?php $num++;?>

        <?php endforeach;?>
    </ol>
    <?php endif;?>

    <div class="carousel-inner">
        <?php
            foreach($items as $i => $item)
            {
                if (!is_array($item))
                {
                    $item = ['image' => $item];
                }

                if ($i == $active)
                {
                    $item['active'] = true;
                }

                echo $carouselItemClass::widget($item);
            }
        ?>
    </div>
    <?php if($enableControls):?>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"><?= $previousLabel;?></span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"><?= $nextLabel;?></span>
        </a>
    <?php endif;?>
</div>