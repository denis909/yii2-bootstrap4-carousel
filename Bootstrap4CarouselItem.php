<?php

namespace denis909\yii;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Bootstrap4CarouselItem extends \yii\base\Widget
{

    public $tag = 'div';

    public $active;

    public $options = [];

    public $defaultOptions = ['class' => 'carousel-item'];

    public $activeClass = 'active';

    public $image;

    public $imageOptions = [];

    public $defaultImageOptions = ['class' => 'd-block w-100'];

    public function run()
    {
        $imageOptions = ArrayHelper::merge($this->defaultImageOptions, $this->imageOptions);

        $image = Html::img($this->image, $imageOptions);

        $options = ArrayHelper::merge($this->defaultOptions, $this->options);

        if ($this->active)
        {
            Html::addCssClass($options, $this->activeClass);
        }

        return Html::tag($this->tag, $image, $options);
    }

}