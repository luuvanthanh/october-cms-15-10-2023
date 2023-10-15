<?php namespace Thanh\ManagerPost\Components;

use Cms\Classes\ComponentBase;
use Thanh\Managerpost\Models\Category;

/**
 * CategoryList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CategoryList extends ComponentBase
{
    public $categories;

    public function componentDetails()
    {
        return [
            'name' => 'Category List',
            'description' => 'Hien thi danh sach category'
        ];
    }

    public function onRun()
    {
        $this->categories = Category::all();
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
