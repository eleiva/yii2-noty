<?php

namespace eleiva\noty;

use yii\helpers\Json;
use yii\base\Widget;

/**
 * Noty Notification Wrapper @see http://ned.im/
 * 
 * @author Eduardo Leiva
 * @author Victor Demin <demin@trabeja.com>
 */
class Noty extends Widget {

    /**
     * Notification message 
     * @var string
     */
    public $text;

    /**
     * Notification type
     * @var string
     */
    public $type = self::ALERT;

    /**
     * Other Noty options.
     * @var array
     */
    public $clientOptions = [
        'timeout' => 1000,
        'layout' => 'topRight',
        'dismissQueue' => true,
        'theme' => 'defaultTheme',
    ];

    /**
     * If to register Animate.css @see https://github.com/daneden/animate.css
     * @var boolean
     */
    public $useAnimateCss = false;

    const ALERT = 'alert';
    const SUCCESS = 'success';
    const ERROR = 'error';
    const WARNING = 'warning';
    const INFORMATION = 'information';

    /**
     * Init widget
     */
    public function init() {
        $view = $this->getView();
        $asset = new NotyAsset();
        $asset->register($view);
        if ($this->useAnimateCss) {
            $cssAsset = new AnimateAsset();
            $cssAsset->register($view);
        }

        $this->clientOptions['text'] = $this->text;
        $this->clientOptions['type'] = $this->type;
        $opts = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : "{}";
        $view->registerJs("noty($opts);");
    }

}
