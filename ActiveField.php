<?php

namespace denis909\bootstrap4;

use Yii;
use yii\helpers\ArrayHelper;
use denis909\theme\ActiveFieldInterface;
use denis909\theme\ActiveFieldTrait;

class ActiveField extends \yii\bootstrap4\ActiveField implements ActiveFieldInterface
{

    const SELECT2 = Select2::class;

    const DATE = DateInput::class;

    const TIME = TimeInput::class;

    const DATETIME = DateTimeInput::class;

    const DATERANGE = DateRangeInput::class;

    use ActiveFieldTrait;

    public $checkOptions = [
        'class' => ['widget' => 'control-input'],
        'labelOptions' => [
            'class' => ['widget' => 'control-label']
        ]
    ];

    public $checkTemplate = "{label}\n<br>{input}\n{error}\n{hint}";

    public function date(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATE, $options);
    }

    public function daterange(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATERANGE, $options);
    }

    public function datetime(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATETIME, $options);
    }

    public function time(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::TIME, $options);
    }

    public function select2(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;
        
        return $this->widget(static::SELECT2, $options);
    }

    public function checkbox($options = [], $enclosedByLabel = false)
    {
        $options['labelOptions'] = ArrayHelper::getValue($options, 'labelOptions', [
            'class' => ''
        ]);

        return parent::checkbox($options, $enclosedByLabel);
    }

    public function imageFileInput(array $options = [])
    {
        return $this->fileInput($options);
    }
    
}