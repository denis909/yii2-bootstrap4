<?php

namespace denis909\bootstrap4;

use yii\helpers\ArrayHelper;

class TimePicker extends \kartik\time\TimePicker
{

    public $bsVersion = '4';

    public $defaultPluginOptions = [
        'autoclose' => true,
        'format' => 'hh:ii:ss'
    ];

    public function init()
    {
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