<?php

namespace Thanh\ManagerPost\Components;

use Cms\Classes\ComponentBase;
use Thanh\Managerpost\Models\Category;

/**
 * CategoryDetail Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CategoryDetail extends ComponentBase
{
    public $category;

    public function componentDetails()
    {
        return [
            'name' => 'Category Detail',
            'description' => 'Hien thi category detail'
        ];
    }

    public function onRun()
    {
        $categorySlug = $this->param('slug');

        $category = Category::where('slug', $categorySlug)->first();

        if ($category) {
            $this->category = $category;
        } else {

            return $this->controller->run('404');
        }
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
