<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->required();
            $table->string('description')->nullable();
            $table->tinyInteger('status')->default(1); // 1 - enabled; 0 - disabled
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
        //
        Schema::drop('product_units');
    }
}
