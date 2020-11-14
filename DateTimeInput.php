<?php

namespace denis909\bootstrap4;

use yii\helpers\ArrayHelper;

class DateTimeInput extends \kartik\datetime\DateTimePicker
{

    public $bsVersion = '4';

    public $defaultPluginOptions = [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd hh:ii:ss'
    ];

    public $defaultOptions = [
        'autocomplete' => 'off'
    ];

    public function init()
    {
        $this->options = ArrayHelper::merge($this->defaultOptions, $this->options);

        $this->pluginOptions = ArrayHelper::merge($this->defaultPluginOptions, $this->pluginOptions);

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