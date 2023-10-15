<?php namespace Thanh\Managerpost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhManagerpostPosts extends Migration
{
    public function up()
    {
        Schema::create('thanh_managerpost_posts', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('body')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('category_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('thanh_managerpost_posts');
    }
}
