<?php
/**
 * @link http://www.datacentrix.org/
 * @copyright Copyright (c) 2015 Data Centrix Ltd
 * @license GPL-3.0
 * @see LICENSE
 */

namespace datacentrix\sortable;

use yii;

/**
 * Class AutoloadExample
 * @package datacentrix\sortable
 * @author Stanimir Stoyanov <stanimir@datacentrix.org>
 * @since 1.0
 *
 * nestedSortable is a jQuery plugin that extends jQuery Sortable UI functionalities to nested lists.
 *
 */
class NestedSortable extends \yii\base\Widget
{
    public function init()
    {
        Yii::$app->getAssetManager()->publish('datacentrix\sortable\NestedSortableAsset');
    }

    public function run()
    {
        return "Hello!";
    }
}
