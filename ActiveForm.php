<?php

namespace denis909\bootstrap4;

use denis909\theme\ActiveFormInterface;
use denis909\theme\ActiveFormTrait;

class ActiveForm extends \yii\bootstrap4\ActiveForm implements ActiveFormInterface
{

    use ActiveFormTrait;

    public $fieldClass = ActiveField::class;

    public $enableAjaxValidation = false;

    public $enableClientValidation = false;

    public $enableClientScript = false;
    
}