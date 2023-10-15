<?php namespace Thanh\Managerpost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhManagerpostCategories extends Migration
{
    public function up()
    {
        Schema::create('thanh_managerpost_categories', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_managerpost_categories');
    }
}
