<?php

namespace denis909\bootstrap4;

use Yii;
use yii\helpers\ArrayHelper;
use denis909\yii\Bootstrap4Carousel;
use denis909\yii\Bootstrap4CarouselItem;

class Theme extends \denis909\yii\Theme
{

    const GRID_VIEW = GridView::class;

    const DETAIL_VIEW = DetailView::class;

    const CAROUSEL = Bootstrap4Carousel::class;

    const CAROUSEL_ITEM = Bootstrap4CarouselItem::class;

    const ACTIVE_FORM = ActiveForm::class; 

    const SELECT2 = Select2::class;

    const DATE_PICKER = DatePicker::class;

    const TIME_PICKER = TimePicker::class;

    const DATETIME_PICKER = DateTimePicker::class;

    const DATERANGE_PICKER = DateRangePicker::class;

    const BREADCRUMBS = Breadcrumbs::class;

    const TABS = Tabs::class;    

    public $breadcrumbsOptions = ['options' => ['class' => 'mb-0', 'style' => 'background-color: inherit;']];

    public $submitButtonOptions = ['class' => 'btn btn-primary'];

    public $saveButtonOptions = ['class' => 'btn btn-light'];

    public $tabsOptions = [];

    public function date(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATE_PICKER, $options);
    }

    public function datetime(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATETIME_PICKER, $options);
    }

    public function daterange(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::DATERANGE_PICKER, $options);
    }

    public function time(array $options = [])
    {
        Yii::$app->params['bsDependencyEnabled'] = false;
        
        return $this->widget(static::TIME_PICKER, $options);
    }

    public function select2(array $options = [])
    {
        $options['theme'] = ArrayHelper::getValue($options, 'theme', 'krajee-bs4');

        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::SELECT2, $options);
    }

    public function tabs(array $options = [])
    {
        $options['theme'] = ArrayHelper::getValue($options, 'theme', 'krajee-bs4');

        Yii::$app->params['bsDependencyEnabled'] = false;

        return $this->widget(static::TABS, $options);
    }

    public function carousel(array $options = [])
    {
        return $this->widget(static::CAROUSEL, array_merge($options, ['theme' => $this]));
    }

    public function carouselItem(array $options = [])
    {
        return $this->widget(static::CAROUSEL_ITEM, $options);
    }

}