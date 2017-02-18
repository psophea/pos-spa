<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('icon')->default('');
            $table->string('icon_type')->nullable()->default('font');
            $table->boolean('is_nav_label')->default(false);
            $table->boolean('collapse')->default(true);
            $table->boolean('active')->default(false);
            $table->string('href')->default('');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->tinyInteger('order')->default(1);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
