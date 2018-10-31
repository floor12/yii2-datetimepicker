<?php

namespace floor12\datetimepicker;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@vendor/floor12/yii-datetimepicker/picker';

    public $js = [
        'jquery.datetimepicker.js',
    ];

    public $css = [
        'jquery.datetimepicker.css',
    ];

	public $depends = [
		'yii\web\YiiAsset',
	];
}
