<?php

namespace Thanh\ManagerPost\Components;

use Cms\Classes\ComponentBase;
use Thanh\Managerpost\Models\Post;

/**
 * PostList Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class PostList extends ComponentBase
{
    public $posts;
    public $file;

    public function componentDetails()
    {
        return [
            'name' => 'Post List',
            'description' => 'Hien thi danh sach post'
        ];
    }

    public function onRun()
    {
        $this->posts = Post::all();
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
