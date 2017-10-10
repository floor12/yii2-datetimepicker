<?php

namespace floo12\datetimepicker;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
	public $sourcePath = '@floor12/datetimepicker/picker';

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
