<?php

namespace denis909\bootstrap4;

use yii\helpers\ArrayHelper;

class Select2 extends \kartik\select2\Select2
{

    public $showToggleAll = false;
                    
    public $theme = 'krajee-bs4';//'default';

    public $bsVersion = '4';

    public $defaultOptions = [
        'class' => 'form-control',
        'autocomplete' => 'off'
    ];

    public $defaultPluginOptions = [
        'multiple' => false,
        'closeOnSelect' => true,
        'allowClear' => true
    ];

    public function init()
    {
        $this->pluginOptions = ArrayHelper::merge($this->defaultPluginOptions, $this->pluginOptions);

        $this->options = ArrayHelper::merge($this->defaultOptions, $this->options);

        parent::init();
    }


}