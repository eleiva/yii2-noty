<?php

namespace eleiva\noty;

use yii\web\AssetBundle;

class AnimateAsset extends AssetBundle{
    
    public $sourcePath = '@bower/animate.css/js/noty/packaged';
    public function init(){
        $this->css[] = YII_DEBUG ? 'animate.css' : 'animate.min.js';
        parent::init();
    }
}
