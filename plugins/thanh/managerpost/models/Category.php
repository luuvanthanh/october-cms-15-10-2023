<?php namespace Thanh\Managerpost\Models;

use Model;

/**
 * Model
 */
class Category extends Model
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
    public $table = 'thanh_managerpost_categories';

    /**
     * @var array rules for validation.
     */
    public $rules = [
        'name' => 'required|unique:thanh_managerpost_categories,name'
    ];

    public $customMessages = [
        'name.requied' => 'Ten khong duoc bo trong',
        'name.unique' => 'Ten da ton tai trong co so du lieu'
    ];

}
