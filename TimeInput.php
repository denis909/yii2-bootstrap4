<?php

namespace denis909\bootstrap4;

use yii\helpers\ArrayHelper;

class TimeInput extends \kartik\time\TimePicker
{

    public $bsVersion = '4';

    public $defaultPluginOptions = [
        'autoclose' => true,
        'format' => 'hh:ii:ss'
    ];

    public $defaultOptions = [
        'autocomplete' => 'off'
    ];

    public function init()
    {
        $this->pluginOptions = ArrayHelper::merge($this->defaultPluginOptions, $this->pluginOptions);

        $this->options = ArrayHelper::merge($this->defaultOptions, $this->options);

        parent::init();

        if ($this->model && $this->attribute)
        {
            if ($this->model->hasErrors($this->attribute))
            {
                if (isset($this->options['class']))
                {
                    $this->options['class'] .= ' is-invalid';
                }
                else
                {
                    $this->options['class'] = 'is-invalid';
                }
            }
        }
    }

}