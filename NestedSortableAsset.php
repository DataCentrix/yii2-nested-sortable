<?php

/**
 * @link http://www.datacentrix.org/
 * @package yii2-nested-sortable
 * @copyright Copyright (c) 2015 Data Centrix Ltd
 * @copyright Copyright (c) 2016 StanSoft.BG Ltd
 * @license GPL-3.0
 * @see LICENSE
 * @version 1.0
 */

namespace stansoft\sortable;
use yii\web\AssetBundle;
use yii;

/**
 * Asset bundle for NestedSortable Widget
 *
 * @author Stanimir Stoyanov <stan@linux.com>
 * @since 1.0
 */
class NestedSortableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/stansoft/yii2-nested-sortable/assets';
    public $js = [
        'nested-sortable.js'
    ];
    public $css = [
        'nested-sortable.css'
    ];
    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
