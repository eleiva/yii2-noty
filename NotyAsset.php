<?

namespace eleiva\noty;

use yii\web\AssetBundle;

class NotyAsset extends AssetBundle{
    public $depends =[
        'yii\web\JqueryAsset'
    ];

    public function init(){
        parent::init();

        $this->sourcePath = __DIR__. DIRECTORY_SEPARATOR . 'assets';
        $this->js[] = YII_DEBUG ? 'jquery.noty.js' : 'jquery.noty.min.js';
        $this->js[] = 'noty.bootstrap.js';
        $this->css[] = 'noty.css';
    }
}
