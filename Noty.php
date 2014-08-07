<?php

namespace eleiva\noty;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;

class Noty extends Widget
{
    /* Html options for the enclosing element */
    public $options = [];

    /* Client options for noty.js */
    public $clientOptions = [
               'type' => 'information',
               'timeout' => 1000,
               'layout' => 'topRight',
               'dismissQueue' => true,
               'theme' => 'defaultTheme' ,
           ];

    /* Tag of the surrounding element */
    public $tag = 'div';

    public $text = '';

    public function init(){
        $view = $this->getView();
        $asset = new NotyAsset([
            'publishOptions' => [
                'forceCopy' => true
            ]
        ]);
        $asset->register($view);
        $this->clientOptions['text'] = $this->text;

        $opts = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : "{}";
        $view->registerJs("noty($opts);");
    }

    public function run()
    {
    }
}
