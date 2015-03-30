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
        $view = $this->getView();
        NestedSortableAsset::register($view);
        $view->registerJs("\$('#" . $this->getId() . "').nestedSortable({
            handle: 'div',
            items: 'li',
            toleranceElement: '> div'
        });");
    }

    public function run()
    {
        return '<ol class="sortable" id="'.$this->getId().'">
    <li><div>Some content</div></li>
    <li>
        <div>Some content</div>
        <ol>
            <li><div>Some sub-item content</div></li>
            <li><div>Some sub-item content</div></li>
        </ol>
    </li>
    <li><div>Some content</div></li>
</ol>';
    }

}
