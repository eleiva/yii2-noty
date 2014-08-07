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
    public $clientOptions = [];

    /* Tag of the surrounding element */
    public $tag = 'div';


    public function init(){
        $view = $this->getView();
        $asset = new NotyAsset([
            'publishOptions' => [
                'forceCopy' => true
            ]
        ]);
        $asset->register($view);

        $opts = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : "{}";
        $view->registerJs("noty($opts);");
    }

    public function run()
    {
    }
}
