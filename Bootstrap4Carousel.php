<?php

namespace denis909\yii;

class Bootstrap4Carousel extends \yii\base\Widget
{

    const CAROUSEL_ITEM = Bootstrap4CarouselItem::class;

    public $theme;

    public $items = [];

    public $previousLabel = 'Previous';

    public $nextLabel = 'Next';

    public $enableControls = true;

    public $enableIndicators = true;

    public $active;

    public function run()
    {
        $active = $this->active;

        if (($active !== null) && !array_key_exists($active, $this->items))
        {
            $active = null;
        }

        if ($this->items && ($active === null))
        {
            $keys = array_keys($this->items);

            $active = array_shift($keys);
        }

        return $this->render('carousel', [
            'active' => $active,
            'items' => $this->items,
            'previousLabel' => $this->previousLabel,
            'nextLabel' => $this->nextLabel,
            'enableControls' => $this->enableControls,
            'enableIndicators' => $this->enableIndicators,
            'theme' => $this->theme,
            'carouselItemClass' => static::CAROUSEL_ITEM
        ]);
    }

}