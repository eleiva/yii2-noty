<?php

namespace eleiva\noty;

use yii\web\AssetBundle;

class NotyAsset extends AssetBundle{
    
    public $sourcePath = '@bower/noty/js/noty/packaged';
    public $depends =[
        'yii\web\JqueryAsset'
    ];

    public function init(){
        $this->js[] = YII_DEBUG ? 'jquery.noty.packaged.js' : 'jquery.noty.packaged.min.js';
        parent::init();
    }
}
