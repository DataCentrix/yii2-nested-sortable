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
<<<<<<< Updated upstream
            handle: 'div',
            items: 'li',
            toleranceElement: '> div'
=======
            forcePlaceholderSize: true,
handle: 'div',
helper:	'clone',
items: 'li',
opacity: .6,
placeholder: 'placeholder',
revert: 250,
tabSize: 25,
tolerance: 'pointer',
toleranceElement: '> div',
maxLevels: 3,
isTree: true,
expandOnHover: 700,
startCollapsed: false,
>>>>>>> Stashed changes
        });");
    }

    public function run()
    {
        return '<ol class="sortable" id="'.$this->getId().'">
    <li><div>Some content</div></li>
    <li>
        <div>Some content</div>
        <ol>
<<<<<<< Updated upstream
            <li><div>Some sub-item content</div></li>
=======
            <li><div>Some sub-item content<br /><input type="text" /><input type="button" /></div></li>
>>>>>>> Stashed changes
            <li><div>Some sub-item content</div></li>
        </ol>
    </li>
    <li><div>Some content</div></li>
</ol>';
    }

}
