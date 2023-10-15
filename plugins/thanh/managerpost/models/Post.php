<?php namespace Thanh\Managerpost\Models;

use Model;
// use Thanh\Managerpost\Models\Category;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'thanh_managerpost_posts';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    //relation
    public $belongsTo = [
        'category' => 'Thanh\Managerpost\Models\Category'
    ];
    //thumbnail
    public $attachOne = [
        'thumbnail' => 'System\Models\File'
    ];

    // get option use dropdown
    // public function getCategoryIdOptions()
    // {
    //     return Category::all()->lists('name', 'id');
    // }
}
