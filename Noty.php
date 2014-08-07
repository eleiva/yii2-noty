<?php

namespace eleiva\noty;

use yii\helpers\Html;
use yii\helpers\Json;

class Noty extends \yii\base\Widget
{
    /* Html options for the enclosing element */
    public $options = [];

    /* Client options for noty.js */
    public $clientOptions = [];

    /* Tag of the surrounding element */
    public $tag = 'div';


    public function init(){
        $view = $this->getView();
        $asset = new NotyAssets([
            'publishOptions' => [
                'forceCopy' => true
            ]
        ]);
        $asset->register($view);

        echo Html::beginTag($this->tag,$this->options);

        $view->registerJs("var n = noty({text: 'noty - a jquery notification library!'});");
    }

    public function run()
    {
        echo Html::endTag($this->tag);
        return "Hello!";
    }
}
